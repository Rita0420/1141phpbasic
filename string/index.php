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


</body>
</html>