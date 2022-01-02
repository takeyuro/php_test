<?php
    require_once('db.php');

    function findRecommend() {
    
        // productテーブルからosusumeカラムが1に設定されている商品の情報を取得
        $sql = "select * from product where osusume = '1'";

        // DB処理
        $result = dbConnect($sql);

        return $result;
    }
?>