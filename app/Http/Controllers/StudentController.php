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
            ->whereIn('status', ['Overdue', 'Upcoming'])
            ->get();

        return view('student.financial', compact('overdue'));
    }
    public function summary()
    {

        // $evenSemesterPayments2026 = DB::table('transaksi')
        //     ->where('jenis', '2026, Odd Semester')
        //     ->orderBy('id', 'asc')
        //     ->get();

        $evenSemesterPayments2025 = DB::table('transaksi')
            ->where('jenis', '2025, Even Semester')
            ->orderByRaw("
            CASE
                WHEN status = 'Upcoming' THEN 1
                WHEN status = 'Overdue' THEN 2
                WHEN status = 'Paid' THEN 3
                WHEN status = 'paid' THEN 3
                ELSE 4
            END
        ")
            ->orderByRaw("
        STR_TO_DATE(
            SUBSTRING_INDEX(tanggal, 'Due on ', -1),
            '%e %M %Y'
        ) DESC
    ")
            ->get();
        $oddSemesterPayments2025 = DB::table('transaksi')
            ->where('jenis', '2025, Odd Semester')
            ->orderBy('id', 'asc')
            ->get();

        $evenSemesterPayments = DB::table('transaksi')
            ->where('jenis', '2024, Even Semester ')
            ->orderBy('id', 'asc')
            ->get();

        // Mengambil data pembayaran semester ganjil
        $oddSemesterPayments = DB::table('transaksi')
            ->where('jenis', '2024, Odd Semester ')
            ->orderBy('id', 'asc')
            ->get();

        $eventSemesterPayments2023 = DB::table('transaksi')
            ->where('jenis', '2023, Even Semester')
            ->orderBy('id', 'asc')
            ->get();

        $oddSemesterPayments2023 = DB::table('transaksi')
            ->where('jenis', '2023, Odd Semester')
            ->orderBy('id', 'asc')
            ->get();

        return view('student.summary', compact('evenSemesterPayments', 'oddSemesterPayments2025', 'oddSemesterPayments', 'eventSemesterPayments2023', 'oddSemesterPayments2023', 'evenSemesterPayments2025'));
    }
}
