<!DOCTYPE html>
<html jang="ja">
<head>
<title>work8</title>
</head>
<body>

<?php

$color1 = array(
    "blue" => "#0000ff",
    "red" => "#ff0000",
    "green" => "#00ff00",
    "fuchsia" => "#FF00FF"
);
$color2 = array(
    "aqua" => "#00FFFF",
    "green" => "#00ff01",
    "aqua" => "#00FFFF",
    "palegreen" => "#98FB98"
);
$color3 = array_merge($color1, $color2);

print "<tr>\n";
print "<table border=\"2\">\n";
print "</tr>\n";

foreach($color3 as $c => $value){
    print "<tr bgcolor={$value}><td>{$c}</td></tr>\n";
}
?>

</table>

</body>
</html>
