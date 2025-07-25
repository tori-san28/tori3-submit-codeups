<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--voice page-sub-main-visual">
      <h1 class="sub-main-visual__title">Voice</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/voice-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/voice-sub-mv-sp.webp' alt='voice-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <section class="archive-voice page-archive-voice common-back-fish">
      <div class="archive-voice__inner inner">
       <div class="archive-voice__business-types business-types">
         <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="business-types__type business-types__type--active">ALL</a>
          <?php
            $terms = get_terms( array(
            'taxonomy' => 'voice_category',
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
       <div class="archive-voice__cards voice-cards voice-cards--sub">
        <?php if(have_posts()):?>
          <?php while(have_posts()): the_post();?>
            <!-- カスタムタクソノミー名を取得 -->
            <?php
              $terms = get_the_terms(get_the_ID(), 'voice_category');
              if (!empty($terms) && !is_wp_error($terms)) {
                $first_term = $terms[0]->name; // 最初のタームを取得
              }else{
                $first_term = '未分類';
              }
            ?>
            <div class="voice-cards__card voice-card">
              <div class="voice-card__wrapper">
              <div class="voice-card__contents">
              <div class="voice-card__sub-contents">
                <div class="voice-card__age"><?php echo esc_html(get_field('age')).'('. esc_html(get_field('sex')).')'; ?></div>
                <div class="voice-card__business-type"><?php echo esc_html($first_term); ?></div>
              </div>
              <h2 class="voice-card__card-title"><?php echo esc_html(get_the_title()); ?></h2>
            </div>
            <div class="voice-card__img">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail();?>
              <?php else: ?>  
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
              <?php endif;?>
            </div>
          </div>
          <div class="voice-card__text">
            <?php the_content();?>
          </div>
        </div>
        <?php endwhile;?>
        <?php endif;?>
       </div>
       <ol class="archive-voice__pagination">
          <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>
        </ol>
      </div>
    </section>

<?php get_footer();?>