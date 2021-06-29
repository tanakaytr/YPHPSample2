<!DOCTYPE html>
<html>
<head>
<title>練習2</title>
</head>
<body>

<table border="9">

<?php

for ($i = 1; $i <= 9; $i++){
 print"<tr>";
 for ($j = 1; $j <= 9; $j++){
  print "<td>".$i*$j."</td>";
  }
}
 print"</tr>\n";
?>

</table>

</body>
</html>
