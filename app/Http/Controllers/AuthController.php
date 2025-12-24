<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showDashboardstudent()
    {
        $name = Auth::user()->name;
         return view('student.dashboard', compact('name'));
    }


    public function create()
    {
        return view('auth.register');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('admin.update', compact('user'));
    }

    // Fungsi untuk menyimpan perubahan
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:student',
            'password' => 'nullable|min:8|confirmed', // Password opsional, jika diisi maka harus valid
        ]);

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Perbarui data pengguna
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        // Jika password diisi, perbarui juga password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save(); // Simpan perubahan ke database

        return redirect()->route('data.pengguna')
            ->with('success', 'Data pengguna berhasil diperbarui.');
    }

    // Handle Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect based on role
            return $this->redirectUser();
        }

        return back()->withInput($request->only('email'))
        ->withErrors(['login' => 'Invalid email or password. Please try again.']);
    }

    // Redirect user based on role
    private function redirectUser()
    {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } else if (Auth::user()->role == 'lecturer'){
            return redirect()->route('lecturer.dashboard');
        }

        return redirect()->route('student.dashboard');
    }

    // Show Registration Form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
        ]);

        // Create user with role
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,  // Set role during registration
        ]);

        // Flash a success message to session
        session()->flash('success', 'Create successful!');

        // Redirect to the login page
        return redirect()->route('login');
    }


    // Handle Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
