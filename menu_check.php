<?php
	session_start();
	try {
		if(!empty($_POST["id"])) {
			$id = $_POST["id"];
		} else {
			$id = $_GET["id"];
		}
		$db = mysqli_connect("localhost","root","admin","user");
		$sql = "select * from product where id=" .$id;
		$result = mysqli_query($db, $sql);
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
		<div>
			<img src="http://localhost/test/images_test_6/mcd_00.png" width="100%" height="280">
		</div>
		<h1 class="title_toppage">バーガークイーン公式サイト 購入ページ</h1>
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
				while ($data = mysqli_fetch_assoc($result)) {
						echo '<div class="main_menu_check">';
							echo '<form action="menu_complete.php" method="post">';
								echo '<img src="' .$data["photo"]. '" width="370" height="350">';
								echo '<h2>' .$data["name"]. '</h2>';
								echo '<p>¥ ' .$data["price"]. '</p>';
								echo '<div class="option_menu_check">';
									echo '<label for="price">点数　</label>';
									echo '<select name="number">';
										for ($i=1; $i < 6; $i++) {
											echo '<option value="' .$i. '">' .$i. '点　￥ ' .$data["price"] * $i. ' </option>';
										}
									echo '</select>';
								echo '</div>';
								echo '<input type="hidden" name="photo" value="' .$data["photo"]. '">';
								echo '<input type="hidden" name="name" value="' .$data["name"]. '">';
								echo '<input type="hidden" name="price" value="' .$data["price"]. '">';
								echo '<input type="hidden" name="genre2" value="' .$data["genre2"]. '">';
								echo '<input type="hidden" name="id" value="' .$data["id"]. '">';
								echo '<input type="submit" value="購入する" class="submit_menu_check">';
								echo '<input type="button" onclick="history.back()" value="キャンセル" class="button_menu_check">';
							echo '</form>';
						echo '</div>';
				}
			} catch  (Exception $e) {
				echo 'ただいま障害により大変ご迷惑をおかけしております。';
				exit();
			}
		?>
	</body>
</html>