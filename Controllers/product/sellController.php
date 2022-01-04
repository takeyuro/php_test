<?php
	try {
		// タイムゾーンを取得
		$org_timezone = date_default_timezone_get();
		date_default_timezone_set('Asia/Tokyo');

        require_once('../../Models/user.php');
        require_once('../../Models/sold.php');
		
        $code = $_POST["productId"];
		$photo = $_POST["photo"];
		$name = $_POST["name"];
		$number = $_POST["number"];
		$price = $_POST["price"] * $number;
		$date = date("Y-m-d");
		$date_2 = date("Y-m-d H:i:s");
		$genre2 = $_POST["genre2"];
        $userId = intval($_GET["id"]);

        // ユーザー名を取得
        $userName = findName($userId);

		sell($photo ,$name ,$number ,$price ,$userName ,$date ,$date_2 ,$genre2 ,$code ,$userId);
		
		date_default_timezone_set($org_timezone);

        header ('Location:../../Views/product/sellComplete.php?id='.$userId);
        exit();
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>