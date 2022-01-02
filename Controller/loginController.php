<?php
	try {
		require_once('../Model/user.php');

		if (empty($_POST['email']) || !isset($_POST['email'])) {
			die("emailがありません");
		} elseif (empty($_POST['password']) || !isset($_POST['password'])) {
			die("passwordがありません");
		}

		$email = $_POST['email'];
		$password = $_POST['password'];

		$email = htmlspecialchars($email,ENT_QUOTES,'UTF-8');
		$password = htmlspecialchars($password,ENT_QUOTES,'UTF-8');
		
		// 指定したemailとpasswordが一致していればtrueが返ってくる
		$loginFlug = loginCheck($email, $password);

		if ($loginFlug) {
			header ('Location:../view/mypage.php');
			exit();
		} else {
			die("ログインに失敗しました");
		}

		

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>