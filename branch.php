<?php
	session_start();
	try {
		$name = $_SESSION['name'];
		header ('Location:history.php?name=' .$name);
		exit();
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>