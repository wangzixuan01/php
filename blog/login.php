<?php
include "conn.php";
if(isset($_GET['url'])){
    $url=$_GET['url'];

}

if(isset($_POST['sub'])){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $mpass=md5($pass);
    $hurl=$_POST['hurl'];
    $sql="select * from user where uname='$uname' and pass='$mpass'";
    $query=mysqli_query($link,$sql);
    $rs=mysqli_fetch_array($query);
    if($rs){
        //设定cookie
        setcookie('id',$rs['uid']);
        setcookie('uname',$rs['uname']);
        if($hurl){
            echo "<script>location='$hurl'</script>";
        }else{
            echo "<script>location='index.php'</script>";
        }

    }else{
        echo "<script>location='reg.php'</script>";
    }
}

?>

<meta charset="utf-8">
<form action="login.php" method="post">
    <input type="hidden" name="hurl" value="<?php echo $url?>">
    用户名:<input type="text" name="uname"><br />
    密码:<input type="password" name="pass"><br />
    <input type="submit" name="sub" value="登录">
</form>