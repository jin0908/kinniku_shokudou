<!-- layoutsフォルダのapp.bladeを親ファイルにする -->
@extends('layouts.app')

<!-- 以下の内容が@yield('content')に入る -->
@section('content')


<div class= "col-md-6 mx-auto">
    <div class="card text-dark">
        <img src="" class="card-img" alt="ボディメイクに適した夕食">
        <div class="card-img-overlay">
            <h5 class="card-title">DINNER MENU</h5>
            <p class="card-text">夕食</p>
            <p class="card-text">夕食</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <h5>〇〇さんの夕食の目標値は<br>
            ○○kcal<br>
            タンパク質：〇g<br>
            脂質：〇g<br>
            炭水化物：〇g<br>
            </h5>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>card sample</h5>
                </div>
                <div class="card-text">
                <h5>和食</h5>
                </div>
                <div class="card-text">
                    <h6>・白米<h6>
                    <p>(お茶碗1杯250kcal,P:4g,F:0g,C:55g)</p>
                    <h6>・ゆで卵<h6>
                    <p>(80kcal,P:7g,F:6g,C:0g)</p>
                    <h6>・納豆1パック<h6>
                    <p>(80kcal,P:8g,F:5g,C:5g)</p>
                    <h6>・豆腐の味噌汁</h6>
                    <p>(50kcal,P:3g,F:1g,C:5g)</p>
                </div>
            </div>
            <div class="card-footer">
                <h6>460kcal<br>タンパク質:22g,脂質:12g,炭水化物65g</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>洋食</h5>
                </div>
                <div class="card-text">
                    <h6>・ベーグル<h6>
                    <p>(1個225kcal,P:8g,F:1g,C:45g)</p>
                    <h6>・ゆで卵<h6>
                    <p>(80kcal,P:7g,F:6g,C:0g)</p>
                    <h6>プレーンヨーグルト<h6>
                    <p>(100gあたり80kcal,P:8g,F:5g,C:5g)</p> 
                </div>
            </div>
            <div class="card-footer">
                <h6>385kcal<br>タンパク質:23g,脂質:12g,炭水化物50g</h6>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>card sample</h5>
                </div>
                <div class="card-text">
                    <p>This is a card sample.</p>
                </div>
            </div>
            <div class="card-footer">
            </div> 
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>card sample</h5>
                </div>
            <div class="card-text">
                <p>This is a card sample.</p>
            </div>
        </div>
        <div class="card-footer">
        </div> 
    </div>
</div>
    <div class="card">
        <div class="card-body text-center">
        <button onclick="location.href='/morning'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">朝食</button>
        <button onclick="location.href='/lunch'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">昼食</button>
        <button onclick="location.href='/snack'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">間食</button>
        <button onclick="location.href='/home'" class="btn btn-danger btn-lg m-3" style="background-color:#e77213">ホーム</button>
        </div>
    </div>
</div>    





@endsection