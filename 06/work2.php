<!DOCTYPE html>
<html>
<head>
<title>work2</title>
</head>
<body>

<?php

$t = array(80, 60, 22, 50, 75);

?>

<table border= "2">
<tr bgcolor = "#AAAAAA">
<th>番号</th>
<th>点数</th>
</tr>

<?php

$total = array_sum($t);
$ave = $total / count($t);

foreach($t as $id => $value){
    print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

?>

</table>

<?php

print "<br/>平均点数は{$ave}です。<br/>\n";

?>

</body>
</html>
