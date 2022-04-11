<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    public function data()
    {
        $jenisBarang = DB::table('tb_barang')->get();

        return $jenisBarang;
        // return view('jenisProduk/data');
    }
}
