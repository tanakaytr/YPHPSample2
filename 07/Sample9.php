<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 0;

print "変数\$aが使えます。<br/>\n";
print "変数\$aの値は{$a}です。<br/>\n";

funcB();
funcC();

function funcB()
{
    $b = 1;
    
    print "<hr/>\n";
    print "funcB関数では変数\$bが使えます。<br/>\n";
    print "変数\$bの値は{$b}です。<br/>\n";
    print "<hr/>";
}

function funcC()
{
    $c = 2;
    
    print "funcC関数では変数\$cが使えます。<br/>\n";
    print "変数\$cの値は{$c}です。<br/>\n";
    print "<hr/>";
}

?>

</body>
</html>

