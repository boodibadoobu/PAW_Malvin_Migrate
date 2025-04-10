<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    
use App\Models\ListMobil;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = ListMobil::all(); // Ambil semua data dari tabel
        return view('index', compact('mobil')); // Kirim ke view
    }
}