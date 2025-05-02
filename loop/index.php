<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>使用for迴圈來產生以下的數列</h2>

<ul>
<li>1,3,5,7,9……n</li>
<li>10,20,30,40,50,60……n</li>
<li>3,5,7,11,13,17……97</li>
</ul>


<?php

for( $i=1 ;$i<30; $i=$i+2 ){
  echo $i . ",";
}
echo "<br>";
for($q=10 ; $q<100; $q=$q+10){
    echo $q . ",";
}

echo "<br>";
for($a=1 ; $a<10; $a=$a+1){
    echo $a*10 . ",";
}


echo "<br>";


for($j=3;$j<=100;$j=$j+2){  //因為質數不可能為偶數,直接從3開始並且值+2就都會是奇數去跑
$test=true;//設值為真
$count=0;//單純輔助計算次數
for($w=2 ; $w<$j ;$w=$w+1){ //從2開始去除，並且值要小於被除數
    $count++;
    if($j % $w ==0){//3-100的奇數從2開始去除，被整除即不可能是質數
        $test=false;
        break;
    }
}
if($test){
    echo $j . ",";
}

//echo "<br>";
//echo "迴圈跑了".$count."次";
}
?>

<h2>九九乘法表</h2>
<table border=1>
     
    <?php
    for($j=1;$j<=9;$j++){ //乘法表要乘9次

      echo "<tr>"; 
       for($i=1;$i<=9;$i++){
      echo "<td>$i x $j = ". ($j * $i)."</td>";
    }
       echo "</tr>";
    }
    ?>
</table>
<style>
    #tt{
        border-collapse:collapse;
        margin:20px;
        box-shadow:2px 2px 15px red;
    }
    #tt td{
        padding:3px 6px;
        border:1px solid #CCC;
        text-align:center;
        width:25px;
        text-shadow:1px 1px red;
    }
    #tt tr:nth-child(1),
    #tt td:nth-child(1){
        background-color:#CCC
    }
</style>

<h2>交叉計算的九九乘法表</h2>
<table id=tt>
    <tr>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr>
    <?php
      
    for($j=1;$j<=9;$j++){

      echo "<tr>"; 
         echo "<td>$j</td>";  //每次跑之前加一行
       for($i=1;$i<=9;$i++){
      echo "<td>". ($j * $i). "</td>";
    }}
       echo "</tr>";
    ?>
</table>


</body>
</html>