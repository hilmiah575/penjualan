<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $admin = DB::table('tbl_admin')
        ->get();
     return view('admin.index',compact('admin'));
    }
    public function tambah(){
        return view('admin.tambah');
    }
    public function simpan(Request $request){

        $simpan= Admin::create([
            'id_admin'=>$request->id_admin,
            'username'=>$request->username,
            'password'=>$request->password,
            'admin_level'=>$request->admin_level,
            'admin_nama'=>$request->admin_nama,
            'admin_status'=>$request->admin_status,
        ]);
        echo $simpan->id_admin;
        return redirect('/admin');
    }
    public function edit($id){
        $admin=Admin ::find($id);
        return view('admin.edit',compact(['admin']));
    }
    public function update($id,Request $request){
        $admin=Admin::find($id);
        $admin->update($request->except('_token','submit'));
      
        return redirect('/admin');
    }
    
    public function hapus($id){

        $hapus=Admin ::find($id);
        $hapus->delete();
        return  redirect('admin');
}
}