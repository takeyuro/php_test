<?php
	session_start();
	try {
		if (empty($_POST["search"]) && empty($_POST["value_low"]) && empty($_POST["value_high"])) {
			// 検索情報がなければ全ての商品を表示
			$sql = "select * from product";
		} else if (empty($_POST["search"])) {
			// 価格帯のみが入力されていた場合は該当する価格帯の範囲内全ての商品を表示
			$value_low = $_POST["value_low"];
			$value_high = $_POST["value_high"];
		
			$value_low = htmlspecialchars($value_low,ENT_QUOTES,'UTF-8');
			$value_high = htmlspecialchars($value_high,ENT_QUOTES,'UTF-8');
			
			$sql = "select * from product where price >='" .$value_low. "' and price <= '" .$value_high. "'";
		} else if (empty($_POST["value_low"]) && empty($_POST["value_high"])) {
			// テキスト欄のみが入力されていた場合は該当するジャンルや名前の商品を表示する。
			$search = $_POST["search"];
			$search = htmlspecialchars($search,ENT_QUOTES,'UTF-8');
			// 部分一致機能を入れているため、1文字だけ入力してもそれに該当する商品が表示される。例えば、「た」と入力するだけで「てりたま」などが表示される。
			$sql = "select * from product where name='" .$search. "' or genre1='" .$search. "' or genre2='" .$search. "' or name like '%" .$search. "%'";
		} else {
			// テキスト欄と価格帯の両方に入力があった場合は該当する商品名やジャンル且つ価格帯の範囲内である商品を表示する。
			$search = $_POST["search"];
			$value_low = $_POST["value_low"];
			$value_high = $_POST["value_high"];
		
			$search = htmlspecialchars($search,ENT_QUOTES,'UTF-8');
			$value_low = htmlspecialchars($value_low,ENT_QUOTES,'UTF-8');
			$value_high = htmlspecialchars($value_high,ENT_QUOTES,'UTF-8');
			
			$sql = "select * from product where name='" .$search. "' or genre1='" .$search. "' or genre2='" .$search. "' or name like '%" .$search. "%' and price >='" .$value_low. "' and price <= '" .$value_high. "'";
		}

		// データベースに接続
		$db = mysqli_connect("localhost","root","admin","user");

		// クエリの実行
		$result = mysqli_query($db, $sql);

		// データベースとの接続解除
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
		<div class="flex_toppage">
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
		<?php
			echo '<div class="login_mypage">';
				echo '<p>' .$_SESSION["name"]. 'さん、ようこそ。</p>';
			echo '</div>';
		?>
		<ul class="navi">
			<li><a href="mypage.php">トップページ</a></li>
			<li><a href="menu.php">メニュー</a></li>
			<li><a href="branch.php">購入履歴</a></li>
		</ul>
		<?php
			try {
				echo '<div class="search_menu">';
					echo '<form action="menu.php" method="post">';
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