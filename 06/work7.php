<!DOCTYPE html>
<html>
<head>
<title>work7</title>
</head>
<body>

<?php

$kanto = array("東京", "神奈川", "埼玉", "千葉", "群馬", "茨城", "栃木");
$shikoku = array("香川", "徳島", "愛媛", "高知");

$world = array_merge($kanto, $shikoku);

print "<table border=\"2\">\n";
print "<tr bgcolor=\"#AAAAAA\">\n";
print "</tr>\n";

foreach($world as $i => $value){
    print "<tr><td>{$i}</td><td>{$value}</td></tr>\n";
}

?>
</table>

</body>
</html>
