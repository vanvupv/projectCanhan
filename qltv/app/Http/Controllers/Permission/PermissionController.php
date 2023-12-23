<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    //
    public function viewRoles(Request $request) {

        $roleList = DB::table('roles')->get();
        return view('permission.role',
            ['roleLists' => $roleList]
        );
    }
}

