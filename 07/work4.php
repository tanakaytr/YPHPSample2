<!DOCTYPE html>
<html>
<head>
<title>work4</title>
</head>
<body>

<?php

$sales = array(
    array("last_name" => "山田", "first_name" => "太郎", "price" => "2100", "unit" => 3), 
    array("last_name" => "佐藤", "first_name" => "次郎", "price" => "1500", "unit" => 4), 
    array("last_name" => "細川", "first_name" => "三郎", "price" => "3000", "unit" => 1), 
    array("last_name" => "岸本", "first_name" => "四郎", "price" => "1200", "unit" => 7),
);

foreach($sales as $sale)
{
    showData($sale);
}

function showData($x) 
{
    $t = getTotal($x);
    
    print "{$x['last_name']}{$x['first_name']}さんの購入合計金額は{$t}円";
}

function getTotal($y) 
{
    return $y['price'] * $y['unit'];
}
?>
</table>
</body>
</html>
