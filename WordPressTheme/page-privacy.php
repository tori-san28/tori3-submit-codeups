<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Privacy Policy</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-sp.png' alt='policy-mv'>
        </picture>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <section class="privacy-policy page-privacy-policy common-back-fish">
      <div class="privacy-policy__inner inner">
        <h2 class="privacy-policy__title">プライバシーポリシー</h2>
        <div class="privacy-policy__items">
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