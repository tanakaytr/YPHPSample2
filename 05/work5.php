<!DOCTYPE html>
<html>
<head>
<title>work5</title>
</head>
<body>

<table border="2">

<?php

$a = 40;

for ($i = 1; $i <= $a; $i++){
    if (($i % 4) == 1)
        print "<tr>";
    print "<td>{$i}</td>";
}

?>

</table>

</body>
</html>
