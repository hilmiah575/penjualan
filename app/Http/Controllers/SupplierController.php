<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use DB;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  public function index()
  {
    $supplier = DB::table('tbl_supplier')
    ->get();
    return view('supplier.index',compact('supplier'));
  } 
  public function tambah()
  {
    return view('supplier.tambah');
  } 
  public function simpan(request $request )
  {
   $simpan=Supplier::create([
        
        'supplier_nama'=>$request->supplier_nama,
        'supplier_alamat'=>$request->supplier_alamat,
        'supplier_phone'=>$request->supplier_phone,
        'supplier_status'=>$request->supplier_status,
          
    ]);
    echo $simpan->id_supplier;
    return redirect('/supplier'); 

  }
  public function edit($id,Request $request)
  {
    $supplier = Supplier::find($id);
    return view('supplier.edit',compact('supplier'));

  }
  public function update($id,request $request){
    
    $supplier=Supplier::find($id);
    
    $supplier->update($request->except('_token','_method'));
    
   
  
    return redirect('/supplier');
}
public function hapus($id){

    $supplier=Supplier ::find($id);
    $supplier->delete();
    return  redirect('supplier');
}
}
