<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>學生成績判斷</h1>

<?php
$score=60;
if(!(is_numeric($score) && $score>0 && $score <= 100)){
    echo "請輸入正確數字";
    exit();
}
if($score<60){
    echo "不及格";
}else{
    echo "及格";
}
?>
</body>
</html>