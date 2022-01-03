<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('../Controllers/nameController.php');
			include('../Controllers/mypageController.php');
			echo '<div class="flex_toppage">
				<div class="header_mypage">
					<p><a href="edit.php?id=' .$id. '">ユーザー情報の変更・削除</a></p>
				</div>
				<div class="header_mypage2">
					<p><a href="../index.php">ログアウト</a></p>
				</div>
			</div>
			<div>
				<img src="http://localhost/php_test/images_test_6/mcd_00.png" width="100%" height="280">
			</div>
			<h1 class="title_toppage">バーガークイーン公式サイト トップページ</h1>
			<div class="login_mypage">
				<p>' .$name. 'さん、ようこそ。</p>
			</div>
			<ul class="navi">
				<li><a href="mypage.php?id=' .$id. '">トップページ</a></li>
				<li><a href="menu.php?id=' .$id. '">メニュー</a></li>
				<li><a href="branch.php?id=' .$id. '">購入履歴</a></li>
			</ul>
			<h2 class="osirase_toppage">特別なお知らせ</h2>
			<div class="osirase_link_toppage">
				<p><a href="news.php?id=' .$id. '">新型コロナウイルス感染拡大防止の取り組みとお知らせ　＞</a></p>
			</div>
			<h3 class="osusume_toppage">おすすめメニュー</h3>
			<p class="osusume_sentence_toppage">季節に合ったおすすめのメニューをご紹介します</p>';
			
			// Controllers/mypageController.phpで取得した商品情報を表示
			while ($data = mysqli_fetch_assoc($result)) {
				echo '<form action="menuDetail.php?id=' .$id. '" method="post">';
					echo '<div class="flex_menu">
						<div class="flexbox_toppage">
							<div class="flex_toppage">
								<img src="' .$data["photo"]. '" width="230" height="200">
								<div class="menu_toppage">
									<div class="product_mypage">
										<h4>' .$data["name"]. '</h4>
									</div>
									<div class="yen_mypage">
										<p>¥ ' .$data["price"]. '</p>
									</div>
									<div class="link_mypage">
										<input type="hidden" name="productId" value=' .$data["id"]. '>
										<input type="submit" value="詳細" class="submit_mypage">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>';
			}
			echo '<div id="sintyaku_toppage">
				<h3>新着情報</h3>
			</div>
			<div class="joho_toppage">
				<p class="date_mypage">2021.11.07</p>
				<p class="joho_mypage">　日本バーガークイーン株式会社(本社：東京都新宿区、代表取締役社長兼CEO：日野 信雄)は、3年ぶりに登場する肉厚ビーフの新レギュラーバーガーとして、『サムライマック』と銘打った「炙り醤油風 ダブル肉厚ビーフ」と「炙り醬油風 ベーコントマト肉厚ビーフ」を、全国のマクドナルド店舗にて4月7日(水)より販売いたします。また、『サムライマック』と相性抜群の「コーク® 辛口ジンジャー／フロート」を4月7日(水)より期間限定で販売します。</p>
			</div>
			<div class="joho_toppage">
				<p class="date_mypage">2021.10.23</p>
				<p class="joho_mypage">　日本バーガークイーン株式会社は、バーガークイーンならではの“おいしさとバリュー”をお客様にお届けするため、本年も木村拓哉さんを起用し、「あ、みっっけ。」をテーマとしたキャンペーンやTVCMを展開しております。働く大人の日常生活の中で、マクドナルドという最高の寄り道場所を見つけ、おいしさ・お得さ・お手軽さを通してバーガークイーンのバリューを再発見する喜びの瞬間を発信するCMの新シリーズがついに完成いたしました。</p>
			</div>
			<div class="joho_toppage">
				<p class="date_mypage">2021.08.04</p>
				<p class="joho_mypage">　“McCafé by Barista”のケーキはカフェドリンクとの相性も抜群で、ロールケーキをはじめ、タルトやシフォンケーキなど、バラエティー豊かなケーキをご用意しております。2019年12月に登場した人気のオレオクッキーと“McCafé by Barista”のコラボケーキ「オレオ® クッキー ロールケーキ」に続き、今年の春は期間限定で第2弾となる「オレオ クッキー チーズケーキ」が初登場！さらにケーキのラインアップが充実しました。</p>
			</div>
			<div class="joho_toppage">
				<p class="date_mypage">2021.05.19</p>
				<p class="joho_mypage">　子どもたちに大人気のドラえもんが、今年もハッピーセットに登場いたします。今回のハッピーセット「ドラえもん」は、「映画ドラえもん のび太の宇宙小戦争 2021」をモチーフに、宇宙をテーマとしたわくわくするような仕掛けが楽しめるおもちゃ8種のラインアップです。3⽉20⽇(⼟)・21⽇(⽇)の2⽇間は、週末プレゼントとして、ハッピーセット「ドラえもん」を1セットご購⼊につき｢どこでもドアシール｣をプレゼントいたします。</p>
			</div>
			<div class="joho_toppage">
				<p class="date_mypage">2021.03.20</p>
				<p class="joho_mypage">　日本バーガークイーン株式会社は、遊ばなくなったハッピーセットのおもちゃを全国の店舗にて回収しリサイクルするおもちゃリサイクルプロジェクトの実施継続を決定し、おもちゃの回収を2021年3月19日(金)より開始します。なお、持続可能な社会の実現に、より一層貢献するため、今回からは子供達の長期休みに合わせた回収期間の設定を無くし、年間を通して、いつでも全国のバーガークイーン店舗でおもちゃをリサイクルできるようになりました。</p>
			</div>
			<div class="joho_toppage">
				<p class="date_mypage">2021.03.07</p>
				<p class="joho_mypage">　日本バーガークイーン株式会社は、ごはんバンズに福島県産米を100%使用した「ごはんてりやき」と「ごはんベーコンレタス」に加えて、初登場となる「ごはんフィッシュ 和風黒胡椒」の「ごはんバーガー」シリーズ3種を、17時からのディナー時間帯に販売する「夜マック」として3月10日(水)から全国のバーガークイーン店舗にて期間限定で販売いたします。夜ごはんの新しい選択肢として、多くのお客様にご好評いただいております。</p>
			</div>
			<div class="footer_toppage">
				<p>produced by M.C.W.<p>
			</div>';
		?>
	</body>
</html>