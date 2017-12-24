<?php
if(isset($_COOKIE['id'])){
    setcookie('id','');
    setcookie('uname','');
    echo "<script>location='index.php'</script>";
}

?>