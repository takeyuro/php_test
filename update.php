<?php
	try {
		$id =  $_POST["id"];
		$name =  $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$area = $_POST["area"];
		$gender =  $_POST["gender"];
		$old =  $_POST["old"];
		$memo = $_POST["memo"];
		
		$name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
		$email = htmlspecialchars($email,ENT_QUOTES,'UTF-8');
		$password = htmlspecialchars($password,ENT_QUOTES,'UTF-8');
		$area = htmlspecialchars($area,ENT_QUOTES,'UTF-8');
		$gender = htmlspecialchars($gender,ENT_QUOTES,'UTF-8');
		$old = htmlspecialchars($old,ENT_QUOTES,'UTF-8');
		$memo = htmlspecialchars($memo,ENT_QUOTES,'UTF-8');
		
		$password = password_hash($password,PASSWORD_DEFAULT);
		
		$sql = "update userinfo set
		name='" .$name. "',email='" .$email. "', password='" .$password. "',
		area='" .$area. "',gender='" .$gender. "', old=" .$old. ",
		memo='" .$memo. "' where id=" .$id;
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
				<p>アカウントの更新が完了しました。</p>
				<input type="submit" value="ログインページへ" class="submit_update">
			</form>
		</div>
	</body>
</html>