<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!--以下の内容が@yield('content')に入る -->
@section('content')

<div class="container">
    <div class="row justify-content-start">
        <div class= "col-md-3">
        <div class= "card">
        <div class="card text-center">
            <div class="card-header">{{ __('筋肉食堂にログインしました！') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('ボディメイク') }}
                    </div>
                </div> 
            </div>       
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 style="text-align:center">{{$dt3}}日目</h3>
                    <p style="text-align:center">
                        <font size="5">
                        {{ $user->name }}さんの1日の目標摂取値は<br>
                        {{$kcal2}}kcal<br>
                        タンパク質：{{$protein2}}g<br>
                        脂質：{{$fat2}}g<br>
                        炭水化物：{{$carb2}}g<br>
                        </font>
                    </p>
                    <div class="section1 text-center">
                        <button onclick="location.href='/morning'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">朝食メニュー</button>
                        <button onclick="location.href='/lunch'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">昼食メニュー</button>
                    </div>
                    <div class="section2 text-center">
                        <button onclick="location.href='/dinner'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">夕食メニュー</button>
                        <button onclick="location.href='/snack'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">間食メニュー</button>
                    </div>
                    <div class="section3 text-center">
                        <button onclick="location.href='/record'" class="btn btn-outline-secondary m-2">記録カレンダー</button>
                        <button onclick="location.href='/edit'" class="btn btn-outline-secondary m-2">アカウント編集</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
@endsection


<!-- 青 class="btn btn-danger btn-lg m-3" style="background-color:#0e2fd8" -->
<!-- -->