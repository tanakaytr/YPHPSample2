<!DOCTYPE html>
<html>
<head>
<title>work6</title>
</head>
<body>

<?php

for ($i = 2; $i <= 100; $i++){
    $a = true;
    for ($j = 2; $j < $i;  $j++){
        if (($i % $j) == 0){
            $a = false;
            break;
            }
        }
    if ($a){
        print "{$i},";
    }
}

?>

</body>
</html>
