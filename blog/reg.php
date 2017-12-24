<?php
include "conn.php";
if(isset($_POST['sub'])){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sfile=$_FILES['sfile'];

    //重名验证
    $sql="select * from user where uname='$uname'";
    $query=mysqli_query($link,$sql);
    $rs=mysqli_fetch_array($query);
    if($rs){
        echo "<script>alert('注册重名')</script>";
        echo "<script>location='reg.php'</script>";
    }else{
        //验证用户名是不是非法
        $arr=array('%','=','&');
        $flag=true;
        for($i=0;$i<count($arr);$i++){
            for($j=0;$j<strlen($uname);$j++){
                if($arr[$i]==$uname[$j]){
                    $flag=false;
                }
            }
        }

        if($flag==false){
            echo "<script>alert('注册用户名非法')</script>";
            echo "<script>location='reg.php'</script>";
        }else{
            //处理上传图片
            //1：切割后缀名
            $newarr=explode('.',$sfile['name']);
            $le=count($newarr)-1;
            $hou=$newarr[$le];
            $imgname=$uname.".".$hou;
            $url="./upload/".$imgname;
            $nurl="/upload".$imgname;
            //echo $url;
            //echo $imgname;
            $bb=move_uploaded_file($sfile['tmp_name'], $url);
            if($bb){
                //echo "success";
                $mpass=md5($pass);
                $sql="insert into user(uid,uname,pass,uimg) values(null,'$uname','$mpass','$nurl')";

                $query=mysqli_query($link,$sql);
                if($query){

                    echo "<script>location='login.php'</script>";
                }else{
                    echo "error";
                }
            }else{
                echo "error";
            }
        }
    }
    /*
     * array(5) { ["name"]=> string(23) "11216943431d69da26o.jpg"
     * ["type"]=> string(10) "image/jpeg"
     * ["tmp_name"]=> string(24) "C:\xampp\tmp\php4587.tmp"
     * ["error"]=> int(0) ["size"]=> int(144955) }
     */
}


?>

<meta charset="utf-8">
<form action="reg.php" method="post" enctype="multipart/form-data">
    用户名:<input type="text" name="uname"><br />
    密码:<input type="password" name="pass"><br />
    <input type="file" name="sfile"><br />
    <input type="submit" name="sub" value="注册">

</form>