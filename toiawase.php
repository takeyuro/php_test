<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>マクドナルド非公式サイト</title>
		<link href="style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
    div class="flex_toppage">
			<div class="header_mypage">
				<p><a href="toiawase.php">お問い合わせ</a></p>
			</div>
			<div class="header_mypage">
				<p><a href="detail.php">ユーザー情報の変更・削除</a></p>
			</div>
			<div class="header_mypage2">
				<p><a href="index.php">ログアウト</a></p>
			</div>
		</div>
		<div>
			<img src="http://localhost/test/images_test_6/mcd_00.png" width="100%" height="280">
		</div>
		<h1 class="title_toppage">バーガークイーン公式サイト お問い合わせフォーム</h1>
		<?php
			echo '<div class="login_mypage">';
				echo '<p>' .$_SESSION["name"]. 'さん、ようこそ。</p>';
			echo '</div>';
		?>
		<ul class="navi">
			<li><a href="mypage.php">トップページ</a></li>
			<li><a href="menu.php">メニュー</a></li>
			<li><a href="branch.php">購入履歴</a></li>
		</ul>

	</body>
</html>