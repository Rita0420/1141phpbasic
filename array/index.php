<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>陣列設計</h1>

<h2>陣列學生成績</h2>

<?php

$students=[
    'judy'=>[ '國文' =>95, '英文' =>64, '數學' =>70, '地理' =>90, '歷史' =>84 ],
    'amo'=>[ '國文' =>88, '英文' =>78, '數學' =>54, '地理' =>81, '歷史' =>71 ],
    'john'=>[ '國文' =>45, '英文' =>60, '數學' =>68, '地理' =>70, '歷史' =>62 ],
    'peter'=>[ '國文' =>59, '英文' =>32, '數學' =>77, '地理' =>54, '歷史' =>42 ],
    'hebe'=>[ '國文' =>71, '英文' =>62, '數學' =>80, '地理' =>62, '歷史' =>64 ],
];

// $test=[95,64,70,90,84];
// for($i=0;$i<count($test);$i++){
//     echo $test[$i].",";
// }
// as 當;找出$students這個陣列的值,命$name(judy等等的陣列)它指向後面的科目加成績($score)
foreach($students as $name => $score){
    //顯示出最外層的陣列
    echo $name.":";
    echo "<ul>";
    //找出科目加成績($score)裡的科目($subjects)和成績($s)
    foreach($score as $subject => $s){
        echo "<li>";
        echo $subject.":";
        echo $s;
        echo "</li>";
    }
    echo "</ul>";
}


//array_keys()把所有key挑出來為一個陣列並命變數$names
//也就是說把$students裡的"judy..."、"amo..."...挑出來成陣列
$names=array_keys($students);
//利用迴圈一個一個($i++)挑出來$i，count()會計算出陣列裡有幾個key
//ex:i=0時是取"judy"這個陣列出來
for($i=0;$i<count($names);$i++){
    //[$students這個陣列裡的$names(陣列judy...)裡的key($i)(科目=>成績)]設變數為$n
    $n=$students[$names[$i]];
    //再把$n(科目=>成績)裡的key挑出來成陣列設變數$subjects
    $subjects=array_keys($n);
    //秀出來最外層的陣列judy...
    echo $names[$i];
    echo "的成績<br>";
    //利用迴圈一個一個挑出來$j,也就是陣列(科目=>成績)
    for($j=0;$j<count($n);$j++){
        echo $subjects[$j];
        echo ":";
        echo $n[$subjects[$j]];
        echo "<br>";
    }
}
?>


<h2>利用程式產生陣列</h2>

<ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>

<?php
$array=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        //字串
        $result="$i x $j = " . ($i * $j);
        //轉換成陣列
        $array[]=$result;
    }
}

echo "<pre>";
print_r($array);
echo "</pre>";

foreach($array as $value){
    echo $value . "<br>";
}



$array2=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $result2="$i x $j =" .($i*$j);
        $array2[$i.$j]=$result2;
    }
}
foreach($array2 as $key => $value2){
    echo $key ."=>". $value2 . "<br>";
}
echo $array2[44];

?>

<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>

<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php
$lotto=[];
for($i=0;$i<6;$i++){
    $num=rand(1,38);

    if(!in_array($num,$lotto)){
        $lotto[]=$num;
    }
}
echo "<pre>";
print_r($lotto);
echo "</pre>";

$lotto=[];
while(count($lotto)<6){
    $num=rand(1,38);

    if(!in_array($num,$lotto)){
        $lotto[]=$num;
    }
}

foreach($lotto as $value){
    echo $value . " ";
}
echo "<br>";


$nums=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];

$lotto=[];
for($i=0;$i<6;$i++){
    //打亂號碼
    shuffle($nums);
    $lotto[]=array_pop($nums);
}
echo "<br>";
foreach($lotto as $value){
    echo $value." ";
}
?>

</body>
</html>