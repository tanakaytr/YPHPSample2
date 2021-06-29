<!DOCTYPE html>
<html>
<head>
<title>work10</title>
</head>
<body>

<?php
$employees = "山田";
$age = 23;
$seibetsu = "f";
$section = "広報";
$employees[] = compact("employees", "age", "seibetsu", "section");
var_dump($employees);
