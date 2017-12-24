<?php

setcookie('id',"");
setcookie('name','');

if(isset($_COOKIE['id'])){
    echo 'success';
}else{
    echo 'error';
}

?>