<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $portofolio = DB::table('tb_admin')->inRandomOrder()
            ->limit(3)
            ->get();

        $pesanan = DB::table('tb_pesanan')
            ->select('tb_pesanan.id_kota', DB::raw("count(*) as total"))
            ->groupBy('tb_pesanan.id_kota')
            ->limit(3)
            ->get();
        foreach ($pesanan as $p) {
            $fin = $p->id_kota;
        }
        $lokasi = DB::table('tb_lokasi')
            ->where('id',$fin)
            ->get();
            //   dd(compact('pesanan','lokasi'));
        // mengirim data pegawai ke view index
        return view('index', compact('portofolio', 'pesanan', 'lokasi'));
    }
}
