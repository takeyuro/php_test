<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			require_once('../../Models/total.php');
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

			// 購入日を格納する。
			$lastDate = NULL;
			while ($data = mysqli_fetch_assoc($result)) {
				if (!empty($lastDate)) {

					// 前回の購入日と今回の購入日が異なる場合、$lastDateの日付とその日の合計金額を表示
					if ($lastDate != $data["date"]) {
						$sumData = getTotal($id, $lastDate);
						$total = mysqli_fetch_assoc($sumData);
						echo '<div class="flex_link_history">
							<p>購入日時：' .$total["date"]. '<p>
							<p>合計購入金額：' .$total["SUM(price)"]. '円</p>
						</div>';
					}
				}
				echo '<div class="flex_history">
					<img src="' .$data["photo"]. '" width="220" height="210">
					<div class="flexbox_history">
						<p id="text_history">' .$data["name"]. '</p>
						<p id="price_history">' .$data["number"]. ' 点（¥  '.$data["price"].'）</p>
						<p>購入日時　 ' .$data["date_2"]. '</p>
					</div>
					<div class="flexbox2_history">
						<form action="../product/menuDetail.php?id=' .$id. '" method="post">
							<input type="submit" value="再度購入する" class="retry_history">
							<input type="hidden" name="productId" value="' .$data["code"]. '">
						</form>
						<form action="../product/menu.php?id=' .$id. '" method="post">
							<input type="submit" value="関連商品を見る" class="retry2_history">
							<input type="hidden" name="search" value="' .$data["genre2"]. '">
						</form>
					</div>
				</div>';

				// 日付を今回のものに入れ替える
				$lastDate = $data["date"];
			}
			// 最後は前回の購入日と比べずに購入日時と合計金額を表示
			if (!empty($lastDate)) {
				$sumData = getTotal($id, $lastDate);
				$total = mysqli_fetch_assoc($sumData);
				echo '<div class="flex_link_history">
					<p>購入日時：' .$total["date"]. '<p>
					<p>合計購入金額：' .$total["SUM(price)"]. '円</p>
				</div>';
			}
		?>
	</body>
</html>