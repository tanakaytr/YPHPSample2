<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product[0] = "東京";
$product[1] = "名古屋";
$product[2] = "京都";
$product[3] = "大阪";
$product[4] = "福岡";

?>

<table border= "2">
<tr bgcolor = "#AAAAAA">
<th>都市名</th>
</tr>

<?php

for($i=0; $i<count($product); $i++){
    print "<tr><td>{$product[$i]}</td></tr>\n";
}
?>

</table>

</body>
</html>
