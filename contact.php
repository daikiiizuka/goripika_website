<?php
session_start();
$error = []; /*←初期化*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['address'] === '') {
        $error['address'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['contact'] === '') {
        $error['contact'] = 'blank';
    }
 
    if (count($error) === 0) {
        // エラーがないので確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>
<!doctype html>
<html>
<!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="ja">
    <!--googleアナリティクストラッキングコードここから -->
    <!--googleアナリティクストラッキングコードここまで -->
    <!-- InstanceBeginEditable name="head" -->
    <title>ハウスクリーニング、エアコンクリーニングはハウスクリーニング　ゴリピカ｜千葉県松戸市、柏市、市川市、鎌ヶ谷市、東京都葛飾区</title>
    <meta name="description"
        content="ハウスクリーニングは、ハウスクリーニング　ゴリピカへ。ハウスクリーニング士の資格を持った身元の確かなプロのスタッフがお掃除いたします。千葉県松戸市、柏市、市川市、鎌ヶ谷市、東京都葛飾区を中心にお伺いします。">
    <meta name="keywords" content="ハウスクリーニング,掃除,エアコンクリーニング,松戸市,柏市,市川市,鎌ヶ谷市,葛飾区,千葉県,東京都">
    <!--カノニカル設定ここから -->
    <link rel="canonical" href="https://www.goripika.com/" />
    <!--カノニカル設定ここまで -->
    <!-- InstanceEndEditable -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <!-- 各ページ共通CSS -->
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <!-- 479px以下・スマホ用 -->
    <link href="css/for_sp.css" rel="stylesheet" type="text/css" media="only screen and (max-width:480px)">
    <!-- 480px以上・タブレット縦用 -->
    <link href="css/for_tablet.css" rel="stylesheet" type="text/css"
        media="only screen and (min-width:481px) and (max-width:768px)">
    <!-- 768px以上・タブレット横～PC用、プリント兼用 -->
    <link href="css/for_pc.css" rel="stylesheet" type="text/css" media="print, screen and (min-width:769px)">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/pict/favicon.ico" type="image/x-icon">

    <!-- jqueryのscript -->
    <script src="jqery/jquery-2.0.3.js"></script>
    <!-- jqueryのscriptここまで -->
    <!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* この 1 ピクセルの負のマージンはこのレイアウトのどのカラムにも配置でき、同じ補正効果を持ちます。 */
ul.nav a { zoom: 1; }  /* zoom プロパティにより、IE の hasLayout をトリガーします。これは、リンク間の余分なホワイトスペースを修正するのに必要です。 */
</style>
<![endif]-->
    <!-- InstanceBeginEditable name="head_ogp" -->
    <!--OGP設定 -->
    <meta property="og:title" content="ハウスクリーニング、エアコンクリーニングはハウスクリーニング　ゴリピカ｜千葉県松戸市、柏市、市川市、鎌ヶ谷市、東京都葛飾区">
    <meta property="og:type" content="article">
    <meta property="og:description"
        content="ハウスクリーニングは、ハウスクリーニング　ゴリピカへ。ハウスクリーニング士の資格を持った身元の確かなプロのスタッフがお掃除いたします。千葉県松戸市、柏市、市川市、鎌ヶ谷市、東京都葛飾区を中心にお伺いします。">
    <meta property="og:url" content="https://www.goripika.com/">
    <meta property="og:site_name" content="千葉県松戸市のハウスクリーニング、エアコンクリーニング専門店・ハウスクリーニング　ゴリピカ">
    <meta property="og:email" content="housecleaning.goripika@gmail.com">
    <meta property="og:locale" content="ja_JP" />
    <!-- InstanceEndEditable -->
    <!--menuトグルボタンscriptここから -->
    <script type="text/javascript">
    $(function() {
        $("#toggle").click(function() {
            $("#menu").slideToggle();
            return false;
        });
        $(window).resize(function() {
            var win = $(window).width();
            var p = 480;
            if (win > p) {
                $("#menu").show();
            } else {
                $("#menu").hide();
            }
        });
    });
    </script>
    <!--menuトグルボタンscriptここまで -->
</head>



