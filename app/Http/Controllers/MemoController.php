<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memo;

use Carbon\Carbon;

class MemoController extends Controller
{
    //記録一覧画面を表示
    public function record(){

        
        return view('record'); 
    }
    //記録一覧編集画面
    public function input(){

        return view('input');    
    }
    //記録一覧編集
    public function record_edit(){




        return redirect()->route('record');      
    }




    
}
