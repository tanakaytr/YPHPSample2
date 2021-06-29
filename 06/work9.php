<!DOCTYPE html>
<html>
<head>
<title>work9</title>
</head>
<body>

<?php
$data = array(
    "shain_id" =>"10235",
    "name" => "山田",
    "age" => "25",
    "section" => "開発",
    "birthday" => "1991-10-25",
);
var_dump($data);

foreach($data as $d => $value){
    print "<tr><td>{$d}</td></tr>\n";
}

?>
</table>

</body>
</html>
