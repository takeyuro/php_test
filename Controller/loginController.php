<?php
    require_once('../Model/db.php');
    require_once('../Model/user.php');

    valueCheck($_POST['email'], $_POST['password']);

    if (empty($_POST['email']) || !isset($_POST['email'])) {
		die("emailがありません");
	} elseif (empty($_POST['password']) || !isset($_POST['password'])) {
		die("passwordがありません");
	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = htmlspecialchars($email,ENT_QUOTES,'UTF-8');
	$password = htmlspecialchars($password,ENT_QUOTES,'UTF-8');
	
	try {
		// データベースに接続する関数を呼び出す
		$db = dbConnect();

		// 取得したemailに該当するユーザー情報をテーブルから取得する関数を呼び出す
		$sql = "select * from userinfo where email='" .$email. "'";

		// クエリの実行
		$result = mysqli_query($db, $sql);

		$loginFlug = false;
		$name = "";

		// $resultに格納されているmysqli_query関数の結果をArrey型に変換し、While文でレコードを取得
		while ($data = mysqli_fetch_assoc($result)) {

			// ハッシュ化されているパスワードを元の値に戻し、入力されたパスワードと一致していればログイン処理を行う
			if (password_verify($password,$data["password"])) {
				$name = $data["name"];
				$loginFlug = true;
				$_SESSION["id"] = $data["id"];
				$_SESSION["email"] = $email;
				$_SESSION["password"] = $password;
				$_SESSION["name"] = $name;
			}
		}

		// データベースとの接続を解除
		mysqli_close($db);

        header ('Location:../view/mypage.php');
        exit();

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>