<body>
    <main>

        <section id="contact-form-area">
            <div class="section-title">
                <h2> お問合わせフォーム</h2>
                <h3>千葉県松戸市のハウスクリーニング　ゴリピカのお問い合わせフォームです。価格は全て税込となっております。</h3>
            </div>

            <div class="box_con06">
                <form action="" method="POST" novalidate>
                    <ul class="formTable">
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（キッチン）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check1" value="キッチンセット　25,000 円" autofocus>
                                        キッチンセット　25,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check2" value="サニタリーセット　29,800 円" autofocus>
                                        サニタリーセット　29,800 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check3" value="水周り4点セット　39,800 円" autofocus>
                                        水周り4点セット　39,800 円
                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check4" value="水周り5点セット　45,000 円" autofocus>
                                        水周り5点セット　45,000 円
                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check5" value="［追加］トイレ・洗面　5,000 円/1箇所" autofocus>
                                        ［追加］トイレ・洗面　5,000 円/1箇所
                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check6" value="I型キッチン　14,800 円" autofocus>
                                        I型キッチン　14,800 円
                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check7" value="[オプション]シンク鏡面仕上げ　10,000 円" autofocus>
                                        [オプション]シンク鏡面仕上げ　10,000 円

                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check8" value="[オプション]イオンコーティング　3,000 円" autofocus>
                                        [オプション]イオンコーティング　3,000 円
                                    </label>
                                </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（換気扇）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check9" value="レンジフード（換気扇）クリーニング　14,800 円"
                                            autofocus>
                                        レンジフード（換気扇）クリーニング　14,800 円
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（浴室）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check10" value="浴室・バスルームクリーニング　15,800 円" autofocus>
                                        浴室・バスルームクリーニング　15,800 円

                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check11" value="[オプション]エプロンカバー内高圧洗浄　4,000 円"
                                            autofocus>
                                        [オプション]エプロンカバー内高圧洗浄　4,000 円
                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check12" value="[オプション]防カビコーティング　3,000 円"
                                            autofocus>
                                        [オプション]防カビコーティング　3,000 円

                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check13" value="[オプション]多機能換気扇洗浄　4,000 円" autofocus>
                                        [オプション]多機能換気扇洗浄　4,000 円

                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check14" value="トイレ付3点ユニット　+ 5,000 円" autofocus>
                                        トイレ付3点ユニット　+ 5,000 円

                                    </label>

                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（洗面所）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check15" value="洗面所のクリーニング　9,000 円" autofocus>
                                        洗面所のクリーニング　9,000 円

                                    </label>

                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check16" value="[オプション]イオンコーティング　3,000 円"
                                            autofocus>
                                        [オプション]イオンコーティング　3,000 円
                                    </label>

                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（トイレ）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check17" value="トイレ・便所クリーニング　9,000 円" autofocus>
                                        トイレ・便所クリーニング　9,000 円

                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check18" value=" [オプション]イオンコーティング　3,000 円"
                                            autofocus>
                                        [オプション]イオンコーティング　3,000 円
                                    </label>

                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（家庭用エアコン）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check19" value="壁掛け型 エアコンクリーニング　9,000 円/1台"
                                            autofocus>
                                        壁掛け型 エアコンクリーニング　9,900 円/1台
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check20" value="[オプション]お掃除機能付きタイプエアコン　+5,000 円/1台"
                                            autofocus>
                                        [オプション]お掃除機能付きタイプエアコン　+5,000 円/1台
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check21" value="[オプション]エアコンの室外機　+4,000 円/1台"
                                            autofocus>
                                        [オプション]エアコンの室外機　+4,000 円/1台
                                    </label>
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check22" value="[オプション]防カビコーティング　+3,000 円/1台"
                                            autofocus>
                                        [オプション]防カビコーティング　+3,000 円/1台
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（埋込型エアコン）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check23" value="家庭用1方向・2方向タイプ　25,000 円/1台"
                                            autofocus>
                                        家庭用1方向・2方向タイプ　25,000 円/1台
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（業務用エアコン）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check24" value="天井埋込カセット4方向タイプ　25,000 円/1台"
                                            autofocus>
                                        天井埋込カセット4方向タイプ　25,000 円/1台
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check25" value="天井吊り型エアコン　35,000 円/1台" autofocus>
                                        天井吊り型エアコン　35,000 円/1台
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容<br>（マンション引越前後）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check26" value="ワンルーム（20m<sup>2</sup>以内）　35,000 円"
                                            autofocus>
                                        ワンルーム（20m<sup>2</sup>以内）　35,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check27" value="1DK～1K（30m<sup>2</sup>以内）　45,000 円"
                                            autofocus>
                                        1DK～1K（30m<sup>2</sup>以内）　45,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check28"
                                            value="1LDK～2DK（45m<sup>2</sup>以内）　57,000 円" autofocus>
                                        1LDK～2DK（45m<sup>2</sup>以内）　57,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check29"
                                            value="2LDK～3DK（65m<sup>2</sup>以内）　85,000 円" autofocus>
                                        2LDK～3DK（65m<sup>2</sup>以内）　85,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check30"
                                            value="3LDK～4DK（80m<sup>2</sup>以内）　100,000 円" autofocus>
                                        3LDK～4DK（80m<sup>2</sup>以内）　100,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check31"
                                            value="4LDK～5DK（100m<sup>2</sup>以内）　115,000 円" autofocus>
                                        4LDK～5DK（100m<sup>2</sup>以内）　115,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check32"
                                            value="4LDK〜5LDK（115m<sup>2</sup>以内）　130,000 円" autofocus>
                                        4LDK〜5LDK（115m<sup>2</sup>以内）　130,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check33" value="5LDK～6DK以上　別途お見積もりいたします。"
                                            autofocus>
                                        5LDK～6DK以上　別途お見積もりいたします。
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容<br>（一戸建て引越前後）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check34" value="ワンルーム（20m<sup>2</sup>以内）　35,000 円"
                                            autofocus>
                                        ワンルーム（20m<sup>2</sup>以内）　35,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check35" value="1DK～1K（30m<sup>2</sup>以内）　55,000 円"
                                            autofocus>
                                        1DK～1K（30m<sup>2</sup>以内）　55,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check36"
                                            value="1LDK～2DK（45m<sup>2</sup>以内）　65,000 円" autofocus>
                                        1LDK～2DK（45m<sup>2</sup>以内）　65,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check37"
                                            value="2LDK～3DK（65m<sup>2</sup>以内）　95,000 円" autofocus>
                                        2LDK～3DK（65m<sup>2</sup>以内）　95,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check38"
                                            value="3LDK～4DK（80m<sup>2</sup>以内）　115,000 円" autofocus>
                                        3LDK～4DK（80m<sup>2</sup>以内）　115,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check39"
                                            value="4LDK～5DK（100m<sup>2</sup>以内）　135,000 円" autofocus>
                                        4LDK～5DK（100m<sup>2</sup>以内）　135,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check40"
                                            value="4LDK〜5LDK（115m<sup>2</sup>以内）　155,000 円" autofocus>
                                        4LDK〜5LDK（115m<sup>2</sup>以内）　155,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check41"
                                            value="4LDK〜5LDK（135m<sup>2</sup>以内）　175,000 円" autofocus>
                                        4LDK〜5LDK（135m<sup>2</sup>以内）　175,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check42" value="5LDK～6DK以上　別途お見積もりいたします。"
                                            autofocus>
                                        5LDK～6DK以上　別途お見積もりいたします。
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容<br>（引越前後　オプション）</em></p>
                            <div class="box_det">
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check43" value="エアコン内部高圧洗浄　10,000 円/1台" autofocus>
                                        エアコン内部高圧洗浄　10,000 円/1台
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check44" value="浴室エプロンカバー内高圧洗浄　4,000 円" autofocus>
                                        浴室エプロンカバー内高圧洗浄　4,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check45" value="シンク鏡面仕上げ　10,000 円" autofocus>
                                        シンク鏡面仕上げ　10,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check46" value="防カビコーティング　3,000 円" autofocus>
                                        防カビコーティング　3,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check47" value="多機能換気扇洗浄（浴室）　4,000 円" autofocus>
                                        多機能換気扇洗浄（浴室）　4,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check48" value="イオンコーティング(浴室、洗面、トイレ、シンク)　各3,000 円"
                                            autofocus>
                                        イオンコーティング(浴室、洗面、トイレ、シンク)　各3,000 円
                                    </label>
                                </div>
                                <div class="box_br">
                                    <label>
                                        <input type="checkbox" name="check49" value="床剥離洗浄　1,000 円/m" autofocus>
                                        床剥離洗浄　1,000 円/m<sup>2</sup>
                                    </label>
                                </div>

                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>ご希望の日程(第一希望)</em></p>
                            <div class="box_det"><input size="20" type="date" class="wide" name="date1"
                                    autocomplete="name" placeholder="第一希望" value=""
                                    <?php echo htmlspecialchars($post['date1']); ?> required autofocus>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>ご希望の日程(第二希望)</em></p>
                            <div class="box_det"><input size="20" type="date" class="wide" name="date2"
                                    autocomplete="name" placeholder="第二希望" value=""
                                    <?php echo htmlspecialchars($post['date2']); ?> required autofocus>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span>必須</span><em>ご質問や詳細など</em></p>
                            <div class="box_det"><textarea name="contact" cols="50" rows="5"
                                    placeholder="ご質問内容やエアコンの台数などをご記入ください"
                                    required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                                <?php if ($error['contact'] === 'blank'): ?>
                                <p class="error_msg">※ご質問内容やエアコンの台数などをご記入ください</p>
                                <?php endif; ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span>必須</span><em>お名前</em></p>
                            <div class="box_det"><input size="20" type="text" class="wide" name="name"
                                    autocomplete="name" placeholder="鈴木一朗" value=""
                                    <?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                                <?php if ($error['name'] === 'blank'): ?>
                                <p class="error_msg">※お名前をご記入下さい</p>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>フリガナ</em></p>
                            <div class="box_det"><input size="20" type="text" class="wide" name="furigana"
                                    autocomplete="name" placeholder="スズキイチロウ"
                                    value="<?php echo htmlspecialchars($post['furigana']); ?>" autofocus>
                            </div>
                        </li>
                        <li>
                            <p class=" title"><span>必須</span><em>ご住所</em></p>
                            <div class="box_det"><input size="20" type="text" class="wide" name="address"
                                    placeholder="〒271-0075　千葉県松戸市胡録台247-1"
                                    value="<?php echo htmlspecialchars($post['address']); ?>" required autofocus>
                                <?php if ($error['address'] === 'blank'): ?>
                                <p class="error_msg">※ご住所をご記入下さい</p>
                                <?php endif; ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>電話番号</em></p>
                            <div class="box_det"><input size="30" type="tel" class="wide" name="tel" autocomplete="tel"
                                    placeholder="047-770-0901" value="<?php echo htmlspecialchars($post['tel']); ?>"
                                    autofocus></div>
                        </li>
                        <li>
                            <p class="title"><span>必須</span><em>メールアドレス</em></p>
                            <div class="box_det"><input size="30" type="email" class="wide" name="email"
                                    autocomplete="email" placeholder="housecleaning.goripika@gmail.com"
                                    value="<?php echo htmlspecialchars($post['email']); ?>" required>
                                <?php if ($error['email'] === 'blank'): ?>
                                <p class="error_msg">※メールアドレスをご記入下さい</p>
                                <?php endif; ?>
                                <?php if ($error['email'] === 'email'): ?>
                                <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>

                    <div class="personal-information">
                        <p class="personal-title">個人情報の取扱いについて</p>
                        <p class="personal-bottom">ゴリピカはご登録いただきました個人情報は個人情報保護法に定める例外事項を除き、<br>
                            ご本人の承諾なく第三者に提供することはございません。<br>
                            同意いただける方は「同意して確認画面へ」のボタンを押してください。</p>
                    </div>

                    <div class="contact-btn">
                        <button type="submit">同意して確認画面へ</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    </script>
    </section>
    </article>
    </div>
    <!-- end .content -->

    <!-- end .footer -->
    </div>
    <!-- end .container -->
</body>
<!-- InstanceEnd -->

</html>