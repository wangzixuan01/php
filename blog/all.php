<?php
	include "conn.php";
	if(isset($_GET['id'])){
        $id=$_GET['id'];
        //更新hits数据
        $sql="update blog set hits=hits+1 where bid='$id'";
        $query=mysqli_query($link,$sql);
        if($query){
            $sql="select * from blog where bid='$id'";
            $query=mysqli_query($link,$sql);
            $rs=mysqli_fetch_array($query);
        }
    }

?>

<h3>标题:<?php echo $rs['title']?></h3>
<li>时间:<?php echo $rs['time']?></li>
<li>访问率:<?php echo $rs['hits']?></li>
<p><?php echo $rs['content']?></p>
<hr/>