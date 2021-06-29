<!DOCTYPE html>
<html>
<head>
<title>work1</title>
</head>
<body>

<?php
$a = 4;
$b = 5;

$a_double = double($a);
$a_triple = triple($a);
$b_double = double($b);
$b_triple = triple($b);

function double($x)
{
    return 2 * $x;
}

function triple($y)
{
    return 3 * $y;
}

?>

<table border="1">
<tr><th>元の値</th><th>2倍</th><th>3倍</th></tr>
<tr>
    <td><?php print $a; ?></td>
    <td><?php print $a_double; ?></td>
    <td><?php print $a_triple; ?></td>
</tr>
<tr>
    <td><?php print $b; ?></td>
    <td><?php print $b_double; ?></td>
    <td><?php print $b_triple; ?></td>
</tr>

</table>
</body>
</html>

