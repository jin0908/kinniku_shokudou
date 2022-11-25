<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memo;

use Carbon\Carbon;

class MemoController extends Controller
{
    public function record(){

        return view('record');    
    }

    public function input(){

        return view('input');    
    }

    public function record_edit(){

        return redirect()->route('record');      
    }




    
}
