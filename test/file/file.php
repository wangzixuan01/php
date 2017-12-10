<?php
echo file_get_contents("text.txt");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="next.php" method="post" >
    <input type="submit" value="同意注册">
</form>
<form action="index.php" method="post">
    <input type="submit" value="我不同意">
</form>
</body>
</html>

