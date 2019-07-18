<?php
session_start();
if($_SESSION['username'] == '' ){
	echo "<script>window.alert('Anda Harus Login Terlebih Dahulu!');
			window.location='./index.php'</script>";
	die();
}
?>