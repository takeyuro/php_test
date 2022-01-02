<?php


    function dbConnect() {

        //データベースに接続
        $db = mysqli_connect("localhost","root","admin","user");

        return $db;
    }

    function dbQuery($db, $sql) {

        // クエリの実行
        $result = mysqli_query($db, $sql);

        return $result;
    }

    function dbClose($db) {

        // DBとの接続解除
        mysqli_close($db);

    }

    function dbProcess($spl) {

        //データベースに接続
        $db = mysqli_connect("localhost","root","admin","user");

        // クエリの実行
        $result = mysqli_query($db, $sql);

        // DBとの接続解除
        mysqli_close($db);

        return $result;
    }
?>