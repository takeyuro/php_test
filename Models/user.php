<?php
    require_once('db.php');

    function loginCheck($email, $password) {

        // ユーザーIDの初期値を設定
        $id = 0;

        // userinfoテーブルから取得したemailに該当するユーザー情報を取得
        $sql = "select * from userinfo where email='" .$email. "'";

        // DB処理
        $result = dbConnect($sql);

        $loginFlug = false;

        // $resultに格納されているmysqli_query関数の結果をArrey型に変換し、While文でレコードを取得
        while ($data = mysqli_fetch_assoc($result)) {

            // ハッシュ化されているパスワードを元の値に戻し、入力されたパスワードと一致していればログイン処理を行う
            if (password_verify($password,$data["password"])) {
                $loginFlug = true;
                break;
            }
        }

        // 指定したemailとpasswordが一致していればユーザーIDを与える
        if ($loginFlug) {
            $id = $data["id"];
        }

        return $id;
    
    }

    function insert($name, $email, $password, $area, $gender, $old, $memo) {

        // 送られてきたユーザー情報をuserinfoテーブルに登録
		$sql = "insert into userinfo (name,email,password,area,gender,old,memo)value
		('" .$name. "','" .$email. "','" .$password. "','" .$area. "',
		'" .$gender. "'," .$old. ",'" .$memo. "')";

        $result = dbConnect($sql);
    }

    function edit($id) {

        // userinfoテーブルから該当するidのユーザー情報を取得
		$sql = "select * from userinfo where id=" .$id;

        $result = dbConnect($sql);

        // DB処理の結果をにArray型に変換
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    function update($id, $name, $email, $password, $area, $gender, $old, $memo) {

		// 送られてきたユーザー情報をuserinfoテーブルに更新
		$sql = "update userinfo set
		name='" .$name. "',email='" .$email. "', password='" .$password. "',
		area='" .$area. "',gender='" .$gender. "', old=" .$old. ",
		memo='" .$memo. "' where id=" .$id;
		
        //DB処理
		$result = dbConnect($sql);
    }

    function checkId ($id) {

        // ID がちゃんと渡ってきているかチェック
        if (!isset($id) || empty($id)) {
            die('idがありません');
        }
    }

    function findName($id) {

        // userinfoテーブルから該当するidのユーザー名を取得
        $sql = "select name from userinfo where id=".$id;

        $result = dbConnect($sql);

        // DB処理の結果をにArray型に変換
        $data = mysqli_fetch_assoc($result);

        return $data["name"];
    }

    function passwordHash($password) {

        // パスワードをハッシュ化
        $password = password_hash($password,PASSWORD_DEFAULT);

        return $password;
    }
?>