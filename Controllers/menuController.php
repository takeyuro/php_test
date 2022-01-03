<?php
	try {
        require_once('../Models/product.php');

        $search = null;
        $value_low = null;
        $value_high = null;

		// テキスト欄と価格帯の両方に入力があった場合
		if (!empty($_POST["search"]) && !empty($_POST["value_low"]) && !empty($_POST["value_high"])) {
			$search = $_POST["search"];
			$value_low = $_POST["value_low"];
			$value_high = $_POST["value_high"];
		
			$search = htmlspecialchars($search,ENT_QUOTES,'UTF-8');
			
		// 価格帯のみが入力されていた場合
		} else if (empty($_POST["search"])) {
			$value_low = $_POST["value_low"];
			$value_high = $_POST["value_high"];

		// テキスト欄のみが入力されていた場合
		} else if (empty($_POST["value_low"]) && empty($_POST["value_high"])) {
			$search = $_POST["search"];

			$search = htmlspecialchars($search,ENT_QUOTES,'UTF-8');
		}

		// クエリの実行
		$result = search($search, $value_low, $value_high);

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>