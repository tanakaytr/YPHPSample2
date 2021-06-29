<!DOCTYPE html>
<html>
<head>
<title>work5</title>
</head>
<body>

<?php

$employees = array(
    array("name" => "山田", "seibetu" => "m", "age" => "33", "section" => "営業"),
    array("name" => "佐藤", "seibetu" => "f", "age" => "24", "section" => "庶務"),
    array("name" => "高橋", "seibetu" => "m", "age" => "21", "section" => "営業"),
    array("name" => "前田", "seibetu" => "m", "age" => "25", "section" => "企画"),
    array("name" => "鈴木", "seibetu" => "f", "age" => "23", "section" => "営業"),
    array("name" => "上田", "seibetu" => "f", "age" => "32", "section" => "広報"),
    array("name" => "東野", "seibetu" => "m", "age" => "32", "section" => "庶務"),
    array("name" => "小山", "seibetu" => "f", "age" => "29", "section" => "営業"),
    array("name" => "坂本", "seibetu" => "f", "age" => "24", "section" => "企画"),
    array("name" => "阿部", "seibetu" => "f", "age" => "29", "section" => "営業")
);
$agem = array(33, 21, 25, 32);
$agef = array(24, 23, 32, 29, 24, 29);

?>

<?php

$totalm = array_sum($agem);
$avem = $totalm / count($agem);

$totalf = array_sum($agef);
$avef = $totalf / count($agef);

print "<br/>男性社員の平均年齢は{$avem}です。<br/>\n";
print "<br/>女性社員の平均年齢は{$avef}です。<br/>\n";

?>

</body>
</html>
