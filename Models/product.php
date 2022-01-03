<?php
    require_once('db.php');

    function findRecommend() {
    
        // productテーブルからosusumeカラムが1に設定されている商品の情報を取得
        $sql = "select * from product where osusume = '1'";

        // DB処理
        $result = dbConnect($sql);

        return $result;
    }

    function search($search, $value_low, $value_high) {

        // 検索欄に何も入力されていなかった場合
		if ($search === NULL && $value_low === NULL && $value_high === NULL) {

			// puroductテーブルから全ての商品のデータを取得する
			$sql = "select * from product";
			
		// 価格帯のみが入力されていた場合
		} else if ($search === NULL) {

			// puroductテーブルから該当する価格帯の範囲内全ての商品データを取得する
			$sql = "select * from product where price >='" .$value_low. "' and price <= '" .$value_high. "'";

		// テキスト欄のみが入力されていた場合
		} else if ($value_low === NULL && $value_high === NULL) {
			
			// puroductテーブルから該当するジャンルや名前の商品データを取得する
			// 部分一致機能を入れているため、1文字だけ入力してもそれに該当する商品が表示される。例えば、「た」と入力するだけで「てりたま」などが表示される。
			$sql = "select * from product where name='" .$search. "' or genre1='" .$search. "' or genre2='" .$search. "' or name like '%" .$search. "%'";

        // テキスト欄と価格帯の両方に入力があった場合
		} else {
			
			// 該当する商品名やジャンル且つ価格帯の範囲内である商品データを取得する
			$sql = "select * from product where name='" .$search. "' or genre1='" .$search. "' or genre2='" .$search. "' or name like '%" .$search. "%' and price >='" .$value_low. "' and price <= '" .$value_high. "'";
		}

        // DB処理
        $result = dbConnect($sql);

        return $result;
    }
?>