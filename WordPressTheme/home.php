<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Blog</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/blog-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/blog-sub-mv-sp.webp' alt='aboutus-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-blog page-archive-blog common-back-fish">
      <div class="archive-blog__inner inner">
        <div class="archive-blog__main-contents">
          <div class="archive-blog__cards blog-cards blog-cards--archive">
          <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
              <a href="<?php the_permalink();?>" class="blog-cards__card blog-card blog-card--archive">
               <div class="blog-card__img blog-card__img--scale">
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                  <?php else: ?>  
                    <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                  <?php endif;?>
               </div>
                <div class="blog-card__contents">
                  <time datetime="<?php the_time('c')?>" class="blog-card__date"><?php the_time('Y.m.d')?></time> 
                  <div class="blog-card__card-title"><?php the_title();?></div>
                  <div class="blog-card__text">
                    <?php
                     $post_content = get_the_content();
                     echo get_custom_excerpt_with_br($post_content,89); 
                     ?>
                  </div>
                </div>
              </a>
            <?php endwhile;?>
          <?php endif;?>
          </div>
          <div class="archive-blog__pagination">
            <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>
          </div>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>

<?php get_footer();?>