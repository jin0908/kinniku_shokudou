@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('記録入力') }}</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <!-- ID -->
                            <!-- 体重入力欄 -->
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">体重(kg)</label>
                                <div class="col-md-6">
                                    <input id="age" type="number" value="50" step="0.1"  min="10" max="120" class="form-control"  name="" autofocus>
                                </div>
                            </div>
                            <!-- カロリー入力欄 -->
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">カロリー(kcal)</label>
                                <div class="col-md-6">
                                    <input id="age" type="number" value="0" step="1"  min="0" max="4000" class="form-control"  name="">
                                </div>
                            </div>
                            <!-- タンパク質入力欄 -->
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">タンパク質(g)</label>
                                <div class="col-md-6">
                                    <input id="age" type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="">
                                </div>
                            </div>
                            <!-- 脂質入力欄 -->
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">脂質(k)</label>
                                <div class="col-md-6">
                                    <input id="age" type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="" >
                                </div>
                            </div>
                            <!-- 炭水化物入力欄 -->
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">炭水化物(g)</label>
                                <div class="col-md-6">
                                    <input id="age" type="number" value="0" step="1"  min="0" max="1000" class="form-control"  name="">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">入力</button>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>    
@endsection
