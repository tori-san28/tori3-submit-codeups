<aside class="archive-blog__sub-contents archive-blog-sub">
    <?php
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => '3',
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="archive-blog-sub__popular-news blog-pupular-news">
    <h2 class="blog-popular-news__title blog-sub-title">人気記事</h2>
    <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink();?>" class="blog-pupular-news__news blog-sub-card">
            <div class="blog-sub-card__img">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail();?>
            <?php else: ?>  
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
            <?php endif;?>
            </div>
            <div class="blog-sub-card__texts">
            <time datetime="<?php the_time('c')?>" class="blog-sub-card__date"><?php the_time('Y.m.d')?></time>
            <div class="blog-sub-card__title"><?php the_title();?></div>
            </div>
        </a>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>

    <div class="archive-blog-sub__voice blog-sub-voice">
    <?php
    $args = array(
    'post_type' => 'voice',
    'posts_per_page' => '1',
    );
    $the_query = new WP_Query($args);
    ?>
    <h2 class="blog-sub-voice__title blog-sub-title">口コミ</h2>
    <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="blog-sub-voice__voice-card blog-voice-card">
            <div class="blog-voice-card__img">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail();?>
            <?php else: ?>  
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
            <?php endif;?>
            </div>
            <div class="blog-voice-card__age"><?php echo esc_html(get_field('age')).'('. esc_html(get_field('sex')).')'; ?></div>
            <div class="blog-voice-card__card-title blog-voice-card__card-title--sub">
            <?php echo esc_html(wp_trim_words(get_the_title(), 20,'')); ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
    <div class="blog-sub-voice__button">
        <a href="<?php echo get_voice_url();?>" class="main-button">view more<span class="main-button__arrow"></span></a>
    </div>
    </div>

    <div class="archive-blog-sub__campaign blog-sub-campaign">
    <?php
    $args = array(
    'post_type' => 'campaign',
    'posts_per_page' => '2',
    );
    $the_query = new WP_Query($args);
    ?>
    <h2 class="blog-sub-campaign__title blog-sub-title">キャンペーン</h2>
    <div class="blog-sub-campaign__cards">
        <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="blog-sub-campaign__card blog-campaign-card">
            <div class="blog-campaign-card__wrapper">
                <div class="blog-campaign-card__img">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                <?php else: ?>  
                    <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                <?php endif;?>
                </div>
                <div class="blog-campaign-card__contents">
                <div class="blog-campaign-card__business-title"><?php the_title();?></div>
                <div class="blog-campaign-card__price-wrapper">
                    <div class="blog-campaign-card__price-title">全部コミコミ(お一人様)</div>
                    <div class="blog-campaign-card__price-pre-after">
                    <div class="blog-campaign-card__price-pre"><?php echo format_price_yen(get_field('price-pre')); ?></div>
                    <div class="blog-campaign-card__price-after"><?php echo format_price_yen(get_field('price-after')); ?></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
    <div class="blog-sub-campaign__button">
        <a href="<?php echo get_campaign_url();?>" class="main-button">view more<span class="main-button__arrow"></span></a>
    </div>
    </div>

    <div class="archive-blog-sub__archive-news blog-archive-news">
        <h2 class="blog-archive-news__title blog-sub-title">アーカイブ</h2>
        <div class="blog-archive-news__lists blog-archive-lists">
            <?php
            $year_prev = null;
            $months = $wpdb->get_results("
                SELECT DISTINCT MONTH(post_date) AS month,
                                YEAR(post_date) AS year,
                                COUNT(id) AS post_count
                FROM $wpdb->posts
                WHERE post_status = 'publish'
                AND post_date <= NOW()
                AND post_type = 'post'
                GROUP BY month, year
                ORDER BY post_date DESC
            ");

            foreach ($months as $month):
                $year_current = $month->year;
                if ($year_current != $year_prev):
                    if ($year_prev !== null):
                        echo '</ul></div>'; // 前の年を閉じる
                    endif;
            ?>
            <div class="blog-archive-lists__list blog-archive-list">
                <div class="blog-archive-list__year"><?php echo esc_html($month->year); ?>年</div>
                <ul class="blog-archive-list__months">
            <?php
                endif;
            ?>
                    <li class="blog-archive-list__month">
                        <a href="<?php echo esc_url(get_bloginfo('url') . '/' . $month->year . '/' . date('m', mktime(0, 0, 0, $month->month, 1, $month->year))); ?>">
                            <?php echo esc_html(date('n', mktime(0, 0, 0, $month->month, 1, $month->year))); ?>月
                        </a>
                    </li>
            <?php
                $year_prev = $year_current;
            endforeach;
            ?>
            </ul></div> <!-- 最後の年を閉じる -->
        </div>
    </div>
</aside>