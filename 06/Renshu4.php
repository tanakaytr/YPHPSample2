<!DOCTYPE html>
<html>
<head>
<title>練習4</title>
</head>
<body>

<?php

$data = array(
    array("8月1日", "東京に行きました"), 
    array("8月2日", "今日は晴れです"), 
    array("8月3日", "明日から休暇です"), 
    array("8月4日", "帰省します"),
    array("8月5日", "到着しました")
);

?>

<table border= "2">
<tr bgcolor = "#AAAAAA">
<th>日付</th>
<th>タイトル</th>
</tr>

<?php

foreach($data as $title){
    print "<tr>";
    foreach ($title as $value){
        print "<td>{$value}</td>";
    }
    print "</tr>\n";
}

?>

</table>

</body>
</html>
