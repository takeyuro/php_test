<?php
	session_start();
	try {
		$id = $_SESSION["id"];
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
		<p class="form_detail">ユーザー情報を変更したい場合は更新ボタンを、削除したい場合は削除ボタンを押してください。</p>
		<?php
			try {
				while ($data = mysqli_fetch_assoc($result)) {
					echo '<div class="start_insert">';
						echo '<form action="update.php" method="post">';
						echo '<div class="texts_insert">';
							echo '<label for="name" class="label_insert">名前<br></label>';
							echo '<input type="text" id="name" name="name" value="' .$data["name"]. '" required class="write_insert"><br>';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<label for="email" class="label_insert">Email<br></label>';
							echo '<input type="text" id="email" name="email" value="' .$data["email"]. '" required class="write_insert"><br>';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<label for="password" class="label_insert">Password<br></label>';
							echo '<input type="text" id="password" name="password" placeholder="新しく入力してください。" required class="write_insert"><br>';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<label for="area" class="label_insert">お住まいの地域<br></label>';
							$areaList = array("北海道","東北地方","関東地方","中部地方","近畿地方","中国地方","四国地方","九州地方","沖縄県");
							echo '<select name="area" class="select_insert">';
							for ($i=0; $i<count($areaList); $i++) {
								if ($data["blood"] == $areaList[$i]) {
									echo '<option value="' .$areaList[$i]. '" selected>' .$areaList[$i]. '</option>';
								} else {
									echo '<option value="' .$areaList[$i]. '">' .$areaList[$i]. '</option>';
								}
							}
							echo '</select><br>';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<label for="gender" class="label_insert">性別<br></label>';
							if ($data["gender"] == 0) {
								echo '<input type="radio" name="gender" value="0" checked=checked class="label_insert">男';
								echo '<input type="radio" name="gender" value="1" class="label_insert">女<br>';
							} else {
								echo '<input type="radio" name="gender" value="0" class="label_insert">男';
								echo '<input type="radio" name="gender" value="1" checked=checked class="label_insert">女<br>';
							}
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<label for="old" class="label_insert">年齢<br></label>';
							echo '<input type="text" id="old" name="old" value="' .$data["old"]. '" class="old_insert"><br>';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<label for="memo" class="label_insert">メモ<br></label>';
							echo '<textarea name="memo" rows="4" cols="20" maxlength="100" class="memo_insert">' .$data["memo"]. '</textarea><br>';
							echo '<input type="hidden" name="id" value="' .$id. '">';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<input type="submit" value="更新" class="submit_insert">';
						echo '</div>';
						echo '<div class="texts_insert">';
							echo '<input type="button" onclick="history.back()" value="キャンセル" class="submit_insert">';
						echo '</div>';
						echo '</form>';
						echo '<div class="sakujo_detail">';
							echo '<form action="delete_check.php" method="post">';
								echo '<input type="hidden" name="id" value="' .$id. '">';
								echo '<input type="submit" value="削除" class="sakujo_detail_2">';
							echo '</form>';
						echo '</div>';
					echo '</div>';
				}
			} catch  (Exception $e) {
				echo 'ただいま障害により大変ご迷惑をおかけしております。';
				exit();
			}
		?>
	</body>
</html>