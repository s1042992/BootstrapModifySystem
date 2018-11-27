<?php session_start(); ?>
<meta charset="utf-8" />
<?php
	unset($_SESSION['user_name']);
	header ('Location: index.php');
?>