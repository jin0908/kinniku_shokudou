@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center">11月</h1>
    <form method="POST" action="{{ route('record_add') }}">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th> <th>体重</th> <th>カロリー</th> <th>タンパク質</th> <th>脂質</th> <th>炭水化物</th>
                </tr>
            </thead>    
                <tr>
                    <td>1<input type="hidden" value="11.1" name="date"></td>
                    <td><input type="number" value="50" step="0.1"  min="10" max="120" class="form-control"  name="weight"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="4000" class="form-control"  name="kcal"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="protein"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="fat" ></td>
                    <td><input type="number" value="0" step="1"  min="0" max="1000" class="form-control"  name="carb"></td>
                </tr>
                <tr>
                <tr>
                    <td>2<input type="hidden" value="11.2" name="date"></td>
                    <td><input type="number" value="50" step="0.1"  min="10" max="120" class="form-control"  name="weight"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="4000" class="form-control"  name="kcal"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="protein"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="fat" ></td>
                    <td><input type="number" value="0" step="1"  min="0" max="1000" class="form-control"  name="carb"></td>
                </tr>
                <tr>
                
        </table>
        <input type="submit" value="入力">
    </form>
</div>            
@endsection
