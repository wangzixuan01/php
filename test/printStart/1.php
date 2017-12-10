<?php
for($i=1;$i<=5;$i++){
    //先打空格
    for ($j=0;$j<5-$i;$j++){
        echo "&nbsp";
    }
    for($k=0;$k<2*$i-1;$k++){
        echo "*";
    }
    echo "<br/>";

}