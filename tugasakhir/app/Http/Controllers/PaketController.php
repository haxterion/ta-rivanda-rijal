<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $paket = DB::table('tb_paket')->inRandomOrder()
            ->get();
        return view('paket', compact('paket'));
    }
}
