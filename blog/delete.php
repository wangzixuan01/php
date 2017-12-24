<?php
include "conn.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from blog where bid='$id'";
    $query=mysqli_query($link,$sql);
    if ($query){
        echo "<script>location='index.php'</script>";
    }else{
        echo "error";
    }
};