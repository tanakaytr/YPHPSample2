<!DOCTYPE html>
<html>
<head>
<title>work6</title>
</head>
<body>

<?php
$a = 12;
$b = 20;

print "変換前<br />";


print "\$a =>" .$a. "<br />";

print "\$b =>" .$b. "<br />";

swap();

print "変換後<br />";

print "\$a =>" .$a. "<br />";

print "\$b =>" .$b. "<br />";


function swap()
{
    global $a;
    global $b;
    $a = 20;
    $b = 12;
}

?>
</table>
</body>
</html>
