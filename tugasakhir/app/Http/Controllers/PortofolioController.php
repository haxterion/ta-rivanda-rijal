<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    public function index()
    {
    $portofolio = DB::table('tb_admin')->get();
    return view('portofolio',['portofolio' => $portofolio]);
    }

    public function add(Request $request)
    {
        DB::table('tb_komen')->insert([
            'id_user' => $request->id_user,
            'id_portofolio' => $request->id_admin,
            'isi_komen' => $request->isi_komen,
        ]);
        
        return back();
    }
    

    public function show($id)
    {
        $portofolio = DB::table('tb_admin')->where('id_admin',$id)
        ->get();
        $komen = DB::table('tb_komen')->where('id_portofolio',$id)
        ->join('users', 'users.id', '=', 'tb_komen.id_user')
        ->select('tb_komen.*','users.name')
        ->get();
        // dd($portofolio);
        return view('show',compact('komen','portofolio'));
    }
}
