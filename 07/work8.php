<!DOCTYPE html>
<html>
<head>
<title>work8</title>
</head>
<body>

<?php

$items = array(
    array("name" => "オレンジ", "price" => "120", "unit" => "4"),
    array("name" => "メロン", "price" => "530", "unit" => "1"),
    array("name" => "りんご", "price" => "190", "unit" => "5"),
    array("name" => "スイカ", "price" => "520", "unit" => "2"),
);

$total = 0;
?>
<table border="1">
<tr><th>品目</th><th>金額</th><th>単価</th><th>小計</th></tr>

<?php

foreach($items as $i){
    extract($i);
    $sub_total = sub_total($i);
    $total += $sub_total;
    print "<tr>";
    print "<td>{$name}</td>";
    print "<td>{$price}</td>";
    print "<td>{$unit}</td>";
    print "<td>{$sub_total}</td>";
    print "</tr>";
}

function sub_total($x)
{
    return $x['price'] * $x['unit'];
}
?>
</table>
合計金額は<?php print $total; ?>円です
</body>
</html>
