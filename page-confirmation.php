<?php
session_start(); // セッションを開始
?>
<!-- ヘッダー読み込み　-->
<?php get_header(); ?>

<?php
$_SESSION['contact-date'] = array(
    'name' => isset($_POST['nam']) ? sanitize_text_field($_POST['nam']) : '',
    'kana' => isset($_POST['kana']) ? sanitize_text_field($_POST['kana']) : '',
    'email' => isset($_POST['email']) ? sanitize_email($_POST['email']) : '',
    'subject' => isset($_POST['subject']) ? sanitize_text_field($_POST['subject']) : '',
    'text' => isset($_POST['text']) ? sanitize_text_field($_POST['text']) : '',
    'ip' => $_SERVER['REMOTE_ADDR'],
);

?>


<main>
    <div id="top">
        <!--最初の見出し-->
        <?php get_template_part('template-parts/content01'); ?>
        <!--お問い合わせコンテンツ-->
        <?php if ($_SESSION['contact-date']['name'] == '' || $_SESSION['contact-date']['kana'] == '' || $_SESSION['contact-date']['email'] == '' || $_SESSION['contact-date']['text'] == '' || $_SESSION['ip']) : ?>
            <div id="contact-in" class="position">
                <div class="contact-back">
                    <div class="rhombus">
                        <h2 class="contact-in-h2">入力された内容に誤りがあります</h2>
                    </div>
                </div>
                <form action="<?php echo home_url('/confirmation/'); ?>" method="post">
                    <label for="nam">
                        <h3>お名前</h3>
                        <input type="text" name="nam" required>
                    </label>
                    <label for="kana">
                        <h3>おなまえ</h3>
                        <input type="text" name="kana" required>
                    </label>
                    <label for="email">
                        <h3>メールアドレス</h3>
                        <input type="email" name="email" required>
                    </label>
                    <label for="subject">
                        <h3>件名</h3>
                        <input type="text" name="subject">
                    </label>
                    <label for="text">
                        <h3>詳細内容</h3>
                        <textarea name="text" id="" cols="30" rows="10" required></textarea>
                    </label>
                    <p>※いたずら防止のためIPアドレスを記録しています。</p>
                    <button type="submit">送信</button>
                </form>
            </div>
        <?php else : ?>
            <div id="contact-in" class="position">
                <div class="contact-back">
                    <div class="rhombus">
                        <h2 class="contact-in-h2">以下の内容で送信します</h2>
                    </div>
                </div>
                <form action="<?php echo home_url('/semdmail/'); ?>" method="post" style="min-height: 100vh;">
                    <label for="nam">
                        <h3>お名前</h3>
                        <p><?php echo esc_html($_SESSION['contact-date']['name']); ?></p>
                    </label>
                    <label for="kana">
                        <h3>おなまえ</h3>
                        <p><?php echo esc_html($_SESSION['contact-date']['kana']); ?></p>
                    </label>
                    <label for="email">
                        <h3>メールアドレス</h3>
                        <p><?php echo esc_html($_SESSION['contact-date']['email']); ?></p>
                    </label>
                    <label for="subject">
                        <h3>件名</h3>
                        <p><?php echo esc_html($_SESSION['contact-date']['subject']); ?></p>
                    </label>
                    <label for="text">
                        <h3>詳細内容</h3>
                        <p><?php echo esc_html($_SESSION['contact-date']['text']); ?></p>
                    </label>
                    <p>※いたずら防止のためIPアドレスを記録しています。</p>
                    <button type="submit">送信</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>