<?php
	try {
        require_once('../Models/user.php');

		$id = intval($_GET["id"]);

		// クエリの実行
		$data = edit($id);
        
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>