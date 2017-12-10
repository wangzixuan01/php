<?php
$n=5;
for($i=1;$i<=$n;$i++){
    //先打空格
    for ($j=0;$j<5-$i;$j++){
        echo "&nbsp";
    }
    for($k=0;$k<2*$i-1;$k++){
        if($k==1||$i==$n){
            echo "*";
        }else{
            if($j==1||$j==2*$i-1){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
    }
    echo "<br/>";

}