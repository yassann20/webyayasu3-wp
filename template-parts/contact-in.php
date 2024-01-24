<div id="contact-in" class="position">
    <div class="contact-back">
        <div class="rhombus">
            <h2 class="contact-in-h2"><?php echo esc_html(get_theme_mod('contact_in_h2', "お問い合わせ")); ?></h2>
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