<?php

    if (!isset($_COOKIE['id'])){
        $url=$_SERVER['REQUEST_URI'];
        $arr=explode('/',$url);
        $le=count($arr)-1;
        $newurl=$arr[$le];
        echo "<script>location='login.php?url=$newurl'</script>";
    }
    ?>
<?php
include "conn.php";
if (isset($_POST['sub'])){
    $title=$_POST['title'];
    $con=$_POST['con'];

    $sql="insert into blog(bid,title,content,time,uid,catalog_id) values(null,'$title','$con',now(),'$uid','$cid')";
    $query=mysqli_query($link,$sql);
    if ($query){
        echo "success";
        header("location:index.php");
    }else{
        echo "error";
    }
}
?>
<meta charset="UTF-8">
<form action="add.php" method="post">
    标题:<input type="text" name="title"><br />
    <select name="fenlei" id="">
        <?php
        $sql="select * from catalog";
        $query=mysqli_query($link,$sql);
        while($rs=mysqli_fetch_array($query)){
        ?>
        <option value="<?php echo $rs['catalog_id']?>">
            <?php echo $rs['catalog_name']?>
        </option>
        <?php  }
        ?>
    </select>  <br />
    内容:<textarea cols="30" rows="10" name="con"></textarea> <br />
    <input type="submit" name="sub" value="添加文章">
</form>
?>