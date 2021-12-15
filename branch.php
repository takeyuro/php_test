<?php
	session_start();
	try {
		$name = $_SESSION['name'];

		// 画面には表示されないが値だけを次のページに渡す。
		header ('Location:history.php?name=' .$name);
		exit();
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>