<?php


$data['2018-9-1']="看电影";
$data['2018-11-1']="考试";
$data['2018-12-1']="纪念日";

if(isset($_POST['sub'])){
    $date=$_POST['date'];
    //循环$
}

?>


<meta charset="UTF-8">
<h3>查询备忘录</h3>
<form action="date.php" method="post">
    输入日期查询：<input type="text" name="date"><br />
    <input type="submit" name="sub" value="查询">
</form>