<!DOCTYPE html>
<html>
<head>
<title>練習2</title>
</head>
<body>

<?php

$num1 = 5;

$num2 = square($num1);

print "{$num1}の2乗は{$num2}です。<br/>\n";

function square($x)
{
    return $x * $x;
}

?>

</body>
</html>

