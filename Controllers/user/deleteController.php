<?php
	try {
        require_once('../../Models/user.php');

		$id = intval($_GET["id"]);

        //該当するユーザー情報を削除
        destroy($id);

        header ('Location:../../Views/user/deleteComplete.php');
        exit();
	} catch  (Exception $e) {
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
		exit();
	}
?>