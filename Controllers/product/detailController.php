<?php
	try {
        require_once('../../Models/product.php');

		$productId = intval($_POST["productId"]);

		$data = detail($productId);
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>