<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuController extends Controller
{
    public function morning(){

        return view('morning');    
    }

    public function lunch(){

        return view('lunch');    
    }

    public function dinner(){

        return view('dinner');    
    }

    public function snack(){

        return view('snack');    
    }

    

    

}
