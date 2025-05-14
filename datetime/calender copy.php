<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上日曆</title>
    <style>
        h1{
            text-align:center;
        }
        table{
            width: 70%;
            border-collapse:collapse;
            margin:auto;
        }
        td{
            border:1px solid black;
            text-align:center;
            height:50px;
        }
        
       
        .today{
            background-color:pink;
        }
        
        .hoilday{
            background-color:red;
        }
        .other-month{
            background-color:#ccc;
        }
        .passday{
            color:#aaa;
        }
        tr:not(tr:nth-child(1)) td:hover{
            background-color:lightyellow;
            cursor:pointer;
            font-size:16px;
            font-weight:bold; 
        }
        .date-num{
            font-size:14px;
            text-align:left;
        }
        .date-event{
            height:40px;
            width:50px;
            color:lightgreen;
        }
        .box,.th-box{
            width:50px;
            height:50px;
            background-color: antiquewhite;
            display: inline-block;
            border: 1px solid black;
            box-sizing: border-box;
            margin-left: -1px;
            margin-top: -1px;
        }
        .box-container{
            width: 350px;
            margin: 0 auto;
            box-sizing: border-box;
            padding-left: -1px;
            padding-top: 1px;
        }
        .th-box{
            height: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>線上日曆</h1>

<?php
$month=5;
$today=date("Y-$month-d");
$firstday=date("Y-$month-01");
$firstdayweek=date("w",strtotime($firstday));//w=> 0(週日)至6(週六)
$thedaysofmonth=date("t",strtotime($firstday));

$spdate=[
    '2025-05-11'=>'母親節',
    '2025-05-01'=>'勞動節',
    '2025-05-31'=>'端午節',
];

$monthdays=[];

//填入空白日期
for($i=0;$i<$firstdayweek;$i++){
    $monthdays[]="&nbsp";
}

//填入當日日期
for($i=0;$i<$thedaysofmonth;$i++){
    $timestamp=strtotime("$i days",strtotime($firstday));
    $date=date("d",$timestamp);
    $monthdays[]=$date;
}


//建立外框及標題
echo "<div class='box-container'>";
echo "<div class='th-box'>日</div>";
echo "<div class='th-box'>一</div>";
echo "<div class='th-box'>二</div>";
echo "<div class='th-box'>三</div>";
echo "<div class='th-box'>四</div>";
echo "<div class='th-box'>五</div>";
echo "<div class='th-box'>六</div>";

//使用foreach迴圈印出日期
foreach($monthdays as $day){
    echo "<div class='box'>";
    echo $day;
    echo "</div>";
}

echo "</div>";

?>

<h2 style='text-align:center;'><?=date(" Y 年 m 月 "); ?></h2>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

for($i=0;$i<6;$i++){  //因為月曆可能最多6週
    echo "<tr>";
    
    for($j=0;$j<7;$j++){  //一週7天
       $day=$j+($i*7)-$firstdayweek; 
       $timestamp=strtotime("$day days",strtotime($firstday));
       $date=date("Y-m-d",$timestamp);
       $class="";

        if(date("N",$timestamp)>5){
        $class=$class . " hoilday";
       }

       if($today==$date){

         $class=$class . " today";
       }else if(date("m",$timestamp)!=date("m",strtotime($firstday))){
        $class=$class . " other-month";
       }
       if($timestamp<strtotime($today)){
        $class=$class . " passday";
       }
       
        echo "<td class='$class' data-date='$date'>";
        echo "<div class='date-num'>";
        echo date("d",$timestamp);
        echo "</div>";
        echo "<div class='date-event'>";
            if(isset($spdate[$date])){
                echo $spdate[$date];
            }
        echo "</div>";
        echo "</td>";
    }
    

    echo "<tr>";
}


?>

</table>
</body>
</html>