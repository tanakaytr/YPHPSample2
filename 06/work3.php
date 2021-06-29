<!DOCTYPE html>
<html>
<head>
<title>work3</title>
</head>
<body>

<?php

$employees = array(
    array("name" => "山田", "seibetsu" => "m", "age" => "33", "section" => "営業"), 
    array("name" => "佐藤", "seibetsu" => "f", "age" => "24", "section" => "庶務"), 
    array("name" => "高橋", "seibetsu" => "m", "age" => "21", "section" => "営業"), 
    array("name" => "前田", "seibetsu" => "m", "age" => "25", "section" => "企画"), 
    array("name" => "鈴木", "seibetsu" => "f", "age" => "23", "section" => "営業"), 
    array("name" => "上田", "seibetsu" => "f", "age" => "32", "section" => "広報"), 
    array("name" => "東野", "seibetsu" => "m", "age" => "32", "section" => "庶務"), 
    array("name" => "小山", "seibetsu" => "f", "age" => "29", "section" => "営業"), 
    array("name" => "坂本", "seibetsu" => "f", "age" => "24", "section" => "企画"), 
    array("name" => "阿部", "seibetsu" => "f", "age" => "29", "section" => "営業")
);
?>

<table border= "50">
<tr>
<th>名前</th>
<th>性別</th>
<th>年齢</th>
<th>部署</th>
</tr>

<?php

foreach($employees as $e){
    if ($e["seibetsu"] == "m"){
        $e["seibetsu"] = "男";
    }
    elseif ($e["seibetsu"] == "f"){
        $e["seibetsu"] = "女";
    }
    print "<tr>";
    foreach ($e as $value){
        print "<td>{$value}</td>";
    }
    print "</tr>\n";
}

?>

</table>

</body>
</html>
