<?php get_header();?>

<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Contact</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/contactform-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/contactform-sub-mv-sp.png' alt='contact-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <div class="contact-thanks page-contact-thanks common-back-fish">
      <div class="contact-thanks__inner inner">
        <p class="contact-thanks__text">お問い合わせ内容を送信完了しました。</p>
        <p class="contact-thanks__text">
          このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
          お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
          また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
        </p>
      </div>
    </div>
  </main>
  
<?php get_footer();?>