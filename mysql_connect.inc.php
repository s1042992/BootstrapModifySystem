<?php

$db = new mysqli("localhost","root", "", "member");
if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
}
$db->set_charset("utf8");

?>