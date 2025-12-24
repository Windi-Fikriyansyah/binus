<?php

namespace App\Http\Controllers;

use App\Models\Proposals;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

        return view('student.app');
    }

    public function academy()
    {

        return view('student.academic');
    }

    public function financial()
    {
        $overdue = DB::table('transaksi')
        ->where('status', 'Overdue')
        ->get();

        return view('student.financial', compact('overdue'));
    }
    public function summary()
    {

        $evenSemesterPayments2025 = DB::table('transaksi')
        ->where('jenis', '2025, Odd Semester')
        ->get();

        $evenSemesterPayments = DB::table('transaksi')
        ->where('jenis', '2024, Even Semester ')
        ->get();

    // Mengambil data pembayaran semester ganjil
    $oddSemesterPayments = DB::table('transaksi')
        ->where('jenis', '2024, Odd Semester ')
        ->get();

        $eventSemesterPayments2023 = DB::table('transaksi')
        ->where('jenis', '2023, Even Semester')
        ->get();

        $oddSemesterPayments2023 = DB::table('transaksi')
        ->where('jenis', '2023, Odd Semester')
        ->get();

    return view('student.summary', compact('evenSemesterPayments', 'oddSemesterPayments','eventSemesterPayments2023','oddSemesterPayments2023','evenSemesterPayments2025'));
    }



}
