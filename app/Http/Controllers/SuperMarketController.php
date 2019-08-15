<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperMarketController extends Controller
{
    function GoHome(){
        $AllUser = DB::table('business')->get()->toJson();

        return view('MemberList',['Users'=>$AllUser]);
    }
}
