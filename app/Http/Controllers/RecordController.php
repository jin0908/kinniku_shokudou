<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    //記録一覧画面を表示
    public function record(){

        
        return view('record'); 
    }
    
    //記録入力画面を表示
    public function add(){

        
        return view('add'); 
    }
    
    
    //記録入力
    public function record_add(Request $request){

        
        Record::create([
            'user_id' => Auth::user()->id,
            'date'=>$request->date,
            'weight'=> $request->weight,
            'kcal'=> $request->kcal,            
            'protein'=> $request->protein,
            'fat'=> $request->fat,
            'carb'=> $request->carb,

        
    ]);
    return redirect()->route('record');      
}

}