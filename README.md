# php_test

本ECサイトは、自分が学んだことをアウトプットすることを目的として作られました。  
今回は、自分が好きなマクドナルドさんの商品を引用させていただきました。

# 使用言語・DB・OS
  * 使用言語：PHP 7.2.34
  * DB：XAMPP 7.4.4-2
  * OS：MacOS
  
# 機能一覧

* 新規会員登録
* ログイン
* 会員情報の更新・削除
* パスワードのハッシュ化
* 送信情報の保護
* メニューの検索
* 商品の購入
* 購入履歴

# 注力したポイント

* メニューの検索
  * 商品名での検索はもちろんのこと、価格帯を交えた検索や価格帯だけでの検索、朝マックやドリンクなどのキーワード検索
  や1文字だけでの検索も可能となっております。
  
* メニューの表示
  * 商品の情報は全てDB上に保存されており、メニューや購入履歴の商品情報はhtmlで直書きしているのではなく、while文を使って表示させています。

* 購入履歴
  * 購入した商品の金額、個数、日時などの表示に加えて、その日ごとの合計金額が自動で表示される仕組みを作りました。

* パスワードのハッシュ化
  * 新規登録時にパスワードをハッシュ化するシステムを入れることで、ユーザー用DBにハッシュ値が表示され、ユーザーにしかパスワードがわからない設定にしました。

# 環境構築の手順
 1. https://www.php.net/downloads.php にて、PHP 7.2.34をダウンロードする。
 2. https://www.apachefriends.org/jp/download.html にて、PHP 7.2.34用のXAMPPをApplicationフォルダにダウンロードする。
 3. Applications/XAMPP/xamppfiles/htdocs内に新規フォルダを作成する。
 4. README.mdとexport.sql以外のファイルを新しく作った新規フォルダ内に入れる。
 5. DB(export.sql)の実行を https://codeforfun.jp/how-to-import-sql-with-xampp/ の通りに行う。
 6. XAMPPファイル内にあるmanager-osx.appを起動する。
 7. Manage Serversをタップし、MySQL DatabaseとApache Web Serverを起動する。
 8. ブラウザで https://localhost/③で作ったファイル名/index.php を検索する。

# 引用文献
[マクドナルド公式サイト](https://www.mcdonalds.co.jp)
