<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<p class="form_detail">ユーザー情報を変更したい場合は更新ボタンを、削除したい場合は削除ボタンを押してください。</p>
		<?php
			include('../../Controllers/user/editController.php');
			echo '<div class="start_insert">
				<form action="../../Controllers/user/updateController.php?id=' .$id. '" method="post">
					<div class="texts_insert">
						<label for="name" class="label_insert">名前<br></label>
						<input type="text" id="name" name="name" value="' .$data["name"]. '" required class="write_insert"><br>
					</div>
					<div class="texts_insert">
						<label for="email" class="label_insert">Email<br></label>
						<input type="text" id="email" name="email" value="' .$data["email"]. '" required class="write_insert"><br>
					</div>
					<div class="texts_insert">
						<label for="password" class="label_insert">Password<br></label>
						<input type="text" id="password" name="password" placeholder="変更する場合は入力してください。" minlength="8" maxlength="15" required class="write_insert"><br>
					</div>
					<div class="texts_insert">
						<label for="area" class="label_insert">お住まいの地域<br></label>';
						$areaList = array("北海道","東北地方","関東地方","中部地方","近畿地方","中国地方","四国地方","九州地方","沖縄県");
						echo '<select name="area" class="select_insert">';
						foreach ($areaList as $area) {

							// 選択した血液型にチェックマークを入れる
							if ($data["area"] === $area) {
								echo '<option value="' .$area. '" selected>' .$area. '</option>';
							} else {
								echo '<option value="' .$area. '">' .$area. '</option>';
							}
						}
						echo '</select><br>
					</div>
					<div class="texts_insert">
						<label for="gender" class="label_insert">性別<br></label>';

						// ユーザーが男性なら男性に、女性なら女性にチェックマークが入る
						if ($data["gender"] == 0) {
							echo '<input type="radio" name="gender" value="0" checked=checked class="label_insert">男
							<input type="radio" name="gender" value="1" class="label_insert">女<br>';
						} else {
							echo '<input type="radio" name="gender" value="0" class="label_insert">男
							<input type="radio" name="gender" value="1" checked=checked class="label_insert">女<br>';
						}
					echo '</div>
					<div class="texts_insert">
						<label for="old" class="label_insert">年齢<br></label>
						<input type="text" id="old" name="old" value="' .$data["old"]. '" class="old_insert"><br>
					</div>
					<div class="texts_insert">
						<label for="memo" class="label_insert">メモ<br></label>
						<textarea name="memo" rows="4" cols="20" maxlength="100" class="memo_insert">' .$data["memo"]. '</textarea><br>
					</div>
					<div class="texts_insert">
						<input type="submit" value="更新" class="submit_insert">
					</div>
					<div class="texts_insert">
						<button class="detailCancel">
							<a href="mypage.php?id=' .$_GET["id"]. '" class="detail_cancel">キャンセル</a>
						</button>
					</div>
				</form>
				<div class="sakujo_detail">
						<button class="sakujo_detail_2">
							<a href="deleteCheck.php?id=' .$id. '" class="sakujo_detail_button">削除</a>
						</button>
				</div>
			</div>';
		?>
	</body>
</html>