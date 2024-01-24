 <div id="content02" class="fadein position">
     <ul>
         <!--事業内容１つ目-->
         <?php
            $c2h2 = 3; // これはテーマカスタマイザーでのループ回数と合わせてください
            $default_c2h2 = ['コーディング', 'WP制作', '保守・運営']; //リスト見出しデフォルト
            $default_c2p = [ //リスト本文デフォルト
                'ウェブサイトやLPのコーディング業務を請け負っています。与えられたデザインを忠実に再現し納期もスピーディに納品します。',
                'wordpressのカスタマイズや保守。コーディングしたデータを元にオリジナルテーマの作成も行っています。',
                '既存のサイトの保守・運営業務を行っています。サイトのデザイン変更に伴うソースコード改修や、ブログ記事の更新などを行っています。'
            ];
            $list_class = ['codding', 'wp', 'maintenance']; //リストに付与するクラス
            for ($i = 1; $i <= $c2h2; $i++) :
            ?>
             <li>
                 <div class="c2fadein">
                     <div class="rhombus">
                         <h2 class="c2-h2-text<?php echo $i; ?>"><?php echo esc_html(get_theme_mod('content2_list_h2_text' . $i, $default_c2h2[$i - 1])); ?></h2>
                     </div>
                     <div class="content <?php echo $list_class[$i - 1]; ?>">
                         <div class="rgba">
                             <p class="c2-p-text<?php echo $i; ?>"><?php echo esc_html(get_theme_mod('content2_list_p_text' . $i, $default_c2p[$i - 1])); ?></p>
                         </div>
                     </div>
                 </div>
             </li>
         <?php endfor; ?>
     </ul>
 </div>