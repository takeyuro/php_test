<?php
    try {
        require_once('../../Models/user.php');

        // idが正常に渡ってきているかチェック
        // checkId($_GET["id"]);

        $id = intval($_GET["id"]);

        // ユーザー名を取得
        $name = findName($id);
        
    } catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
    
?>