<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stop = 3;

print "商品{$stop}は販売しておりません<br/>\n";
print "<hr/>\n";

for($i=0; $i<5; $i++){
 if ($i == $stop)
  continue;
 print "商品{$i}を表示します。<br/>\n";
}

print "<hr/>\n";
print "商品は以上です。<br/>\n";

?>

</body>
</html>
