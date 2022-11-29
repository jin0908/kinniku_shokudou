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
        //ログインしているデータを取得
        $user = \Auth::user();
        

        
        return view('add', compact('user')); 
        

    }
    
    
    //記録入力
    public function record_add(Request $request){
        
        foreach($request["record"] as $value){
            $record = new Record();
            $record->date = $value['date'];
            $record->user_id = $value['id'];
            $record->weight = $value['weight'];
            $record->kcal = $value['kcal'];
            $record->protein = $value['protein'];
            $record->fat = $value['fat'];
            $record->carb = $value['carb'];
            $record->save();

            }

            



        return redirect()->route('record');      
        }

}

/*$date = $request;
$serialize_request = serialize($request);
dd($serialize_request);


    Record::create([
    'user_id' => Auth::user()->id,
    'date'=>$request->date,
    'weight'=> $request->weight,
    'kcal'=> $request->kcal,            
    'protein'=> $request->protein,
    'fat'=> $request->fat,
    'carb'=> $request->carb,*/
