<?php
	try {
		$id = $_POST["id"];
		$sql = "delete from userinfo where id=" .$id;
		$db = mysqli_connect("localhost","root","admin","user");
		$result = mysqli_query($db, $sql);
		mysqli_close($db);
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
			<form action="index.php">
				<img src="http://localhost/test/images_test_6/mcd_21.png">
				<p>アカウントの削除が完了しました。</p>
				<input type="submit" value="ログインページへ" class="submit_update">
			</form>
		</div>
	</body>
</html>