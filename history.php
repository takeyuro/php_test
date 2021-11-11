<?php
	session_start();
	try {
		if (!empty($_SESSION["total"])) {
			$db = mysqli_connect("localhost","root","admin","user");
			$sql = "select date,SUM(price) from sold where user_name='" .$_SESSION["name"]. "' group by date";
			$result = mysqli_query($db,$sql);
			mysqli_close($db);
		}
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
	try {
		$db_2 = mysqli_connect("localhost","root","admin","user");
		$sql_2 = "select * from sold where user_name ='" .$_SESSION["name"]. "'";
		$result_2 = mysqli_query($db_2,$sql_2);
		mysqli_close($db_2);
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
		<h1 class="title_toppage">バーガークイーン公式サイト 購入履歴</h1>
		<?php
			echo '<div class="login_mypage">';
				echo '<p>' .$_SESSION["name"]. 'さん、ようこそ。</p>';
			echo '</div>';
		?>
		<ul class="navi">
			<li><a href="mypage.php">トップページ</a></li>
			<li><a href="menu.php">メニュー</a></li>
			<li><a href="history.php">購入履歴</a></li>
		</ul>
		<?php
			try {
				$_SESSION["total"] = array();
				while ($data_2 = mysqli_fetch_assoc($result_2)) {
					echo "";
					if (!empty($_SESSION["total"])) {
						if ($_SESSION["total"] != $data_2["date"]) {
							$data = mysqli_fetch_assoc($result);
							echo '<div class="flex_link_history">';
								echo '<p>購入日時：' .$data["date"]. '<p>';
								echo '<p>合計購入金額：' .$data["SUM(price)"]. '円</p>';
							echo '</div>';
						}
					}
					echo '<div class="flex_history">';
						echo '<img src="' .$data_2["photo"]. '" width="220" height="210">';
						echo '<div class="flexbox_history">';
							echo '<p id="text_history">' .$data_2["name"]. '</p>';
							echo '<p id="price_history">' .$data_2["number"]. ' 点（¥  '.$data_2["price"].'）</p>';
							echo '<p>購入日時　 ' .$data_2["date_2"]. '</p>';
						echo '</div>';
						echo '<div class="flexbox2_history">';
							echo'<form action="menu_check.php" method="post">';
								echo '<input type="submit" value="再度購入する" class="retry_history">';
								echo '<input type="hidden" name="id" value="' .$data_2["code"]. '">';
							echo '</form>';
							echo'<form action="menu.php" method="post">';
								echo '<input type="submit" value="関連商品を見る" class="retry2_history">';
								echo '<input type="hidden" name="search" value="' .$data_2["genre2"]. '">';
							echo '</form>';
						echo '</div>';
					echo '</div>';
					$_SESSION["total"] = $data_2["date"];
				}
				if (!empty($_SESSION["total"])) {
					$data = mysqli_fetch_assoc($result);
					echo '<div class="flex_link_history">';
						echo '<p>購入日時：' .$data["date"]. '<p>';
						echo '<p>合計購入金額：' .$data["SUM(price)"]. '円</p>';
					echo '</div>';
				}
			} catch (Exception $e) {
				echo 'ただいま障害により大変ご迷惑をおかけしております。';
				exit();
			}
		?>
	</body>
</html>