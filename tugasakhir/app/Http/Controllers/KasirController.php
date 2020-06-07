<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasirController extends Controller
{
    public function index()
    {
    
        $kasir = DB::table('tb_pesanan')
        ->join('users', 'users.id', '=', 'tb_pesanan.id_user')
        ->join('tb_paket', 'tb_paket.id', '=', 'tb_pesanan.id_paket')
        ->join('tb_lokasi', 'tb_lokasi.id', '=', 'tb_pesanan.id_kota')
        ->select('tb_pesanan.*', 'users.name', 'tb_paket.nama_paket','tb_lokasi.nama_kota')
        ->where('tb_pesanan.konfirmasi', '=', 0)
        ->get();;
 
    
    	return view('kasir',['kasir' => $kasir]);
 
    }
    public function done()
    {
    
        $kasir = DB::table('tb_pesanan')
        ->join('users', 'users.id', '=', 'tb_pesanan.id_user')
        ->join('tb_paket', 'tb_paket.id', '=', 'tb_pesanan.id_paket')
        ->join('tb_lokasi', 'tb_lokasi.id', '=', 'tb_pesanan.id_kota')
        ->select('tb_pesanan.*', 'users.name', 'tb_paket.nama_paket','tb_lokasi.nama_kota')
        ->where('tb_pesanan.konfirmasi', '=', 1)
        ->get();;
 
    
    	return view('kasirdone',['kasir' => $kasir]);
 
    }
    public function edit($id)
{
	
    $kasir = DB::table('tb_pesanan')
    ->join('users', 'users.id', '=', 'tb_pesanan.id_user')
    ->join('tb_paket', 'tb_paket.id', '=', 'tb_pesanan.id_paket')
    ->join('tb_lokasi', 'tb_lokasi.id', '=', 'tb_pesanan.id_kota')
    ->select('tb_pesanan.*', 'users.name', 'tb_paket.nama_paket','tb_lokasi.nama_kota')
    ->where('tb_pesanan.id',$id)
    ->get();
	
	return view('editkasir',['kasir' => $kasir]);
 
}
public function update(Request $request)
{
	
	DB::table('tb_pesanan')->where('id',$request->id)->update([
		'id_user' => $request->id_user,
		'acara' => $request->acara,
		'tanggal' => date(' Y-m-d', strtotime($request->tanggal)),
        'id_paket' => $request->id_paket,
        'id_kota' => $request->id_kota,
        'catatan' => $request->catatan,
        'konfirmasi' => $request->konfirmasi
	]);
	
	return redirect('/kasir');
}
}
