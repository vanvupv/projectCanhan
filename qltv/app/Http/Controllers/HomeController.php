<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function viewHome() {
        $sanphams = DB::table('sanphams')->get();

        return view('home',
        ['sanphams' => $sanphams],
        );
    }
}
