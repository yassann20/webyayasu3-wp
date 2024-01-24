<?php
session_start(); // セッションを開始


mb_language("japanese");
mb_internal_encoding("UTF-8");

$headers = "from: kaiseif4e@gmail.com";
$from = "kaiseif4e@gmail.com";
$to = $_SESSION['contact-date']['email'];
$title = "お問い合わせ内容の確認";
$message = "※このメールはシステムからの自動返信です\r\n";
$message .= $_SESSION['contact-date']['name'] . " 様\r\n";
$message .= "お世話になっております。この度はWEBYAYASUへのお問い合わせありがとうございました。\r\n";
$message .= "以下の内容でお問い合わせを受け付けいたしました。\r\n";
$message .= "後ほど担当者よりご連絡いたしますので\r\n今しばらくお待ちくださいませ。\r\n";
$message .= "------------------------------※お問い合わせ内容※-----------------------------\r\n\r\n";
$message .= "お名前: " . $_SESSION['contact-date']['name'] . "\r\n";
$message .= "お名前(かな): " . $_SESSION['contact-date']['kana'] . "\r\n";
$message .= "メールアドレス: " . $_SESSION['contact-date']['email'] . "\r\n";
$message .= "詳細な内容: " . $_SESSION['contact-date']['text'] . "\r\n\r\n";
/*ここからはファイルを添付するための処理*/
/*ここまで*/
$message .= "----------------------------------------------------------------------------------------\r\n\r\n";
$message .= "送り主:TURAKAKUSI.WEB\r\n";
$message .= "担当: 安崎 海星\r\n";
$message .= "メールアドレス:" . $from;
/*--------------------------------------------------------------------------------管理者向けのメールを送信----------------------------------------------------------------------------------------*/
$masterheaders = "from: お客様";
$masterfrom = $_SESSION['contact-date']['email'];
$masterto = $from;
$mastertitle = "お客様よりお問い合わせをいただきました。2営業日以内に返信してください。\r\n";
$mastermessage = "※このメールはシステムからの自動返信です\r\n";
$mastermessage .= "------------------------------※お問い合わせ内容※-----------------------------\r\n\r\n";
$mastermessage .= "お名前: " . $_SESSION['contact-date']['name'] . "\r\n";
$mastermessage .= "お名前(かな): " . $_SESSION['contact-date']['kana'] . "\r\n";
$mastermessage .= "メールアドレス: " . $_SESSION['contact-date']['email'] . "\r\n";
$mastermessage .= "詳細な内容: " . $_SESSION['contact-date']['text'] . "\r\n";
$mastermessage .= "IPアドレス: " . $_SESSION['contact-date']['ip'] . "\r\n\r\n";
/*ここからはファイルを添付するための処理*/
/*ここまで*/
$mastermessage .= "----------------------------------------------------------------------------------------\r\n\r\n";

?>

<!-- ヘッダー読み込み　-->
<?php get_header(); ?>

<main>
    <div id="top">
        <!--お問い合わせコンテンツ-->
        <div id="contact-in" class="position">
            <div class="contact-back">
                <?php if (mb_send_mail($to, $title, $message, $headers) && mb_send_mail($masterto, $mastertitle, $mastermessage, $masterheaders)) : ?>
                    <form action="">
                        <h2 id="Semd-title">送信完了</h2>
                        <p id="Semdtext">お問い合わせの送信が完了いたしました。２営業日以内に担当よりご返信いたしますので、今しばらくお待ちください。
                        </p>
                        <button onclick="location.href='<?php echo home_url(); ?>'" name="top">トップ</button>
                        <p id="Contact-alt">※ いたずら防止のためIPアドレスの保存をしております、ご容赦ください</p>
                    </form>
                <?php else : ?>
                    <form action="">
                        <h2 id="Semd-title">送信失敗</h2>
                        <p id="Semdtext">お問い合わせの送信に失敗しました。お手数ですが再度初めからやり直してください。
                        </p>
                        <button onclick="location.href='<?php echo home_url(); ?>'" name="top">トップ</button>
                        <p id="Contact-alt">※ いたずら防止のためIPアドレスの保存をしております、ご容赦ください</p>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>