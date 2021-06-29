<!DOCTYPE html>
<html>
<head>
<title>練習2</title>
</head>
<body>

<?php

$t = array(80, 60, 22, 50, 75);

$a = 0;

?>

<table border= "2">
<tr bgcolor = "#AAAAAA">
<th>番号</th>
<th>点数</th>
</tr>

<?php

foreach($t as $id => $value){
    if ($value >= 70)
        $a++;
        
    print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

?>

</table>

<?php

print "<br/>70点以上の学生は{$a}人です。<br/>\n";

?>

</body>
</html>
