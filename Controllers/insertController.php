<?php
	try {
        require_once('../Models/user.php');

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
		$old = htmlspecialchars($old,ENT_QUOTES,'UTF-8');
		$memo = htmlspecialchars($memo,ENT_QUOTES,'UTF-8');
		
		// パスワードをハッシュ化する関数を呼び出す
		$password_hash = passwordHash($password);
		
		// 送られてきたユーザー情報をuserinfoテーブルに登録する関数を呼び出す
		insert($name, $email, $password_hash, $area, $gender, $old, $memo);

        header ('Location:../Views/insertComplete.php');
        exit();

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>