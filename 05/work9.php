<!DOCTYPE html>
<html>
<head>
<title>work9</title>
</head>
<body>

<table border="3">

<?php

$i = 9;
while ($i >= 1){
    print "<tr>";
    $j = 9;
    while ($j >= 1){
        print "<td>".$i*$j."</td>";
            $j--;
    }
    $i--;
}
print "</tr>\n";
?>

</table>

</body>
</html>
