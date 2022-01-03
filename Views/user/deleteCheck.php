<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="insert_complete">
			<img src="http://localhost/php_test/images/mcd_22.png">
			<p>本当にこのアカウントを削除しますか？</p>
			<?php
				echo '<div>
					<button class="submit_update">
						<a href="../../Controllers/user/deleteController.php?id=' .$_GET["id"]. '" class="sakujo_check_button">はい</a>
					</button>
				</div>
				<div>
					<button class="submit_update">
						<a href="edit.php?id=' .$_GET["id"]. '" class="sakujo_check_button">いいえ</a>
					</button>
				</div>';
			?>
		</div>
	</body>
</html>