<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function pegawai()
    {
    	$tb_pegawai = DB::table('tb_pegawai')->get();

    	return view('admin/pegawai', ['tb_pegawai' => $tb_pegawai]);
    }
}
