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


<h2>找出五百年內的閏年</h2>

<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>

<?php
$year=[];
for($i=2025;$i<=2525;$i++){
    if(($i%4==0 && $i%100!=0)|| ($i%400==0)){
        $year[]=$i;
    }
}

foreach($year as $value){
    echo $value . ",";
}
echo "<br>";
$theyear=2400;

// if(in_array($theyear,$year)){
//     echo $theyear . "是閏年";
// }else{
//     echo $theyear . "不是閏年";
// }

echo $theyear.($theyear?"是閏年":"不是閏年")."<br>";


$year2=[];
for($i=2025;$i<=2525;$i++){
    if(($i%4==0 && $i%100 !=0)||($i%400==0)){
        $year2[$i]=true;
    }else{
        $year2[$i]=false;
    }
}
echo "<br>";

$ty=2100;
// if($year2[$ty]){
//     echo $ty. "是閏年";
// }else{
//     echo $ty . "不是閏年";
// }

echo $ty . ($year2[$ty]?"是閏年":"不是閏年")."<br>";

?>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>

<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
<?php

$s=[ "甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$e=[ "子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥" ];
$year=2025;

$d=[];

for($i=0;$i<10;$i++){
    $z=($i%2?1:0);
    for($j=$z;$j<12;$j=$j+2){
        $d[]=$s[$i].$e[$j];
    }
}
echo "<pre>";
print_r($d);
echo "</pre>";

$d=[];
$startyear=1984;
for($j=0;$j<500;$j++){
    $d[$startyear+$j]=$s[$j%10].$e[$j%12];

}
// echo "<pre>";
// print_r($d);
// echo "</pre>";

echo 2025 . "年是" . $d[2025] . "<br>";

$d=[];
for($j=0;$j<60;$j++){
    $d[]=$s[$j%10].$e[$j%12];

}
echo $d[(2136%60)-4];

?>

<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>

<p>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</p>

<?php
$a=[2,4,6,1,8];
echo "<pre>";
print_r($a);
echo "</pre>";

for($i=0;$i<floor(count($a)/2);$i++){
    $temp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$temp;

}
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";

?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>