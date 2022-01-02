<?php
    require_once('db.php');

    function insert($name, $email, $password, $area, $gender, $old, $memo) {

        // $db = dbConnect();

        // 送られてきたユーザー情報をuserinfoテーブルに登録
		$sql = "insert into userinfo (name,email,password,area,gender,old,memo)value
		('" .$name. "','" .$email. "','" .$password. "','" .$area. "',
		'" .$gender. "'," .$old. ",'" .$memo. "')";


        $result = dbProcess($sql);

        // dbClose($db);

        var_dump($result);
    }

    
    function valueCheck() {

    }

    function passwordHash($password) {

        // パスワードをハッシュ化
        $password = password_hash($password,PASSWORD_DEFAULT);

        return $password;
    }
?>