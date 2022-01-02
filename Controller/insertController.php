<?php
	try {
        // Modelを使えるようにする
        require_once('../Model/db.php');
        require_once('../Model/user.php');

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
		
		//データベースに接続する関数を呼び出す
		$db = dbConnect();

		// 送られてきたユーザー情報をuserinfoテーブルに登録する関数を呼び出す
		$sql = insert($name, $email, $password_hash, $area, $gender, $old, $memo);
		
		// クエリを実行する関数を呼び出す
		$result = dbQuery($db, $sql);

		// データベースとの接続解除
		dbClose($db);

        header ('Location:../view/insertComplete.php');
        exit();

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>