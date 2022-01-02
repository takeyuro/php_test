<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../style_test.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include('../Controllers/mypageController.php');
			echo '<div class="flex_toppage">';
				echo '<div class="header_mypage">';
					echo '<p><a href="detail.php">ユーザー情報の変更・削除</a></p>';
				echo '</div>';
				echo '<div class="header_mypage2">';
					echo '<p><a href="index.php">ログアウト</a></p>';
				echo '</div>';
			echo '</div>';
			echo '<div>';
				echo '<img src="http://localhost/test/images_test_6/mcd_00.png" width="100%" height="280">';
			echo '</div>';
			echo '<h1 class="title_toppage">バーガークイーン公式サイト トップページ</h1>';
			echo '<div class="login_mypage">';
				echo '<p>' .$name. 'さん、ようこそ。</p>';
			echo '</div>';
			echo '<ul class="navi">';
				echo '<li><a href="mypage.php">トップページ</a></li>';
				echo '<li><a href="menu.php">メニュー</a></li>';
				echo '<li><a href="branch.php">購入履歴</a></li>';
			echo '</ul>';
			echo '<h2 class="osirase_toppage">特別なお知らせ</h2>';
			echo '<div class="osirase_link_toppage">';
				echo '<p><a href="osirase.html">新型コロナウイルス感染拡大防止の取り組みとお知らせ　＞</a></p>';
			echo '</div>';
			echo '<h3 class="osusume_toppage">おすすめメニュー</h3>';
			echo '<p class="osusume_sentence_toppage">季節に合ったおすすめのメニューをご紹介します</p>';
			
			// Controllers/mypageController.phpで取得した商品情報を表示
			while ($data = mysqli_fetch_assoc($result)) {
				echo '<form action="menu_check.php" method="post">';
					echo '<div class="flex_menu">';
						echo '<div class="flexbox_toppage">';
							echo '<div class="flex_toppage">';
								echo '<img src="' .$data["photo"]. '" width="230" height="200">';
								echo '<div class="menu_toppage">';
									echo '<div class="product_mypage">';
										echo '<h4>' .$data["name"]. '</h4>';
									echo '</div>';
									echo '<div class="yen_mypage">';
										echo '<p>¥ ' .$data["price"]. '</p>';
									echo '</div>';
									echo '<div class="link_mypage">';
										echo '<input type="hidden" name="id" value=' .$data["id"]. '>';
										echo '<input type="submit" value="詳細" class="submit_mypage">';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</form>';
			}
			echo '<div id="sintyaku_toppage">';
				echo '<h3>新着情報</h3>';
			echo '</div>';
			echo '<div class="joho_toppage">';
				echo '<p class="date_mypage">2021.11.07</p>';
				echo '<p class="joho_mypage">　日本バーガークイーン株式会社(本社：東京都新宿区、代表取締役社長兼CEO：日野 信雄)は、3年ぶりに登場する肉厚ビーフの新レギュラーバーガーとして、『サムライマック』と銘打った「炙り醤油風 ダブル肉厚ビーフ」と「炙り醬油風 ベーコントマト肉厚ビーフ」を、全国のマクドナルド店舗にて4月7日(水)より販売いたします。また、『サムライマック』と相性抜群の「コーク® 辛口ジンジャー／フロート」を4月7日(水)より期間限定で販売します。</p>';
			echo '</div>';
			echo '<div class="joho_toppage">';
				echo '<p class="date_mypage">2021.10.23</p>';
				echo '<p class="joho_mypage">　日本バーガークイーン株式会社は、バーガークイーンならではの“おいしさとバリュー”をお客様にお届けするため、本年も木村拓哉さんを起用し、「あ、みっっけ。」をテーマとしたキャンペーンやTVCMを展開しております。働く大人の日常生活の中で、マクドナルドという最高の寄り道場所を見つけ、おいしさ・お得さ・お手軽さを通してバーガークイーンのバリューを再発見する喜びの瞬間を発信するCMの新シリーズがついに完成いたしました。</p>';
			echo '</div>';
			echo '<div class="joho_toppage">';
				echo '<p class="date_mypage">2021.08.04</p>';
				echo '<p class="joho_mypage">　“McCafé by Barista”のケーキはカフェドリンクとの相性も抜群で、ロールケーキをはじめ、タルトやシフォンケーキなど、バラエティー豊かなケーキをご用意しております。2019年12月に登場した人気のオレオクッキーと“McCafé by Barista”のコラボケーキ「オレオ® クッキー ロールケーキ」に続き、今年の春は期間限定で第2弾となる「オレオ クッキー チーズケーキ」が初登場！さらにケーキのラインアップが充実しました。</p>';
			echo '</div>';
			echo '<div class="joho_toppage">';
				echo '<p class="date_mypage">2021.05.19</p>';
				echo '<p class="joho_mypage">　子どもたちに大人気のドラえもんが、今年もハッピーセットに登場いたします。今回のハッピーセット「ドラえもん」は、「映画ドラえもん のび太の宇宙小戦争 2021」をモチーフに、宇宙をテーマとしたわくわくするような仕掛けが楽しめるおもちゃ8種のラインアップです。3⽉20⽇(⼟)・21⽇(⽇)の2⽇間は、週末プレゼントとして、ハッピーセット「ドラえもん」を1セットご購⼊につき｢どこでもドアシール｣をプレゼントいたします。</p>';
			echo '</div>';
			echo '<div class="joho_toppage">';
				echo '<p class="date_mypage">2021.03.20</p>';
				echo '<p class="joho_mypage">　日本バーガークイーン株式会社は、遊ばなくなったハッピーセットのおもちゃを全国の店舗にて回収しリサイクルするおもちゃリサイクルプロジェクトの実施継続を決定し、おもちゃの回収を2021年3月19日(金)より開始します。なお、持続可能な社会の実現に、より一層貢献するため、今回からは子供達の長期休みに合わせた回収期間の設定を無くし、年間を通して、いつでも全国のバーガークイーン店舗でおもちゃをリサイクルできるようになりました。</p>';
			echo '</div>';
			echo '<div class="joho_toppage">';
				echo '<p class="date_mypage">2021.03.07</p>';
				echo '<p class="joho_mypage">　日本バーガークイーン株式会社は、ごはんバンズに福島県産米を100%使用した「ごはんてりやき」と「ごはんベーコンレタス」に加えて、初登場となる「ごはんフィッシュ 和風黒胡椒」の「ごはんバーガー」シリーズ3種を、17時からのディナー時間帯に販売する「夜マック」として3月10日(水)から全国のバーガークイーン店舗にて期間限定で販売いたします。夜ごはんの新しい選択肢として、多くのお客様にご好評いただいております。</p>';
			echo '</div>';
			echo '<div class="footer_toppage">';
				echo 'produced by M.C.W.';
			echo '</div>';
		?>
	</body>
</html>