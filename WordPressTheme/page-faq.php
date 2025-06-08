<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">FAQ</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/faq-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/faq-sub-mv-sp.webp' alt='faq-mv'>
        </picture>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-faq page-archive-faq common-back-fish">
      <div class="archive-faq__inner inner">
       <?php $faqs = SCF::get('faqs');?>
       <?php if(!empty($faqs)):?>
        <div class="archive-faq__faqs faq-lists">
          <?php  foreach($faqs as $item): ?>
            <div class="faq-lists__list faq-list">
              <p class="faq-list__question js-faq-list is-open"><?php echo esc_html(nl2br($item['question']));?></p>
              <p class="faq-list__answer"><?php echo esc_html(nl2br($item['answer']));?></p>
            </div>
          <?php endforeach;?>  
        </div>
       <?php endif;?> 
      </div>
    </div>
<?php get_footer();?>