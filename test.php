<!DOCTYPE html>

<html>
<?php

$db = new mysqli("localhost","root", "", "member");
if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
}
$db->set_charset("utf8");

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style> 
textarea {
    width: 500px;
    height: 150px;
    padding: 3px 3px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}



</style>
</head>
<body>
<form id="form" action="./test2.php" method="post">
<p><strong>辦帳號</strong></p>
<input type="text" name="account"> <br>
<input type="text" name="password"> <br>

<input type="submit" name="SB" value="submit">
</form>
<p>今天的日期是： <?php echo date("Y-m-d h:i:s"); ?> </p>
<form id="form1" action="./test2.php" method="post">
<p><strong>輪播</strong></p>
<textarea name="carousel">

</textarea> 
<br>
<input type="submit" name="SB" value="submit">
</form>
   
 
<br>
<body>
<form action="????.php" method="post">
<p><strong>跑馬燈</strong></p>
<textarea></textarea> 
<br>
<input type="submit" name="SB" value="submit">
</form>
</body>
</html>
