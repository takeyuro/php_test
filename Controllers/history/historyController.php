<?php
	try {
        require_once('../../Models/product.php');

        $id = intval($_GET["id"]);

        // soldテーブルから該当するユーザーの購入履歴を取り出す。
		$result = history($id);

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>