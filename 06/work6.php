<!DOCTYPE html>
<html>
<head>
<title>work6</title>
</head>
<body>

<?php

$prefectures = array(
    "東京",
    "神奈川",
    "埼玉",
    "群馬",
    "千葉",
    "茨城",
    "栃木"
);
?>
<tr>
<table border= "2">
<th>都道府県名</th>
</tr>

<?php

if(in_array("神奈川", $prefectures)){
    $key = array_search("神奈川", $prefectures);
    print "<td>".$prefectures[$key]."</td>";
}

?>

</table>

</body>
</html>
