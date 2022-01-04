<?php
    require_once('db.php');

    function sold($photo ,$name ,$number ,$price ,$userName ,$date ,$date_2 ,$genre2 ,$code ,$userId) {

		// 購入したユーザー名や購入価格などの情報をデータベースに登録
		$sql = "insert into sold (photo,name,number,price,user_name,date,date_2,genre2,code,userId)value
		('" .$photo. "','" .$name. "','" .$number. "','" .$price. "','" .$userName. "','" .$date. "','" .$date_2. "','" .$genre2. "','" .$code. "','" .$userId. "')";
		
		// DB処理
		$result = dbConnect($sql);
    }
?>