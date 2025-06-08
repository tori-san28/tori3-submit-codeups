<?php get_header();?>
<section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Terms of Service</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-sp.webp' alt='policy-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <section class="terms page-terms common-back-fish">
      <div class="terms__inner inner">
        <h2 class="terms__title">利用規約</h2>
        <div class="terms__items">
            <?php if(have_posts()):?>
                <?php while(have_posts()): the_post();?>
                    <div class="terms__item">
                    <?php the_content();?>
                    </div>
                <?php endwhile;?>
            <?php endif;?>  
        </div>
      </div>
    </section>
<?php get_footer();?>