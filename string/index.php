<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
            font-size:1.5em;
            color:blue;
            border-bottom:1px solid #ccc;
            padding-bottom:10px;
        }
    </style>
</head>
<body>
    <h1>字串處理</h1>

    <h2>字串取代</h2>
        <p>將”aaddw1123”改成”*********”</p>

<?php
$str="aaddw1123";
//1.
// $str=str_replace("a","*",$str);
// $str=str_replace("d","*",$str);
// $str=str_replace("w","*",$str);
// $str=str_replace("1","*",$str);
// $str=str_replace("2","*",$str);
// $str=str_replace("3","*",$str);

//2.
//str_split可以把字串拆成指定幾個的陣列(指定的變數,拆幾個)
// $str=str_replace(str_split($str,1),"*",$str);


//3.
//strlen計算字串長度
$str=str_repeat("*",strlen($str));

echo $str;

?>

<h2>字串分割</h2>
<p>將”this,is,a,book”依”,”切割後成為陣列</p>

<?php
$str="this,is,a,book";

$str=explode(",",$str);

//因為轉換出來是陣列所以不能用echo
print_r($str);

echo "<br>";
echo "<br>";
echo "<br>";
?>
<h2>字串組合</h2>
<p>將上例陣列重新組合成“this is a book”</p>
<?php
$str="this,is,a,book";

$str=explode(",",$str);

$a=implode(" ",$str);
echo $a;
?>
<br><br><br>
<?php
$str1="this,is,a,book";
$str1=str_replace(","," ",$str1);

echo $str1;


?>

<h2>子字串取用</h2>
<p>將” The reason why a great man is great is that he resolves to be a great man
    ”只取前十字成為” The reason…”</p>
<?php
$str="The reason why a great man is great is that he resolves to be a great man";
$str=substr($str,0,10);
echo $str;
?>
</body>
</html>