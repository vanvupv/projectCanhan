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

        return view('home.sanphamHome',
            ['sanphams' => $sanphams],
        );
    }

//    public function handleAjaxRequest(Request $request)
//    {
////        // Lấy giá trị từ request
//        $selectedValue = $request->input('selectedValue') ?? 'asc';
////
////        // Log dữ liệu từ AJAX
//
////
//        $sanphams = Sanpham::orderBy('SoLuong', (string)$selectedValue )->get();
////        Log::info('HTML to be sent to frontend:', ['html' => $sanphams]);
//
//        return view('home.searchResult',compact('sanphams'))->render();
//
//    }


//    public function handleAjaxRequest(Request $request)
//    {
//        // Lấy giá trị từ request
//        $selectedSort = $request->input('selectedValue') ?? 'asc';
////        $minPrice = $request->input('min_price') ?? 0;
////        $maxPrice = $request->input('max_price') ?? PHP_INT_MAX;
////        $selectedGroups = $request->input('groups') ?? [];
//
//        $selectedCategories = $request->input('categories', []);
//
//
//
//        // Xây dựng truy vấn
//        $query = Sanpham::query();
////        Log::info(">>>Check: ", [$query]);
//
//        // Áp dụng sắp xếp
//        $query->orderBy('SoLuong', $selectedSort);
//
//        // Áp dụng bộ lọc theo giá bán (range)
////        $query->whereBetween('gia_ban', [$minPrice, $maxPrice]);
//
//        // Áp dụng bộ lọc theo nhóm (checkbox)
//        if (!empty($selectedCategories)) {
//            $query->whereIn('MaLoaiSP', $selectedCategories);
//        }
//
//        // Lấy kết quả cuối cùng
//        $sanphams = $query->get();
//
//        // Trả về view
//        return view('home.searchResult', compact('sanphams'))->render();
//    }

    public function handleAjaxRequest(Request $request)
    {
        // Lấy giá trị từ request
        $selectedSort = $request->input('selectedValue') ?? 'asc';
        $minPrice = $request->input('price') ?? 0;
        $maxPrice = $request->input('max_price') ?? 200000;
        $selectedCategories = $request->input('categories', []);

        // Xây dựng truy vấn
        $query = Sanpham::query();

        // Áp dụng sắp xếp
        $query->orderBy('SoLuong', $selectedSort);

        // Áp dụng bộ lọc theo giá bán (range)
        $query->whereBetween('GiaBan', [$minPrice, $maxPrice]);

        // Áp dụng bộ lọc theo nhóm (checkbox)
        if (!empty($selectedCategories)) {
            $query->whereIn('MaLoaiSP', $selectedCategories);
        }

        // Lấy kết quả cuối cùng
        $sanphams = $query->get();

        // Trả về view
        return view('home.searchResult', compact('sanphams'))->render();
    }


}
