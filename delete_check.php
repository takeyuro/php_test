<?php
	$id = $_POST["id"];

	$id = htmlspecialchars($id,ENT_QUOTES,'UTF-8');
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
				echo '<form action="delete.php" method="post">';
					echo '<input type="hidden" name="id" value="' .$id. '">';
					echo '<input type="submit" value="はい" class="submit_update"><br>';
					echo '<input type="button" onclick="history.back()" value="いいえ" class="submit_update">';
				echo '</form>';
			?>
		</div>
	</body>
</html>