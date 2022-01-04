<?php
	try {
        require_once('../../Models/sold.php');

        $userId = intval($_GET["id"]);

		$result = history($userId);

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>