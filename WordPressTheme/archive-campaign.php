<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Campaign</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/campaign-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/campaign-sub-mv-sp.webp' alt='campaign-mv'>
        </picture>
      </div>
    </section>
    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-campaign page-archive-campaign common-back-fish">
      <div class="archive-campaign__inner inner">
        <div class="archive-campaign__business-types business-types">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="business-types__type business-types__type--active">ALL</a>
          <?php
            $terms = get_terms( array(
            'taxonomy' => 'campaign_category',
            'hide_empty' => true,
            ));
            if (!empty($terms) && !is_wp_error($terms)) : ?>
              <?php foreach ($terms as $term) : ?>
                  <a href="<?php echo esc_url(get_term_link($term)); ?>" class="business-types__type">
                      <?php echo esc_html($term->name); ?>
                  </a>
              <?php endforeach; ?>
            <?php endif; ?>  
        </div>
        <div class="archive-campaign__items archive-campaign-cards">
          <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
              <div class="archive-campaign-cards__card archive-campaign-card">
                <div class="archive-campaign-card__wrapper">
                  <div class="archive-campaign-card__img">
                    <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail();?>
                    <?php else: ?>  
                      <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                    <?php endif;?>
                  </div>
                  <!-- カスタムタクソノミー名を取得 -->
                  <?php
                    $terms = get_the_terms(get_the_ID(), 'campaign_category');
                    if (!empty($terms) && !is_wp_error($terms)) {
                      $first_term = $terms[0]->name; // 最初のタームを取得
                    }else{
                      $first_term = '未分類';
                    }
                  ?>
                  <div class="archive-campaign-card__contents">
                    <div class="archive-campaign-card__business-type"><span><?php echo esc_html($first_term); ?></span></div>
                    <div class="archive-campaign-card__business-title"><?php the_title();?></div>
                    <div class="archive-campaign-card__price-wrapper">
                      <div class="archive-campaign-card__price-title">全部コミコミ(お一人様)</div>
                      <div class="archive-campaign-card__price-pre-after">
                        <?php 
                         $price =get_field('price');
                         $price1 = format_price_yen($price['price1']);
                         $price2 = format_price_yen($price['price2']);
                        ?>
                        <div class="archive-campaign-card__price-pre"><?php echo esc_html($price1); ?></div>
                        <div class="archive-campaign-card__price-after"><?php echo esc_html($price2); ?></div>
                      </div>
                      <div class="archive-campaign-card__texts u-desktop">
                        <div class="archive-campaign-card__text">
                          <?php 
                          $post_content = get_the_content();
                          echo get_custom_excerpt_with_br($post_content,154);
                          ?>
                        </div>
                        <div class="archive-campaign-card__dates">
                          <?php
                          $start_dates =get_field('campaign-dates'); 
                          $start_date_raw = $start_dates['campaign-start']; // 例: 2025/6/1
                          $end_date_raw   = $start_dates['campaign-end'];   // 例: 2025/6/10
                          $start_date = $start_date_raw;
                          $end_date = format_end_date($start_date_raw,$end_date_raw);
                          echo esc_html($start_date) . " - " . esc_html($end_date);
                          ?>
                        </div>
                        <div class="archive-campaign-card__link">ご予約・お問い合わせはコチラ</div>
                      </div>
                    </div>
                    <div class="archive-campaign-card__button u-desktop">
                      <a href="<?php echo get_contactform_url();?>" class="main-button">contact us<span class="main-button__arrow"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
        </div>
        <div class="archive-campaign__pagination">
          <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>
        </div>
      </div>
    </div>

<?php get_footer();?>