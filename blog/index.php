<?php
     if (isset($_COOKIE['id'])){
         echo $_COOKIE['uname']."已登录";
         echo "$nbsp";
         echo "<a href='ulogin.php'>注销</a>";
     }else{
         echo "<a href='login.php'>未登录</a>";
     }
     ?>

<form action="index.php" method="post">
	<input type="text" name="search">
	<input type="submit" name="sub" value="搜索">
</form>

<?php
include "conn.php";
$sql="select * from user,blog where user.uid=blog.uid ";
$query = mysqli_query($link,$sql);

while($rs=mysqli_fetch_array($query)){
    ?>
}
<h3><a href="all.php?id=<?php echo $rs['bid']?>">标题:<?php
         echo $rs['title']?>
</a>|<a href="delete.php?id=<?php
echo $rs['bid']?>">删除</a> |<a href="update.php?id=<?php echo $rs['bid']?>">修改
</a></h3>
    <li>时间:<?php echo $rs['time']?></li>
    <li>作者:<?php echo $rs['uname']?></li>
    <p><?php echo iconv_substr($rs['content'],0,3)?>...</p>
    <hr />
    <?php
}
?>


<?php

?>
<style>
    li{
        list-style: none;
    }
    .classfiy{
        position: absolute;
        right: 30px;
    }
</style>

<div class="classfiy">
    <ul>
        <li>分类</li>
        <li>情感类</li>
        <li>科技类</li>
        <li>历史类</li>
        <li>八卦类</li>
    </ul>
</div>


<script>
    var aLi=document.getElementsByTagName("li");
    for(var i=0;i<aLi.length;i++){
        (function (n) {
            aLi[n].onclick=function () {
                alert(n);
            }
        })(i);
    }
</script>



