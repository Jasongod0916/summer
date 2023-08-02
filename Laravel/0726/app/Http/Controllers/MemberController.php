<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function get_user(Request $data){
        $result = DB::table('users')
                ->select('id','name','email')
                ->get();
        return $result;
    }

    public function add_user(Request $data){
        $result = DB::table('user')->insert(['email' => $data->email,
                                            'name' => $data->name,  
                                            'password' => $data->password]);
        return $result;
    }
}
