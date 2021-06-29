<!DOCTYPE html>
<html>
<head>
<title>練習１</title>
</head>
<body>

<?php

$t = array(80, 60, 22, 50, 75);

$m = 0;

?>

<table border= "2">
<tr bgcolor = "#AAAAAA">
<th>番号</th>
<th>点数</th>
</tr>

<?php

foreach($t as $id => $value){
    if ($m < $t[$id])
        $m = $t[$id];
        
    print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

?>

</table>

<?php

print "<br/>最高点は{$m}です。<br/>\n";

?>

</body>
</html>
