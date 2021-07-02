<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1 class="title">新規会員登録フォーム</h1>
		<div class="start_insert">
			<form action="insert_complete.php" method="post">
			<div class="texts_insert">
				<label for="name" class="label_insert">氏名</label>
				<label for="name" class="insert_hissu">（必須）<br></label>
				<input type="text" id="name" name="name" placeholder="例）山田 太郎" required class="write_insert"><br>
			</div>
			<div class="texts_insert">
				<label for="email" class="label_insert">Eメールアドレス</label>
				<label for="email" class="insert_hissu">（必須）<br></label>
				<input type="text" id="email" name="email" placeholder="例）aaa@xxx.com" required class="write_insert"><br>
			</div>
			<div class="texts_insert">
				<label for="password" class="label_insert">パスワード</label>
				<label for="name" class="insert_hissu">（必須）<br></label>
				<input type="text" id="password" name="password" placeholder="8文字以上12文字以内" minlength="8" maxlength="12" required class="write_insert"><br>
			</div>
			<div class="texts_insert">
				<label for="area" class="label_insert">お住まいの地域<br></label>
				<select name="area" class="select_insert">
					<option value="北海道">北海道</option>
					<option value="東北地方">東北地方</option>
					<option value="関東地方">関東地方</option>
					<option value="中部地方">中部地方</option>
					<option value="近畿地方">近畿地方</option>
					<option value="中国地方">中国地方</option>
					<option value="四国地方">四国地方</option>
					<option value="九州地方">九州地方</option>
					<option value="沖縄県">沖縄県</option>
					<option value="その他">その他</option>
				</select><br>
			</div>
			<div class="texts_insert">
				<label for="gender" class="label_insert">性別<br></label>
				<input type="radio" name="gender" value="0" checked=checked class="label_insert">男
				<input type="radio" name="gender" value="1" class="label_insert">女<br>
			</div>
			<div class="texts_insert">
				<label for="old" class="label_insert">年齢<br></label>
				<input type="text" id="old" name="old" placeholder="例）20" class="old_insert">歳<br>
			</div>
			<div class="texts_insert">
				<label for="memo" class="label_insert">備考<br></label>
				<textarea name="memo" rows="4" cols="20" maxlength="100" placeholder="自己紹介など" class="memo_insert"></textarea><br>
			</div>
			<div class="texts_insert">
				<input type="submit" value="新規登録" class="submit_insert">
			</div>
			<div class="texts_insert">
				<input type="button" onclick="history.back()" value="キャンセル" class="submit_insert">
			</div>
			</form>
		</div>
	</body>
</html>