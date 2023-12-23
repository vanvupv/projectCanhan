<?php

namespace App\Http\Service;

use App\Models\Sanpham;
use PHPUnit\Exception;
use DB;

class SanPhamService
{
    public function create($request){
        try {
////            dd($request->input('MaLoaiSP'));
//            $maloai = (int)$request->input('MaLoaiSP');
//            var_dump($maloai);
//            dd($maloai) ;
            Sanpham::create([
                'TenSP' => (string)$request->input('TenDM'),
                'MaSP' => $request->input('MaDM'),
                'SoLuong' => $request->input('SoLuong'),
                'DonViTinh' => $request->input('DonViTinh'),
                'GiaNhap' => $request->input('GiaNhap'),
                'GiaBan' => $request->input('GiaBan'),
                'MaLoaiSP' => $request->input('MaLoaiSP'),
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
        return Sanpham::paginate(4);
     }
      public function edit($request,$sanpham)
      {
          try {
//              $sanpham->MaDM = $request->input('MaDM');
//              $sanpham->TenDM = $request->input('TenDM');
//              $sanpham->MoTa = $request->input('MoTa');
//              $sanpham->Vitri = $request->input('ViTri');

              $sanpham->TenSP = (string)$request->input('TenDM');
              $sanpham->MaSP = $request->input('MaDM');
              $sanpham->SoLuong = $request->input('SoLuong');
              $sanpham->DonViTinh= $request->input('DonViTinh');
              $sanpham->GiaNhap = $request->input('GiaNhap');
              $sanpham->GiaBan = $request->input('GiaBan');
              $sanpham->MaLoaiSP = $request->input('MaLoaiSP');
              $sanpham->MoTa = $request->input('MoTa');

//              var_dump($request->input('MaLoaiSP'));
//              dd($sanpham);

              $sanpham->save();
              Session()->flash('success','Sửa thông tin danh mục thành công');

          }
          catch (Exception $ex){
              Session()->flash('error',$ex->getMessage());
              return false;
          }
          return true;
      }
    public function delete($request){
        $sanpham = Sanpham::where('IDSanPham',$request->input('id'))->first();
        if($sanpham){
            return $sanpham->delete();
        }
    }
}




