<?php
    require_once('db.php');

    function getTotal($userId, $date) {
		
		// soldテーブルから該当するユーザーの購入日時と日にちごとの合計金額を取り出す
		$sql = "select date,SUM(price) from sold where userId='" .$userId. "' and date = '" .$date. "' group by date";

		$result = dbConnect($sql);

		return $result;
	}
?>