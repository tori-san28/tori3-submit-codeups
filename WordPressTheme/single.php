<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <div class="sub-main-visual__title">Blog</div>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/blog-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/blog-sub-mv-sp.png' alt='aboutus-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-blog page-archive-blog common-back-fish">
      <div class="archive-blog__inner inner">
        <div class="archive-blog__selected archive-blog-selected">
          <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
              <div class="archive-blog-selected__head">
                <time datetime="<?php the_time('c')?>" class="archive-blog-selected__date"><?php the_time('Y.m.d')?></time> 
                <h1 class="archive-blog-selected__card-title"><?php the_title();?></h1>
              </div>

              <figure class="archive-blog-selected__thumbnail">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full');?>
                <?php else: ?>  
                  <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                <?php endif;?>
              </figure>
              <div class="archive-blog-selected__container">
                <?php the_content();?>
              </div>  
            <?php endwhile;?>
          <?php endif;?>
          <ol class="archive-blog-selected__pagination pagination pagination--home">
            <li class="pagination__prev"><?php esc_url(previous_post_link('%link', '<'));?></li>
            <li class="pagination__next"><?php esc_url(next_post_link('%link', '>'));?></li>
          </ol>
        </div>
        
        <?php get_sidebar(); ?>
        <!-- 表示数をカウントアップ -->
        <?php set_post_views(get_the_ID()); ?>
      </div>
    </div>

<?php get_footer();?>