<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDanhMucRequest;
use App\Http\Service\DanhMucService;
use App\Models\Danhmuc;
use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    //
    protected $danhmucService;
    public function __construct(DanhMucService $danhMucService)
    {
        $this->danhmucService  = $danhMucService;
    }

    public function create(){
        return view('admin.danhmuc.add',[
           'title'=>'Thêm mới danh mục'
        ]);
    }
    public function store(CreateDanhMucRequest $request){
      //xử lý thêm mới danh mục
        //dd($request->input());
        $result = $this->danhmucService->create($request);
        return redirect()->back();
    }
    public function list(){
        //dd($this->danhmucService->getAll());
        return view('admin.danhmuc.list',[
            'title'=>'Danh sách danh mục',
            'danhmucs' => $this->danhmucService->getAll()
        ]);
    }
    public function edit(Danhmuc $danhmuc){
        //dd($danhmuc);
        return view('admin.danhmuc.edit',[
            'title'=>'Sửa thông tin danh mục',
            'danhmuc'=>$danhmuc
        ]);
    }
    public function postedit(Danhmuc $danhmuc,CreateDanhMucRequest $request){
        $result = $this->danhmucService->edit($request,$danhmuc);
        return redirect()->back();
    }
}
