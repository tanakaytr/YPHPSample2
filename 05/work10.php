<!DOCTYPE html>
<html>
<head>
<title>work10</title>
</head>
<body>

<table border="1">

<?php

$i = 9;
while ($i >= 1){
    print "<tr>";
    $j = 9;
    while ($j >= 1){
        if (($i*$j % 2) == 0){
            print '<td bgcolor="#ff0000">'.$i*$j."</td>";
        }else {
             print "<td>".$i*$j."</td>";
        }
        $j--;
    }
    $i--;
}
print "</tr>\n";

?>

</table>

</body>
</html>
