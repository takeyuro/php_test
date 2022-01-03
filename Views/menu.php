<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('../Controllers/nameController.php');
			include('../Controllers/menuController.php');
			echo '<div class="flex_toppage">
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
			<h1 class="title_toppage">バーガークイーン公式サイト メニュー</h1>
			<div class="login_mypage">
				<p>' .$name. 'さん、ようこそ。</p>
			</div>
			<ul class="navi">
				<li><a href="mypage.php?id=' .$id. '">トップページ</a></li>
				<li><a href="menu.php?id=' .$id. '">メニュー</a></li>
				<li><a href="branch.php?id=' .$id. '">購入履歴</a></li>
			</ul>';
			try {
				echo '<div class="search_menu">';
					echo '<form action="menu.php?id=' .$id. '" method="post">';
						echo '<label for="search">フリーワード</label>';
						echo '<input type="text" id="search" name="search" placeholder="ハンバーガー、夜マックなど" class="texts_menu">';
						echo '<label for="value_low">　　価格帯</label>';
						echo '<select name="value_low" class="select_menu">';
						echo '<option value=""></option>';
							for ($i=1; $i < 7; $i++) {
								echo '<option value="' .$i. '00">' .$i. '00</option>';
							}
						echo '</select>';
						echo '<lavel for="value_high"> 〜 </label>';
						echo '<select name="value_high" class="select_menu_2">';
						echo '<option value=""></option>';
							for ($i=2; $i < 8; $i++) {
								echo '<option value="' .$i. '00">' .$i. '00</option>';
							}
						echo '</select>';
						echo '<input type="submit" value="検索" class="research_menu">';
					echo '</form>';
				echo '</div>';	
				while ($data = mysqli_fetch_assoc($result)) {
					echo '<div class="box_menu">';
						echo '<div class="flex_menu">';
							echo '<div class="main_menu">';
								echo '<form action="menu_check.php">';
									echo '<img src="' .$data["photo"]. '" width="180" height="170">';
									echo '<p class="main_title_menu">' .$data["name"]. '</p>';
									echo '<div class="flex_toppage">';
										echo '<div class="flexbox_menu">';
											echo '<p class="font_menu">¥ ' .$data["price"]. '</p>';
										echo '</div>';
										echo '<div class="flexbox_menu">';
											echo '<input type="hidden" name="id" value=' .$data["id"]. '>';
											echo '<input type="submit" value="詳細" class="submit_menu">';
										echo '</div>';
									echo '</div>';
								echo '</form>';
							echo '</div>';
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