<?php
    require_once('db.php');

    function sell($photo ,$name ,$number ,$price ,$userName ,$date ,$date_2 ,$genre2 ,$code ,$userId) {

		// 購入したユーザー名や購入価格などの情報をデータベースに登録
		$sql = "insert into sold (photo,name,number,price,user_name,date,date_2,genre2,code,userId)value
		('" .$photo. "','" .$name. "','" .$number. "','" .$price. "','" .$userName. "','" .$date. "','" .$date_2. "','" .$genre2. "','" .$code. "','" .$userId. "')";
		
		// DB処理
		$result = dbConnect($sql);
    }

	function history($userId) {

		// soldテーブルから該当するユーザーの購入履歴を取り出す。
		$sql = "select * from sold where userId ='" .$userId. "'";

		$result = dbConnect($sql);

		return $result;
	}

	function getDate($userId) {

		// soldテーブルから該当するユーザーの購入日時を取り出す
		$sql = "select date from sold where userId='" .$userId. "'";

		$result = dbConnect($sql);

		return $result;
	}

	function getTotal($userId) {
		
		// soldテーブルから該当するユーザーの購入日時と日にちごとの合計金額を取り出す
		$sql = "select date,SUM(price) from sold where userId='" .$userId. "' group by date";

		$result = dbConnect($sql);

		return $result;
	}
?>