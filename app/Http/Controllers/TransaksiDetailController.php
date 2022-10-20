<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Transaksi_detail;
use Illuminate\Http\Request;

class TransaksiDetailController extends Controller
{
    public function index($id)
    {
        $transaksidetail=DB::table('tbl_transaksi_detail')

        ->join('tbl_barang','tbl_barang.id_barang','=','tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();

         return view('transaksidetail.index',compact(['transaksidetail']));
}
}