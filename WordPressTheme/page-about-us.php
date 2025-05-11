<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">About us</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/aboutus-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/aboutus-sub-mv-sp.png' alt='aboutus-mv'>
        </picture>
      </div>
    </section>
   
    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-about-us page-archive-about-us common-back-fish">
      <div class="archive-about-us__inner inner">
        <div class="archive-about-us__contents message-block">
          <div class="message-block__img-wrapper">
            <div class="message-block__img-left message-block__img-left--aboutus">
              <picture>
                <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/about-left-pc.png'>
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/about-left-sp.png' alt='about-left'>
              </picture>
            </div>
            <div class="message-block__img-right message-block__img-right--aboutus">
              <picture>
                <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/about-right-pc.png'>
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/about-right-sp.png' alt='about-right'>
              </picture>
            </div>
          </div>
          <div class="message-block__sub-contents message-block__sub-contents--aboutus">
            <div class="message-block__sub-title message-block__sub-title--aboutus">Dive into<br>the Ocean</div>
            <div class="message-block__sub-small-contents message-block__sub-small-contents--aboutus">
              <div class="message-block__text message-block__text--aboutus">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br
                >ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $pictures = SCF::get('pictures');?>
    <section class="gallery page-gallery">
     <?php if(!empty($pictures)):?>
      <div class="gallery__inner inner">
        <div class="gallery__title section-title">
          <p class="section-title__english">gallery</p>
          <h2 class="section-title__japanese">フォト</h2>
        </div>
        <div class="gallery__contents">
          <div class="gallery__img-wrapper">
            <?php  foreach($pictures as $item): ?>
              <div class="gallery__img js-openModal">
                <?php if(!empty($item['picture1'])):?>
                    <?php $image_full = wp_get_attachment_image_src($item['picture1'] , 'full'); ?>
                    <?php $image_medium = wp_get_attachment_image_src($item['picture1'] , 'medium'); ?>
                 <picture>
                  <source media='(min-width: 768px)' srcset='<?php echo esc_url($image_full[0]); ?>'>
                  <img src='<?php echo esc_url($image_medium[0]); ?>' alt='gallery-picture'>
                 </picture>
                <?php endif;?>
              </div>
            <?php endforeach;?> 
          </div>
        </div>
      </div>
      <div class="gallery__modal modal">
        <div class="modal__layer"></div>
        <div class="modal__container">
            <div class="modal__contents"></div>
        </div>
      </div>
     <?php endif;?> 
    </section>
  
<?php get_footer();?>