<?php
$num1=$_POST['num1'];
$ysf=$_POST['operator'];
$num2=$_POST['num2'];
if (is_numeric($num1)&is_numeric($num2)){
if (isset($_POST['sub'])){
$sum=0;
switch ($ysf){
    case '+':
        $sum=$num1+$num2;
        break;
    case '-':
        $sum=$num1+$num2;
        break;
    case '*':
        $sum=$num1+$num2;
        break;
    case '/':
        $sum=$num1/$num2;
        break;
    case '%':
        $sum=$num1%$num2;
        break;
}
}
}else{
    echo "错误！！！请输入数字";
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>计算器</title>
</head>
<body>
<form action="counter.php" method="post">
    <h4>计算器</h4>
    <table border="1">
        <tr>
            <td><input type="text" name="num1" value="<?php echo "$num1" ?>"></td>
            <td><select name="operator" id="fn" >
                    <option value="+" <?php echo ($ysf=='+')?selected:""?>>+</option>
                    <option value="-" <?php echo ($ysf=='-')?selected:""?>>-</option>
                    <option value="*" <?php echo ($ysf=='*')?selected:""?>>*</option>
                    <option value="/" <?php echo ($ysf=='/')?selected:""?>>/</option>
                    <option value="%" <?php echo ($ysf=='%')?selected:""?>>%</option>
                </select></td>
            <td><input type="text" name="num2" value="<?php echo "$num2" ?>"></td>
            <td><input type="submit" value="计算" name="sub"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if(isset($_POST['sub'])){
    echo "<table border='1px' width='420px'>";
    echo "<tr>";
    echo "<td colspan='4'>"."结果为：".$num1."$ysf".$num2."=".$sum."</td>";
    echo "</tr>";
    echo "</table>";
}
?>




