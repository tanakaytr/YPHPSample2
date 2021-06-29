<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>


<?php

$product["みかん"] = 80;
$product["イチゴ"] = 60;
$product["りんご"] = 22;
$product["もも"] = 50;
$product["くり"] = 57;

?>

<table border= "2">
<tr bgcolor = "#AAAAAA">
<th>在庫状況</th>
</tr>

<?php

print "<tr><td>みかんは{$product["みかん"]}個です。</td></tr>\n";
print "<tr><td>いちごは{$product["イチゴ"]}個です。</td></tr>\n";
print "<tr><td>りんごは{$product["りんご"]}個です。</td></tr>\n";
print "<tr><td>ももは{$product["もも"]}個です。</td></tr>\n";
print "<tr><td>くりは{$product["くり"]}個です。</td></tr>\n";

?>

</table>

</body>
</html>
