<?php

namespace App\Http\Controllers;
use App\Models\tourist;

use Illuminate\Http\Request;

class Page_controller extends Controller
{
    public function home(){
        $tourists = tourists::orderBy('id','Desc')->get;
        $tourists = tourist::all();
        return view('index', ['tourist'=>$tourists]);
    }
}
