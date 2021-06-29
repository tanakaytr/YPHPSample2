<!DOCTYPE html>
<html>
<head>
<title>work7</title>
</head>
<body>

<?php

$employees  = [
    ["name" => "山田", "seibetsu" => "m", "age" => "33", "section" => "営業"], 
    ["name" => "佐藤", "seibetsu" => "f", "age" => "24", "section" => "庶務"], 
    ["name" => "高橋", "seibetsu" => "m", "age" => "21", "section" => "営業"], 
    ["name" => "前田", "seibetsu" => "m", "age" => "25", "section" => "企画"], 
    ["name" => "鈴木", "seibetsu" => "f", "age" => "23", "section" => "営業"], 
    ["name" => "上田", "seibetsu" => "f", "age" => "32", "section" => "広報"], 
    ["name" => "東野", "seibetsu" => "m", "age" => "32", "section" => "庶務"], 
    ["name" => "小山", "seibetsu" => "f", "age" => "29", "section" => "営業"], 
    ["name" => "坂本", "seibetsu" => "f", "age" => "24", "section" => "企画"], 
    ["name" => "阿部", "seibetsu" => "f", "age" => "29", "section" => "営業"]
];

$men = [];
$women = [];

foreach($employees as $e){
    if(is_men($e["seibetsu"])){
        $men[] = $e;
    } else {
        $women[] = $e;
    }
}
show_data($women);
show_data($men);

function is_men($y)
{
    if($y == "m"){
        return true;
    } else {
        return false;
    }
}

function show_data($x)
{
    print '<table border= "1">';
    print "<tr><th>名前</th><th>性別</th><th>年齢</th><th>部署</th></tr>";

    print "<?php";

    foreach($x as $e){
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
}

?>
</table>
</body>
</html>
