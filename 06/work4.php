<!DOCTYPE html>
<html>
<head>
<title>work4</title>
</head>
<body>

<?php

$employees = array(
    array("name" => "山田", "seibetu" => "m", "age" => "33", "section" => "営業"),
    array("name" => "高橋", "seibetu" => "m", "age" => "21", "section" => "営業"),
    array("name" => "鈴木", "seibetu" => "f", "age" => "23", "section" => "営業"),
    array("name" => "小山", "seibetu" => "f", "age" => "29", "section" => "営業"),
    array("name" => "阿部", "seibetu" => "f", "age" => "29", "section" => "営業")
);
$age = array(33, 21, 23, 29, 29);
?>

<table border= "2">
<th>名前</th>
<th>性別</th>
<th>年齢</th>
<th>部署</th>
</tr>

<?php
$sum = array_sum($age);
$ave = $sum / count($age);

print "営業部メンバー一覧";

foreach($employees as $e){
    if ($e["seibetu"] == "m"){
        $e["seibetu"] = "男";
    }
    elseif ($e["seibetu"] == "f"){
        $e["seibetu"] = "女";
    }
    print "<tr>";
    foreach ($e as $value){
        print "<td>{$value}</td>";
    }
    print "</tr>\n";
}

?>

</table>

<?php

print "<br/>平均年齢は{$ave}です。<br/>\n";

?>

</body>
</html>
