<!DOCTYPE html>
<?php
//header("Refresh: 1");//每隔1秒重整一次
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>日期時間</title>
</head>
<body>
    <h1>日期/時間</h1>
    <h2>基本函式使用</h2>
<?php
date_default_timezone_set("Asia/Taipei");
echo "台北:";
echo date("Y-m-d H:i:s"); //取得當前的日期和時間
echo "<br>";
date_default_timezone_set("Asia/Tokyo");
echo "東京:";
echo date("Y-m-d H:i:s"); //取得當前的日期和時間
echo "<br>";
date_default_timezone_set("Asia/Bangkok");
echo "曼谷:";
echo date("Y-m-d H:i:s"); //取得當前的日期和時間
echo "<br>";
date_default_timezone_set("America/New_York");
echo "紐約:";
echo date("Y-m-d H:i:s"); //取得當前的日期和時間
echo "<br>";
echo date("Y-m-d");//將字串轉換為時間戳記

?>

<h2>時間戳記</h2>

<?php
//取得當前時間戳記
$timestamp=time();
echo "當前時間戳記:$timestamp<br>";

//將字串轉換為時間戳記
$datestring = "2023-10-01 12:00:00";
echo "日期字串:" . $datestring . "<br>";

$timestampFromString = strtotime($datestring);
echo "字串轉換為時間戳記: $timestampFromString<br>";//單位是秒                  

$dateFromTimestamp = date("Y-m-d H:i:s",$timestamp);
echo "時間戳記轉換為日期字串:$dateFromTimestamp<br>";

?>

<h2>給定兩個日期，計算中間間隔天數</h2>

<?php
$date1="2025-05-01";
$date2="2025-05-21";
echo "日期1:$date1<br>";
echo "日期2:$date2<br>";

$date1_timestamp=strtotime($date1);
$date2_timestamp=strtotime($date2);
$diff=$date2_timestamp-$date1_timestamp;
$days=($diff/(60*60*24));
echo $days;
?>

<h2>strtotime的用法</h2>
<?php

    // strtotime() 函式可以將日期字串轉換為時間戳記
    $dateString1 = "2023-10-01 12:00:00"; // 設定日期字串
    $timestamp1 = strtotime($dateString1); // 將字串轉換為時間戳記
    echo "日期字串：$dateString1<br>";
    echo "時間戳記：$timestamp1<br>";

    // strtotime() 函式也可以處理相對時間
    $relativeDateStrings = [
        "+1 days",
        "-1 days",
        "+1 weeks",
        "-1 weeks",
        "+1 month",
        "-1 month",
        "+1 year",
        "-1 year",
        "next Monday",
        "last Friday",
        "first day of next month",
        "last day of this month"
    ];

    foreach ($relativeDateStrings as $relativeDateString) {
        //strtotime("+1 days",$timestamp); // 將相對時間字串轉換為時間戳記
        $timestamp = strtotime($relativeDateString);
        echo "相對時間字串：$relativeDateString<br>";
        echo "相對時間的時間戳記：$timestamp<br>";
        echo "相對時間的日期：".date("Y-m-d H:i:s", $timestamp)."<br><br>";
    }
    $relativeDateString = "+2 days"; // 設定相對時間字串
    $timestamp2 = strtotime($relativeDateString); // 將相對時間字串轉換為時間戳記
    echo "相對時間字串：$relativeDateString<br>";
    echo "相對時間的時間戳記：$timestamp2<br>";

    $date="2025-5-01"; // 設定日期字串
    $timestamp3 = strtotime("+15 day",strtotime($date)); // 將日期字串轉換為時間戳記$date); // 將日期字串轉換為時間戳記
    echo "日期字串：$date<br>";
    echo "15天後的日期：".date("Y-m-d H:i:s", $timestamp3)."<br><br>";
?>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php
$birthday="1997-04-20";
$birthday_array=explode("-",$birthday);//轉換成陣列
$birthday_array[0]=date("Y");

$nextbirthday=join("-",$birthday_array);//轉換成字串

$today=strtotime(date("Y-m-d"));
$birthday_timestamp=strtotime($nextbirthday);

if($today>$birthday_timestamp){
    $birthday_timestamp=strtotime("+1 year",$birthday_timestamp);

}
$birthday_diff=$birthday_timestamp-$today;
$days=($birthday_diff/(60*60*24));

echo "我的出生日是:$birthday<br>";
echo "距離自己下次生日還有$days 天";
?>



</body>
</html>