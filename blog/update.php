<?php
include "conn.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from blog where bid='$id'";
    $query=mysqli_query($link,$sql);
    $rs=mysqli_fetch_array($query);
}
if (isset($_POST['sub'])){
    $title=$_POST['title'];
    $con=$_POST['con'];
    $hid=$_POST['hid'];
    $sql="update blog set title='$title',content='$con' where bid='$hid'";
    $query=mysqli_query($link,$sql);
    if ($query){
        echo "<script>location='index.php'</script>";
    }
}

?>

<meta charset="utf-8">
<form action="update.php" method="post">
    <input type="hidden" name="hid" value="<?php echo $rs['bid']?>">
    标题:<input type="text" name="title" value=<?php echo $rs['title']?>><br />
    内容:<textarea cols=20 rows=10 name="con"><?php echo $rs['content']?></textarea><br />
    <input type="submit" name="sub" value="修改文章">
</form>
