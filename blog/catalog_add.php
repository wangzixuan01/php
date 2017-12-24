<?php
	include "conn.php";
	if(isset($_POST['sub'])){
        $lei=$_POST['lei'];
        $sql="insert into catalog(catalog_id,catalog_name) values(null,'$lei')";
        $query=mysqli_query($link,$sql);
        if($query){
            header("location:add.php");
        }
    }
?>

<meta charset="utf-8">
<form action="catalog_add.php" method="post">
    分类名称:<input type="text" name="lei">
    <input type="submit" name="sub" value="添加分类">
</form>