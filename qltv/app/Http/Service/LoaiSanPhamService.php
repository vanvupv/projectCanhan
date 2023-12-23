<?php

namespace App\Http\Service;

use App\Models\Loaisanpham;
use PHPUnit\Exception;
use DB;

class LoaiSanPhamService
{
    public function create($request){
        try {
            Loaisanpham::create([
                'MaLoaiSP' => $request->input('MaLoaiSP'),
                'TenLoai' => (string)$request->input('TenLoai'),
                'MoTa' => $request->input('MoTa'),
            ]);
            Session()->flash('success','Thêm mới danh mục thành công');
        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }

     public function getAll(){
        return Loaisanpham::paginate(2);
     }
      public function edit($request,$loaisanpham)
      {
          try {
//              $Loaisanpham->MaDM = $request->input('MaDM');
//              $Loaisanpham->TenDM = $request->input('TenDM');
//              $Loaisanpham->MoTa = $request->input('MoTa');
//              $Loaisanpham->Vitri = $request->input('ViTri');

//              $Loaisanpham->MaLoaiSP = $request->input('MaLoaiSP');
              $loaisanpham->TenLoai = (string)$request->input('TenLoai');
              $loaisanpham->MoTa = $request->input('MoTa');

//                dd($loaisanpham);

              $loaisanpham->save();

              Session()->flash('success','Sửa thông tin loại thành công');

          }
          catch (Exception $ex){
              Session()->flash('error',$ex->getMessage());
              return false;
          }
          return true;
      }
    public function delete($request){
        $loaisanpham = Loaisanpham::where('MaLoaiSP',$request->input('id'))->first();
        if($loaisanpham){
            return $loaisanpham->delete();
        }
    }
}




