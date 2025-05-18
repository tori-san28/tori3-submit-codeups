<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Campaign</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/campaign-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/campaign-sub-mv-sp.png' alt='campaign-mv'>
        </picture>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-campaign page-archive-campaign common-back-fish">
      <div class="archive-campaign__inner inner">
        <div class="archive-campaign__business-types business-types">
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="business-types__type">ALL</a>
          <?php
            $terms = get_terms( array(
            'taxonomy' => 'campaign_category',
            'hide_empty' => true,
            ));
            foreach ( $terms as $term ) {
              if (is_tax('campaign_category', $term->slug)) {
                $class = "business-types__type business-types__type--active";
              }
              else{
                $class = "business-types__type";
              }
              echo '<div><a class="' . $class . '" href="' 
              . esc_url( get_term_link( $term ) ) . '">' 
              . esc_html( $term->name ) . '</a></div>';
            }
          ?>  
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
                    $first_term = '';
                    if (!empty($terms) && !is_wp_error($terms)) {
                      $first_term = $terms[0]->name; // 最初のタームを取得
                    }
                  ?>
                  <div class="archive-campaign-card__contents">
                    <div class="archive-campaign-card__business-type"><span><?php echo esc_html($first_term); ?></span></div>
                    <div class="archive-campaign-card__business-title"><?php the_title();?></div>
                    <div class="archive-campaign-card__price-wrapper">
                      <div class="archive-campaign-card__price-title">全部コミコミ(お一人様)</div>
                      <div class="archive-campaign-card__price-pre-after">
                        <div class="archive-campaign-card__price-pre"><?php echo format_price_yen(get_field('price-pre')) ?></div>
                        <div class="archive-campaign-card__price-after"><?php echo format_price_yen(get_field('price-after')); ?></div>
                      </div>
                      <div class="archive-campaign-card__texts u-desktop">
                        <div class="archive-campaign-card__text">
                          <?php
                           $post_content = get_the_content();
                           echo get_custom_excerpt_with_br($post_content,154);
                           ?>
                        </div>
                        <div class="archive-campaign-card__dates"><?php echo get_field('campaign-dates'); ?></div>
                        <div class="archive-campaign-card__link">ご予約・お問い合わせはコチラ</div>
                      </div>
                    </div>
                    <div class="archive-campaign-card__button u-desktop">
                      <a href="page-contactform.html" class="main-button">contact us<span class="main-button__arrow"></span></a>
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