<?php
$info=array(
    "user"=>array(
        array(1,'zhansan',10,'male'),
        array(2,'lisi',20,'male'),
        array(3,'wangwu','male')
    ),
    "score"=>array(
        array(1,100,89,100),
        array(2.89,43,76),
        array(3,76,89,98)
    ),
    "connect"=>array(
        array(1,'110','aaa@bbb.com'),
        array(2,'123','ccc@aaa.com'),
        array(3,'132','ddd@aaa.com')
    )
);

foreach ($info as $key=>$value){
    echo "<table border='1px' width='100px'>";
    echo "<th>";
    echo "$key";
    echo "</th>";
    echo "</table>";
    foreach ($)
}