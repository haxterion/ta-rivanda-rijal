<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function pesan()
{
 
    $paket = DB::table('tb_paket')->get();
    $lokasi = DB::table('tb_lokasi')->get();
	return view('pesan',compact('paket','lokasi'));
 
}
    public function tambah(Request $request)
    {
DB::table('tb_pesanan')->insert([
    'id_user' => $request->id_user,
    'acara' => $request->acara,
    'tanggal' => date(' Y-m-d', strtotime($request->tanggal)),
    'id_paket' => $request->id_paket,
    'id_kota' => $request->id_kota,
    'alamat' => $request->alamat,
    'catatan' => $request->catatan,
    'konfirmasi' => 0
]);
// alihkan halaman ke halaman pegawai
return view('status');
}
}
