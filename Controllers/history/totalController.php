session_start();
	try {
		if (!empty($_SESSION["total"])) {

			// データベースに接続
			$db = mysqli_connect("localhost","root","admin","user");

			// soldテーブルから該当するユーザーの購入日時と日にちごとの合計金額を取り出す
			$sql = "select date,SUM(price) from sold where user_name='" .$_SESSION["name"]. "' group by date";

			// クエリの実行
			$result = mysqli_query($db,$sql);

			// データベースとの接続解除
			mysqli_close($db);
		}
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}