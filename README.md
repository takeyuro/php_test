# php_test

## 本サイトを作成した理由
私が本サイトを作成したキッカケは憧れにあります。高校生の頃、私の親戚に当たる方がエンジニアとしてECサイトを作っているところを実際に見て、自分も同じように作ってみたいという憧れから本サイトを制作いたしました。

ECサイトのモデルとして、今回は私が好きなマクドナルドさんの商品を引用させていただきました。

<br>

## 使用言語・DB・OS
  - 使用言語：PHP 7.2.34
  - 開発環境：XAMPP 7.4.4
  - DB：MariaDB
  - OS：MacOS  
 
 <br>

## 機能一覧

- 新規会員登録
- ログイン機能
- 会員情報の更新・削除
- パスワードのハッシュ化
- 送信情報の保護
- メニューの検索
- 商品の購入
- 購入履歴

<br>

## 注力したポイント

- メニューの検索
  - 商品名での検索はもちろんのこと、価格帯を交えた検索や価格帯だけでの検索、朝マックやドリンクなどのキーワード検索
  や1文字だけでの検索も可能となっております。
  
- メニューの表示
  - 商品の情報は全てDB上に保存されており、メニューや購入履歴の商品情報はhtmlで直書きしているのではなく、while文を使って表示させています。

- 購入履歴
  - 購入した商品の金額、個数、日時などの表示に加えて、その日ごとの合計金額が自動で表示される仕組みを作りました。

- パスワードのハッシュ化
  - 新規登録時にパスワードをハッシュ化するシステムを入れることで、ユーザー用DBにハッシュ値が表示され、ユーザーにしかパスワードがわからない設定にしました。

<br>

## 環境構築の手順
 1. https://www.apachefriends.org/jp/download.html にて、XAMPPをApplicationフォルダにダウンロードする。バージョンは問いません。好きなバージョンをダウンロードしてください。

 <br>

 2. Applications/XAMPP/htdocs内に新規フォルダを作成する。

<br>

 3. README.mdとexport.sql以外のファイルを新しく作った新規フォルダ内に入れる。

 <br>

 4. DB(export.sql)の実行を https://codeforfun.jp/how-to-import-sql-with-xampp/ の通りに行う。

 <br>

 5. XAMPPファイル内にあるmanager-osx.appを起動する。

 <br>

 6. Manage Serversをタップし、MySQL DatabaseとApache Web Serverを起動する。

 <br>

 7. ブラウザで https://localhost/3で作ったファイル名/index.php を検索する。

## 参考にしたサイト
[マクドナルド公式サイト](https://www.mcdonalds.co.jp)
