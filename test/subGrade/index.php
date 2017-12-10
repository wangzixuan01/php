<?php
if(isset($_POST['sub']))
?>

<h3>输入分数查询成绩</h3>
<form action="index.php" method="get">
    分数: <input type="text" name="score"><br />
    <input type="submit" name="sub" value="提交查询">
    <input type="reset" name="ret" value="重置分数">
</form>
