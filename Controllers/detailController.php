<?php
	try {
        require_once('../Models/product.php');

		$id = intval($_POST["productId"]);

		$data = detail($id);
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>