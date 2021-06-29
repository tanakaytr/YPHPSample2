<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 0;

for ($i = 0; $i<5; $i++)
    func();

function func()
{
    global $a;
    $b = 0;
    static $c = 0;
    
    print "<hr/>\n";
    print "変数\$aの値は{$a}変数\$bの値は{$b}変数\$cの値は{$c}です。<br/>\n";
    
    $a++;
    $b++;
    $c++;
}

?>

</body>
</html>

