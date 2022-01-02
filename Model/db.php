<?php

    function dbConnect($sql) {

        //データベースに接続
        $db = mysqli_connect("localhost","root","admin","user");

        // クエリの実行
        $result = mysqli_query($db, $sql);

        // DBとの接続解除
        mysqli_close($db);

        return $result;
    }
?>