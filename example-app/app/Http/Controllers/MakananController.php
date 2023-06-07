<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MakananController extends Controller
{
    public function tampil()
    {
        // $makanans = "Fania Dwi Wardani";

        $makanans = Makanan::all();

        // cek isi data makanans
        // dd($makanans)

        return view('welcome', ['makanans' => $makanans]);
    }
}