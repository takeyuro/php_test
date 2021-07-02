<?php
	try {
		$id = $_POST["id"];
		$db = mysqli_connect("localhost","root","admin","user");
		$sql = "select * from userinfo where id=" .$id;
		$result = mysqli_query($db,$sql);
		mysqli_close($db);
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="insert_complete">
			<img src="http://localhost/test/images_test_6/mcd_22.png">
			<p>本当にこのアカウントを削除しますか？</p>
			<?php
				try {
					while ($data = mysqli_fetch_assoc($result)) {
						echo '<form action="delete.php" method="post">';
							echo '<input type="hidden" name="id" value="' .$data["id"]. '">';
							echo '<input type="submit" value="はい" class="submit_update"><br>';
							echo '<input type="button" onclick="history.back()" value="いいえ" class="submit_update">';
						echo '</form>';
					}
				} catch  (Exception $e) {
					echo 'ただいま障害により大変ご迷惑をおかけしております。';
					exit();
				}
			?>
		</div>
	</body>
</html>