<?php
	try {
		require_once('../../Models/user.php');

		if (empty($_POST['email']) || !isset($_POST['email'])) {
			die("emailがありません");
		} elseif (empty($_POST['password']) || !isset($_POST['password'])) {
			die("passwordがありません");
		}

		$email = $_POST['email'];
		$password = $_POST['password'];

		$email = htmlspecialchars($email,ENT_QUOTES,'UTF-8');
		$password = htmlspecialchars($password,ENT_QUOTES,'UTF-8');
		
		// 指定したemailとpasswordが一致していればユーザーIDが返ってくる
		$id = loginCheck($email, $password);

		if ($id === 0) {
			header ('Location:../../Views/user/error.php');
			exit();
		} else {
			header ('Location:../../Views/product/mypage.php?id='.$id);
			exit();
		}

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>