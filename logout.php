<?php
session_start();
session_destroy();
echo "<script>window.alert('Terima Kasih atas Kunjungannya :)');
			window.location='./index.php'</script>";
die();
?>