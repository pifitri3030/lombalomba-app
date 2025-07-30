<?php

namespace App\Http\Controllers;

use App\Models\Lomba; // ← INI YANG PENTING
use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function index()
    {
        $lombas = Lomba::all();
        return view('lomba.index', compact('lombas'));
    }

    public function syarat($id)
    {
        $lomba = Lomba::findOrFail($id);
        return view('lomba.syarat', compact('lomba'));
    }
}
