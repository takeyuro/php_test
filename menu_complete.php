<?php
	session_start();
	try {
		// タイムゾーンを取得
		$org_timezone = date_default_timezone_get();
		date_default_timezone_set('Asia/Tokyo');
		
		$photo = $_POST["photo"];
		$name = $_POST["name"];
		$number = $_POST["number"];
		$price = $_POST["price"] * $number;
		$user_name = $_SESSION["name"];
		$date = date("Y-m-d");
		$date_2 = date("Y-m-d H:i:s");
		$genre2 = $_POST["genre2"];
		$code = $_POST["id"];
		
		$photo = htmlspecialchars($photo,ENT_QUOTES,'UTF-8');
		$name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
		$number = htmlspecialchars($number,ENT_QUOTES,'UTF-8');
		$price = htmlspecialchars($price,ENT_QUOTES,'UTF-8');
		$user_name = htmlspecialchars($user_name,ENT_QUOTES,'UTF-8');
		$date = htmlspecialchars($date,ENT_QUOTES,'UTF-8');
		$date_2 = htmlspecialchars($date_2,ENT_QUOTES,'UTF-8');
		$genre2 = htmlspecialchars($genre2,ENT_QUOTES,'UTF-8');
		$code = htmlspecialchars($code,ENT_QUOTES,'UTF-8');
		
		// データベースに接続
		$db = mysqli_connect("localhost","root","admin","user");

		// 購入したユーザー名や購入価格などの情報をデータベースに登録
		$sql = "insert into sold (photo,name,number,price,user_name,date,date_2,genre2,code)value
		('" .$photo. "','" .$name. "','" .$number. "','" .$price. "','" .$user_name. "','" .$date. "','" .$date_2. "','" .$genre2. "','" .$code. "')";
		
		// クエリの実行
		$result = mysqli_query($db, $sql);

		// データベースとの接続解除
		mysqli_close($db);
		
		date_default_timezone_set($org_timezone);
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="insert_complete">
			<form action="menu.php">
				<img src="http://localhost/test/images_test_6/mcd_21.png">
				<p>お買い上げありがとうございます！</p>
				<input type="submit" value="メニューへ" class="submit_update">
			</form>
			<form action="branch.php">
				<input type="submit" value="購入履歴へ" class="submit_update">
			</form>
		</div>
	</body>
</html>