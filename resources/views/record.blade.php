<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
<div class="container">
    <h1>記録表</h1>
    <div class="main">


①
<table border="2">
        <tr>
            <th>11月</th>
            <th>体重</th>
            <th>カロリー</th>
            <th>タンパク質</th>
            <th>脂質</th>
            <th>炭水化物</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button onclick="location.href='/input'" class="btn btn-dark btn-lg m-3" >入力</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>




②
<table>
<tr>
<th>11月</th>
    <th>体重</th>
    <th>kcal</th>
    <th>タンパク質</th>
    <th>脂質</th>
    <th>炭水化物</th>
    <th>&nbsp;</th>
</tr>
<tr>
<?php for ( $i = 1; $i <= 31; $i++ ) {

    print '<tr>';
    print '<th>' . $i . '</th>';
    print '<td>'.'</td>';
    print '<td>'.'</td>';
    print '<td>'.'</td>';
    print '<td>'.'</td>';
    print '<td>'.'</td>';
    print '<td>'.'<input type="button" value="入力" ></td>';
}
?>
</tr>
</table>
</div>
</div>

</body>
</html>






    






