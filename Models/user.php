<?php
    require_once('db.php');

    function loginCheck($email, $password) {

            // ユーザーIDの初期値を設定
            $id = 0;

            // 取得したemailに該当するユーザー情報をテーブルから取得する関数を呼び出す
            $sql = "select * from userinfo where email='" .$email. "'";
    
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

    function idCheck ($id) {
        // ID がちゃんと渡ってきているかチェック
        if (!isset($id) || empty($id)) {
            die('idがありません');
        }
    }   

    function passwordHash($password) {

        // パスワードをハッシュ化
        $password = password_hash($password,PASSWORD_DEFAULT);

        return $password;
    }
?>