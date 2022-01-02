<?php
    function insert($name, $email, $password, $area, $gender, $old, $memo) {

        // 送られてきたユーザー情報をuserinfoテーブルに登録
		$sql = "insert into userinfo (name,email,password,area,gender,old,memo)value
		('" .$name. "','" .$email. "','" .$password. "','" .$area. "',
		'" .$gender. "'," .$old. ",'" .$memo. "')";

        return $sql;
    }

    


    function passwordHash($password) {

        // パスワードをハッシュ化
        $password = password_hash($password,PASSWORD_DEFAULT);

        return $password;
    }
?>