<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Contact</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/contactform-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/contactform-sub-mv-sp.webp' alt='contact-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <div class="contact-form page-contact-form common-back-fish">
      <div class="contact-form__inner inner">
        <div class="contact-form__fields form-field">
          <?php echo do_shortcode('[contact-form-7 id="ac1edc1" title="お問い合せ"]')?>
        </div>
      </div>
    </div>
  </main>
  
<?php get_footer();?>