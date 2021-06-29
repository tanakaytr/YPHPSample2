<!DOCTYPE html>
<html>
<head>
<title>work5</title>
</head>
<body>

<?php
$name = "山田";
$age = 23;
$section = "広報";

replace();

print $name. "<br />";

print $age. "<br />";

print $section. "<br />";

function replace()
{
    global $name;
    global $age;
    global $section;
    $name = "佐藤";
    $age = 28;
    $section = "庶務";
}

?>
</table>
</body>
</html>
