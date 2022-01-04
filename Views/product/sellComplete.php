<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
		echo '<div class="insert_complete">
				<img src="http://localhost/php_test/images/mcd_21.png">
				<p>お買い上げありがとうございます！</p>
				<div>
					<button class="submit_update">
						<a href="menu.php?id=' .$_GET["id"]. '" class="sellComplete_button">メニューへ</a>
					</button>
				</div>
				<div>
					<button class="submit_update">
						<a href="../history/history.php?id=' .$_GET["id"]. '" class="sellComplete_button">購入履歴へ</a>
					</button>
				<div>
		</div>';
		?>
	</body>
</html>