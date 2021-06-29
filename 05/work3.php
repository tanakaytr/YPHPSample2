<!DOCTYPE html>
<html>
<head>
<title>work3</title>
</head>
<body>

<table border="2">

<?php

$a = 30;

for ($i = 1; $i <= $a; $i++){
 print "<tr>";
 if (! ($i % 3) == 0)
  print "<td>{$i}</td>\n";
}
 print "</tr>\n";

?>

</table>

</body>
</html>
