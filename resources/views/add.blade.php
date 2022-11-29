@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center">11月</h1>
    <form action="{{ route('record_add') }}" method="post" >
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th> <th>体重</th> <th>カロリー</th> <th>タンパク質</th> <th>脂質</th> <th>炭水化物</th>
                </tr>
            </thead>    
                <tr>
                    <td>1<input type="hidden" value="2022-11-01" name="record[1]['date']"></td>
                    <td><input type="hidden" value="{{ $user->id }}" name="record[1]['id']"></td>
                    <td><input type="number" value="50" step="0.1"  min="10" max="120" class="form-control"  name="record[1]['weight']"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="4000" class="form-control"  name="record[1]['kcal']"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="record[1]['protein']"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="record[1][fat]" ></td>
                    <td><input type="number" value="0" step="1"  min="0" max="1000" class="form-control"  name="record[1][carb]"></td>
                </tr>
    
                <tr>
                    <td>2<input type="hidden" value="2022-11-02" name="record[2][date]"></td>
                    <td><input type="hidden" value="{{ $user->id }}" name="record[2]['id']"></td>
                    <td><input type="number" value="50" step="0.1"  min="10" max="120" class="form-control"  name="record[2]['weight']"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="4000" class="form-control"  name="record[2]['kcal']"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="record[2]['protein']"></td>
                    <td><input type="number" value="0" step="1"  min="0" max="500" class="form-control"  name="record[2]['fat']" ></td>
                    <td><input type="number" value="0" step="1"  min="0" max="1000" class="form-control"  name="record[2]['carb']"></td>
                </tr>
                
                
        </table>
        <input type="submit" value="入力">
    </form>
</div>            
@endsection
