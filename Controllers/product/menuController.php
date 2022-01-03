<?php
	try {
        require_once('../../Models/product.php');

        $search = NULL;
        $value_low = NULL;
        $value_high = NULL;

		// 入力がなかった場合
		if (empty($_POST["search"]) && empty($_POST["value_low"]) && empty($_POST["value_high"])) {
			$result = show();
			
		// 価格帯のみが入力されていた場合
		} else if (empty($_POST["search"])) {
			$value_low = $_POST["value_low"];
			$value_high = $_POST["value_high"];

			// クエリの実行
			$result = search($search, $value_low, $value_high);

		// テキスト欄のみが入力されていた場合
		} else if (empty($_POST["value_low"]) && empty($_POST["value_high"])) {
			$search = $_POST["search"];

			$search = htmlspecialchars($search,ENT_QUOTES,'UTF-8');

			// クエリの実行
			$result = search($search, $value_low, $value_high);

		// テキスト欄と価格帯の両方に入力があった場合
		} else {
			$search = $_POST["search"];
			$value_low = $_POST["value_low"];
			$value_high = $_POST["value_high"];
		
			$search = htmlspecialchars($search,ENT_QUOTES,'UTF-8');

			// クエリの実行
			$result = search($search, $value_low, $value_high);
		}

	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>