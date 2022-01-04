<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('../../Controllers/user/nameController.php');
			include('../../Controllers/product/detailController.php');
			echo '<div>
				<img src="http://localhost/php_test/images/mcd_00.png" width="100%" height="280">
			</div>
			<h1 class="title_toppage">バーガークイーン公式サイト 購入ページ</h1>
				<div class="login_mypage">
					<p>' .$name. 'さん、ようこそ。</p>
				</div>
			<ul class="navi">
				<li><a href="mypage.php?id=' .$id. '">トップページ</a></li>
				<li><a href="menu.php?id=' .$id. '">メニュー</a></li>
				<li><a href="branch.php?id=' .$id. '">購入履歴</a></li>
			</ul>
			<div class="main_menu_check">
				<form action="../../Controllers/product/sellController.php?id=' .$id. '" method="post">
					<img src="' .$data["photo"]. '" width="370" height="350">
					<h2>' .$data["name"]. '</h2>
					<p>¥ ' .$data["price"]. '</p>
					<div class="option_menu_check">
						<label for="price">点数　</label>';

						// 購入する商品の個数を選択できる。個数ごとに値段が計算され、表示される。
						echo '<select name="number">';
							for ($i=1; $i < 6; $i++) {
								echo '<option value="' .$i. '">' .$i. '点　￥ ' .$data["price"] * $i. ' </option>';
							}
						echo '</select>
					</div>
					<input type="hidden" name="productId" value="' .$data["id"]. '">
					<input type="hidden" name="photo" value="' .$data["photo"]. '">
					<input type="hidden" name="name" value="' .$data["name"]. '">
					<input type="hidden" name="price" value="' .$data["price"]. '">
					<input type="hidden" name="genre2" value="' .$data["genre2"]. '">
					<input type="submit" value="購入する" class="submit_menu_check">
					<input type="button" onclick="history.back()" value="キャンセル" class="button_menu_check">
				</form>
			</div>';
		?>
	</body>
</html>