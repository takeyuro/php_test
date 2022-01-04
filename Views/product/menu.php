<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('../../Controllers/user/nameController.php');
			include('../../Controllers/product/menuController.php');
			echo '<div class="flex_toppage">
				<div class="header_mypage">
					<p><a href="../user/edit.php?id=' .$id. '">ユーザー情報の変更・削除</a></p>
				</div>
				<div class="header_mypage2">
					<p><a href="../../index.php">ログアウト</a></p>
				</div>
			</div>
			<div>
				<img src="http://localhost/php_test/images/mcd_00.png" width="100%" height="280">
			</div>
			<h1 class="title_toppage">バーガークイーン公式サイト メニュー</h1>
			<div class="login_mypage">
				<p>' .$name. 'さん、ようこそ。</p>
			</div>
			<ul class="navi">
				<li><a href="mypage.php?id=' .$id. '">トップページ</a></li>
				<li><a href="menu.php?id=' .$id. '">メニュー</a></li>
				<li><a href="../history/history.php?id=' .$id. '">購入履歴</a></li>
			</ul>
			<div class="search_menu">
				<form action="menu.php?id=' .$id. '" method="post">
					<label for="search">フリーワード</label>
					<input type="text" id="search" name="search" placeholder="ハンバーガー、夜マックなど" class="texts_menu">
					<label for="value_low">　　価格帯</label>
					<select name="value_low" class="select_menu">
					<option value=""></option>';
						for ($i=1; $i < 7; $i++) {
							echo '<option value="' .$i. '00">' .$i. '00</option>';
						}
					echo '</select>
					<lavel for="value_high"> 〜 </label>
					<select name="value_high" class="select_menu_2">
					<option value=""></option>';
						for ($i=2; $i < 8; $i++) {
							echo '<option value="' .$i. '00">' .$i. '00</option>';
						}
					echo '</select>
					<input type="submit" value="検索" class="research_menu">
				</form>
			</div>';	
			while ($data = mysqli_fetch_assoc($result)) {
				echo '<div class="box_menu">
					<div class="flex_menu">
						<div class="main_menu">
							<form action="menuDetail.php?id=' .$id. '" method="post">
								<img src="' .$data["photo"]. '" width="180" height="170">
								<p class="main_title_menu">' .$data["name"]. '</p>
								<div class="flex_toppage">
									<div class="flexbox_menu">
										<p class="font_menu">¥ ' .$data["price"]. '</p>
									</div>
									<div class="flexbox_menu">
										<input type="hidden" name="productId" value=' .$data["id"]. '>
										<input type="submit" value="詳細" class="submit_menu">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>';
			}
		?>
	</body>
</html>