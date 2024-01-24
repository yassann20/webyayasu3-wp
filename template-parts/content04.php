<div id="content04" class="position">
    <div class="back-menu">
        <div class="rhombus">
            <h2 class="c4-h2-text"><?php echo esc_html(get_theme_mod('content4_h2_text', "新着情報")); ?></h2>
        </div>
    </div>
    <div class="slideshow02">
        <?php

        $args = array(
            'post_type' => 'post', //投稿タイプ(投稿記事はpost)
            'posts_per_page' => 10, //表示する記事の数
        );

        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div class="news-content">

                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); //サムネイルがある場合は表示 
                                    ?>" alt="">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); //ない場合はこのurlの画像を表示 
                                    ?>/site-date/photos/pc-photo/codding.jpg" alt="">
                    <?php endif; ?>
                    <div class="slide2-content">
                        <?php $categories = get_the_category(); ?>
                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $category) : ?>
                                <p class="category"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></p><!--記事カテゴリ名-->
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <p class="date"><?php echo get_the_date(); ?></p><!--更新日時-->
                        <p class="text"><?php the_title(); ?></p><!--記事本文抜粋-->
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
</div>