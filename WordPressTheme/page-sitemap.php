<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Site MAP</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-pc.webp'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-sp.webp' alt='policy-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <section class="site-map page-site-map">
      <div class="site-map__inner inner">
        <div class="site-map__items">
          <div class="site-map__items-half">
            <ul class="site-map__items-quarter">
              <li class="site-map__item">
                <a href="<?php echo get_campaign_url();?>" class="site-map__item-link">キャンペーン</a>
                <?php
                $terms = get_terms( array(
                'taxonomy' => 'campaign_category',
                'hide_empty' => true,
                ));
                ?>
                <ul class="site-map__sub-items">
                <?php foreach ( $terms as $term ):?>  
                  <li class="site-map__sub-item"><a href="<?php echo esc_url(get_term_link($term));?>" class="site-map__sub-item-link"><?php echo esc_html( $term->name);?></a></li>
                <?php endforeach;?>
                </ul>
              </li>
              <li class="site-map__item"><a href="<?php echo get_aboutus_url();?>" class="site-map__item-link">私たちについて</a></li>
            </ul>
            <ul class="site-map__items-quarter">
              <li class="site-map__item">
                <a href="<?php echo get_information_url();?>" class="site-map__item-link">ダイビング情報</a>
                <ul class="site-map__sub-items">
                  <li class="site-map__sub-item"><a href="<?php echo get_information_url()?>?tab=tab01" class="site-map__sub-item-link">ライセンス講習</a></li>
                  <li class="site-map__sub-item"><a href="<?php echo get_information_url()?>?tab=tab03" class="site-map__sub-item-link">体験ダイビング</a></li>
                  <li class="site-map__sub-item"><a href="<?php echo get_information_url()?>?tab=tab02" class="site-map__sub-item-link">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="site-map__item"><a href="<?php echo get_blog_url();?>" class="site-map__item-link">ブログ</a></li>
            </ul>
          </div>
          <div class="site-map__items-half">
            <ul class="site-map__items-quarter site-map__items-quarter--right">
              <li class="site-map__item"><a href="<?php echo get_voice_url();?>" class="site-map__item-link">お客様の声</a></li>
              <li class="site-map__item">
                <a href="<?php echo get_price_url();?>" class="site-map__item-link">料金一覧</a>
                <ul class="site-map__sub-items site-map__sub-items--price">
                  <li class="site-map__sub-item"><a href="<?php echo get_price_url();?>#price-table1" class="js-page-link site-map__sub-item-link">ライセンス講習</a></li>
                  <li class="site-map__sub-item"><a href="<?php echo get_price_url();?>#price-table2" class="js-page-link site-map__sub-item-link">体験ダイビング</a></li>
                  <li class="site-map__sub-item"><a href="<?php echo get_price_url();?>#price-table3" class="js-page-link site-map__sub-item-link">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="site-map__items-quarter site-map__items-quarter--right">
              <li class="site-map__item"><a href="<?php echo get_faq_url();?>" class="site-map__item-link">よくある質問</a></li>
              <li class="site-map__item"><a href="<?php echo get_privacy_url();?>" class="site-map__item-link site-map__item-link--span">プライバシー<span>ポリシー</span></a></li>
              <li class="site-map__item"><a href="<?php echo get_termsservice_url();?>" class="site-map__item-link">利用規約</a></li>
              <li class="site-map__item"><a href="<?php echo get_contactform_url();?>" class="site-map__item-link">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  
<?php get_footer();?>