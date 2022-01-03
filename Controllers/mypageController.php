<?php
    try {
        require_once('../Models/product.php');

        $result = findRecommend();
        
    } catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>