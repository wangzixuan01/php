<?php
  if (isset($_POST['submit'])){
      $string = strrev($_FILES['upfile']['name']);
      $array = explode('.',$string);
      echo $array[0];
  }
?>

<head>
<meta charset="UTF-8">
<title></title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
</head>
<body>
<form action="1.上传文件.php" method="post">
    <input type="file" name="upfile" />
    <input type="submit" name="submit" value="submit" />
</form>
</body>


