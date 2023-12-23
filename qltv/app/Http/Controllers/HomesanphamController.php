<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Sanpham;
use DB;
use View;

class HomesanphamController extends Controller
{
    //
    public function viewHomesanpham() {
        $sanphams = DB::table('sanphams')->get();

        return view('home.sanpham',
            ['sanphams' => $sanphams],
        );
    }

    public function handleAjaxRequest(Request $request)
    {
//        // Lấy giá trị từ request
        $selectedValue = $request->input('selectedValue');
//
//        // Log dữ liệu từ AJAX
        Log::info('Selected Value from AJAX:', ['value' => $selectedValue]);
//
        $sanphams = Sanpham::orderBy('SoLuong', (string)$selectedValue)->get();
        Log::info('HTML to be sent to frontend:', ['html' => $sanphams]);

//
//        // Trả về đoạn HTML mới thay đổi
//        $html = View::make('home.sanpham', ['sanphams' => $sanphams])->render();
//
//        // Log dữ liệu bạn muốn kiểm tra
//        Log::info('HTML to be sent to frontend:', ['html' => $html]);
//
////        var_dump($html);
//
////        dd($html);

        return response()->json(['html' => $sanphams]);
    }

}
