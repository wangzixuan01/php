<?php

//建立数据库连接
$link=@mysqli_connect('localhost','root','') or die("数据库连接失败");



@mysqli_select_db($link ,blog) or die("选择数据库失败");



mysqli_set_charset($link,'UTF8');

?>
