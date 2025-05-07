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
// as 當;找出$students這個陣列的值,命$name它指向後面的科目加成績($score)
foreach($students as $name => $score){
    //顯示出名字
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
//ex:i=0時是取"judy..."這個陣列裡的key(科目+成績)出來
for($i=0;$i<count($names);$i++){
    //[$students這個陣列裡的$names(陣列judy...)這些陣列裡的key($i)(科目+成績))]設變數為$n
    $n=$students[$names[$i]];
    //再把
    $subjects=array_keys($n);
    echo $names[$i];
    echo "的成績<br>";
    for($j=0;$j<count($n);$j++){
        echo $subjects[$j];
        echo ":";
        echo $n[$subjects[$j]];
        echo "<br>";
    }
}
?>

</body>
</html>