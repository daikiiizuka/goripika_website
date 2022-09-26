<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: contact.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'housecleaning@goripika.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
    名前： {$post['name']}
    フリガナ： {$post['furigana']}
    住所： {$post['address']}
    メールアドレス： {$post['email']}
    第1希望日：{$post['date1']}
    第2希望日：{$post['date2']}
    電話番号： {$post['tel']}
    ご質問など：{$post['contact']}
    お問合せ内容（キッチン）： {$post['check1']}
    お問合せ内容： {$post['check2']}
    お問合せ内容： {$post['check3']}
    お問合せ内容： {$post['check4']}
    お問合せ内容： {$post['check5']}
    お問合せ内容： {$post['check6']}
    お問合せ内容： {$post['check7']}
    お問合せ内容： {$post['check8']}
    お問合せ内容（換気扇）： {$post['check9']}
    お問合せ内容（浴室）： {$post['check10']}
    お問合せ内容： {$post['check11']}
    お問合せ内容： {$post['check12']}
    お問合せ内容： {$post['check13']}
    お問合せ内容： {$post['check14']}
    お問合せ内容（洗面所）： {$post['check15']}
    お問合せ内容： {$post['check16']}
    お問合せ内容（トイレ）： {$post['check17']}
    お問合せ内容： {$post['check18']}
    お問合せ内容（家庭用エアコン）： {$post['check19']}
    お問合せ内容： {$post['check20']}
    お問合せ内容： {$post['check21']}
    お問合せ内容： {$post['check22']}
    お問合せ内容（埋込型エアコン）： {$post['check23']}
    お問合せ内容（業務用エアコン）： {$post['check24']}
    お問合せ内容： {$post['check25']}
    お問合せ内容（マンション引越前後）： {$post['check26']}
    お問合せ内容： {$post['check27']}
    お問合せ内容： {$post['check28']}
    お問合せ内容： {$post['check29']}
    お問合せ内容： {$post['check30']}
    お問合せ内容： {$post['check31']}
    お問合せ内容： {$post['check32']}
    お問合せ内容： {$post['check33']}
    お問合せ内容（一戸建て引越前後）： {$post['check34']}
    お問合せ内容： {$post['check35']}
    お問合せ内容： {$post['check36']}
    お問合せ内容： {$post['check37']}
    お問合せ内容： {$post['check38']}
    お問合せ内容： {$post['check39']}
    お問合せ内容： {$post['check40']}
    お問合せ内容： {$post['check41']}
    お問合せ内容： {$post['check42']}
    お問合せ内容（引越前後　オプション）： {$post['check43']}
    お問合せ内容： {$post['check44']}
    お問合せ内容： {$post['check45']}
    お問合せ内容： {$post['check46']}
    お問合せ内容： {$post['check47']}
    お問合せ内容： {$post['check48']}
    お問合せ内容： {$post['check49']}
EOT;
    // var_dump($body);
    // exit();
    mb_send_mail($to, $subject, $body, "From: {$from}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}

  $checks = $_POST['check'];


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
                                <?php echo htmlspecialchars($post['check1']); ?>
                                <?php echo htmlspecialchars($post['check2']); ?>
                                <?php echo htmlspecialchars($post['check3']); ?>
                                <?php echo htmlspecialchars($post['check4']); ?>
                                <?php echo htmlspecialchars($post['check5']); ?>
                                <?php echo htmlspecialchars($post['check6']); ?>
                                <?php echo htmlspecialchars($post['check7']); ?>
                                <?php echo htmlspecialchars($post['check8']); ?>

                            </div>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（換気扇）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check9']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（浴室）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check10']); ?>
                                <?php echo htmlspecialchars($post['check11']); ?>
                                <?php echo htmlspecialchars($post['check12']); ?>
                                <?php echo htmlspecialchars($post['check13']); ?>
                                <?php echo htmlspecialchars($post['check14']); ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（洗面所）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check15']); ?>
                                <?php echo htmlspecialchars($post['check16']); ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（トイレ）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check17']); ?>
                                <?php echo htmlspecialchars($post['check18']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（家庭用エアコン）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check19']); ?>
                                <?php echo htmlspecialchars($post['check20']); ?>
                                <?php echo htmlspecialchars($post['check21']); ?>
                                <?php echo htmlspecialchars($post['check22']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（埋込型エアコン）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check23']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容（業務用エアコン）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check24']); ?>
                                <?php echo htmlspecialchars($post['check25']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容<br>（マンション引越前後）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check26']); ?>
                                <?php echo htmlspecialchars($post['check27']); ?>
                                <?php echo htmlspecialchars($post['check28']); ?>
                                <?php echo htmlspecialchars($post['check29']); ?>
                                <?php echo htmlspecialchars($post['check30']); ?>
                                <?php echo htmlspecialchars($post['check31']); ?>
                                <?php echo htmlspecialchars($post['check32']); ?>
                                <?php echo htmlspecialchars($post['check33']); ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>内容<br>（一戸建て引越前後）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check34']); ?>
                                <?php echo htmlspecialchars($post['check35']); ?>
                                <?php echo htmlspecialchars($post['check36']); ?>
                                <?php echo htmlspecialchars($post['check37']); ?>
                                <?php echo htmlspecialchars($post['check38']); ?>
                                <?php echo htmlspecialchars($post['check39']); ?>
                                <?php echo htmlspecialchars($post['check40']); ?>
                                <?php echo htmlspecialchars($post['check41']); ?>
                                <?php echo htmlspecialchars($post['check42']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>内容<br>（引越前後　オプション）</em></p>
                            <div class="box_det">
                                <?php echo htmlspecialchars($post['check43']); ?>
                                <?php echo htmlspecialchars($post['check44']); ?>
                                <?php echo htmlspecialchars($post['check45']); ?>
                                <?php echo htmlspecialchars($post['check46']); ?>
                                <?php echo htmlspecialchars($post['check47']); ?>
                                <?php echo htmlspecialchars($post['check48']); ?>
                                <?php echo htmlspecialchars($post['check49']); ?>

                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>ご希望の日程(第一希望)</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['date1']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>ご希望の日程(第二希望)</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['date2']); ?>
                            </div>
                        </li>


                        <li>
                            <p class="title"><span>必須</span><em>ご質問や詳細など</em></p>
                            <div class="box_det"><?php echo nl2br(htmlspecialchars($post['contact'])); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span>必須</span><em>お名前</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['name']); ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span class="none">不要</span><em>フリガナ</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['furigana']); ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span>必須</span><em>ご住所</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['address']); ?>
                            </div>
                        </li>

                        <li>
                            <p class="title"><span class="none">不要</span><em>電話番号</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['tel']); ?>
                            </div>
                        </li>
                        <li>
                            <p class="title"><span>必須</span><em>メールアドレス</em></p>
                            <div class="box_det"><?php echo htmlspecialchars($post['email']); ?>
                            </div>
                        </li>
                    </ul>

                    <div class="personal-information">
                        <p class="personal-title">個人情報の取扱いについて</p>
                        <p class="personal-bottom">ゴリピカはご登録いただきました個人情報は個人情報保護法に定める例外事項を除き、<br>
                            ご本人の承諾なく第三者に提供することはございません。<br>
                            同意いただける方は「送信」のボタンを押してください。</p>
                    </div>

                    <div class="confirm-btn">
                        <div class="button"></div>
                        <a href="contact.php">戻る</a>
                        <button type="submit">送信</button>
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