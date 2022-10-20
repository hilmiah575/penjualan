<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use DB;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index(){
        $jenis = DB::table('tbl_jenis')
        ->get();
     return view('jenis.index',compact('jenis'));
    }
    public function tambah(){
        return view('jenis.tambah');
    }
    public function simpan(Request $request){

        $simpan= Jenis::create([
            
            'jenis_nama'=>$request->jenis_nama,
            'jenis_status'=>$request->jenis_status,
            
        ]);
        echo $simpan->id_jenis;
        return redirect('/jenis');
    }
    public function edit($id){
        $jenis= Jenis ::find($id);
        return view('jenis/edit',compact(['jenis']));
    }
    public function update($id,Request $request){
        $jenis=Jenis::find($id);
        $jenis->update($request->except('_token','submit'));
      
        return redirect('/jenis');
    }
    
    public function hapus($id){

        $hapus=Jenis ::find($id);
        $hapus->delete();
        return  redirect('jenis');
}

}
