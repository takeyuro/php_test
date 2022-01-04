<?php
	try {
        require_once('../../Models/sold.php');

        $userId = intval($_GET["id"]);

        // soldテーブルから該当するユーザーの購入履歴を取り出す。
		$result = history($userId);

        // soldテーブルから該当するユーザーの購入日時を取り出す
        $date = getDate($userId);

        // soldテーブルから該当するユーザーの購入日時と日にちごとの合計金額を取り出す
        $total = getTotal($userId);

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>