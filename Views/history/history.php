<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('../../Controllers/user/nameController.php');
			include('../../Controllers/history/historyController.php');
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
			<h1 class="title_toppage">バーガークイーン公式サイト 購入履歴</h1>
				<div class="login_mypage">
					<p>' .$name. 'さん、ようこそ。</p>
				</div>
			<ul class="navi">
				<li><a href="../product/mypage.php?id=' .$id. '">トップページ</a></li>
				<li><a href="../product/menu.php?id=' .$id. '">メニュー</a></li>
				<li><a href="history.php?id=' .$id. '">購入履歴</a></li>
			</ul>';
			// $_SESSION["total"] = array();
			while ($data = mysqli_fetch_assoc($result)) {
				echo "";
				// if (!empty($_SESSION["total"])) {
				// 	if ($_SESSION["total"] != $data_2["date"]) {
				// 		$data_2 = mysqli_fetch_assoc($result_2);
				// 		echo '<div class="flex_link_history">';
				// 			echo '<p>購入日時：' .$data["date"]. '<p>';
				// 			echo '<p>合計購入金額：' .$data["SUM(price)"]. '円</p>';
				// 		echo '</div>';
				// 	}
				// }
				echo '<div class="flex_history">';
					echo '<img src="' .$data["photo"]. '" width="220" height="210">';
					echo '<div class="flexbox_history">';
						echo '<p id="text_history">' .$data["name"]. '</p>';
						echo '<p id="price_history">' .$data["number"]. ' 点（¥  '.$data["price"].'）</p>';
						echo '<p>購入日時　 ' .$data["date_2"]. '</p>';
					echo '</div>';
					echo '<div class="flexbox2_history">';
						echo'<form action="menu_check.php" method="post">';
							echo '<input type="submit" value="再度購入する" class="retry_history">';
							echo '<input type="hidden" name="id" value="' .$data["code"]. '">';
						echo '</form>';
						echo'<form action="menu.php" method="post">';
							echo '<input type="submit" value="関連商品を見る" class="retry2_history">';
							echo '<input type="hidden" name="search" value="' .$data["genre2"]. '">';
						echo '</form>';
					echo '</div>';
				echo '</div>';
				// $_SESSION["total"] = $data_2["date"];
			}
			// if (!empty($_SESSION["total"])) {
			// 	$data_2 = mysqli_fetch_assoc($result_2);
			// 	echo '<div class="flex_link_history">';
			// 		echo '<p>購入日時：' .$data_2["date"]. '<p>';
			// 		echo '<p>合計購入金額：' .$data_2["SUM(price)"]. '円</p>';
			// 	echo '</div>';
			// }
		?>
	</body>
</html>