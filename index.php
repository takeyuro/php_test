<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>マクドナルド非公式サイト</title>
		<link href="style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1 class="title">バーガークイーンへようこそ</h1>
		<div class="start">
			<form action="mypage.php" method="post">
				<div class="start_index">
					<label for="email" class="label_index">Eメールアドレス<br></label>
					<input type="text" id="email" name="email" class="text_index" placeholder="例）aaa@xxx.com" required><br>
				</div>
				<div class="start_index">
					<label for="password" class="label_index">パスワード<br></label>
					<input type="password" id="password" name="password" class="text_index" placeholder="入力してください" required><br>
				</div>
				<input type="submit" value="ログイン" class="submit_index">
			</form>
		</div>
		<div class="froats_index">
			<a href="view/insert.php" class="link_index">新規会員登録はコチラ</a>
		</div>
	</body>
</html>