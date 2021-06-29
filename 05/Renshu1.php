<!DOCTYPE html>
<html>
<head>
<title>練習1</title>
</head>
<body>

<?php

$a = 10;

print "1～{$a}までの偶数を入力します。<br/>\n";

for ($i = 1; $i <= $a; $i++){
 if (($i % 2) == 0)
  print "{$i}<br/>\n";
}

?>

</body>
</html>
