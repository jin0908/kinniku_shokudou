<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!-- ログイン画面のカード部分のHTML -->
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
                    {{ __('腹筋はキッチンで作られる') }}
                    </div>
                </div> 
            </div>       
        </div>
        <div class="col-md-6">
        <h3 style="text-align:center">〇〇日目</h3>
        <p style="text-align:center">
        <font size="5">
        〇〇さんの1日の目標摂取値は<br>
        〇〇kcal以内<br>
        糖質：〇〇g以内<br>
        脂質：〇〇g以内<br>
        タンパク質：〇〇g以上<br>
        </font>
        </p>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-start">
        <div class="col-md-3">
            <div class="card">
                <div class="card text-center">
                    <div class="card-header">{{ __('筋肉食堂にログインしました！') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('腹筋はキッチンで作られる') }}
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
-->
@endsection
