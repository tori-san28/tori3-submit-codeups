<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head();?>
</head>

<body>
<?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()):?>
       <h1 class="header__title">
      <?php else:?>
       <div class="header__title">
      <?php endif;?>
        <a href="<?php echo get_homepage_url();?>" class="header__logo">
          <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-codeups-sp.svg" alt="CodeUpsロゴ">
        </a>
      <?php if (is_front_page()):?>  
       </h1>
      <?php else:?>
       </div>
      <?php endif;?>
      <div class="header__drawer hamburger-menu js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="header__pc-nav pc-nav">
          <div class="pc-nav__items">
            <a href="<?php echo get_campaign_url();?>" class="pc-nav__item">
                <div class="pc-nav__title-english">campaign</div>
                <div class="pc-nav__title-japanese">キャンペーン</div>
            </a>
            <a href="<?php echo get_aboutus_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english">about us</div>
              <div class="pc-nav__title-japanese">私たちについて</div>
            </a>
            <a href="<?php echo get_information_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english">information</div>
              <div class="pc-nav__title-japanese">ダイビング情報</div>
            </a>
            <a href="<?php echo get_blog_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english">blog</div>
              <div class="pc-nav__title-japanese">ブログ</div>
            </a>
            <a href="<?php echo get_voice_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english">voice</div>
              <div class="pc-nav__title-japanese">お客様の声</div>
            </a>
            <a href="<?php echo get_price_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english">price</div>
              <div class="pc-nav__title-japanese">料金一覧</div>
            </a>
            <a href="<?php echo get_faq_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english pc-nav__title-english--allUpper">faq</div>
              <div class="pc-nav__title-japanese">よくある質問</div>
            </a>
            <a href="<?php echo get_contactform_url();?>" class="pc-nav__item">
              <div class="pc-nav__title-english">contact</div>
              <div class="pc-nav__title-japanese">お問合せ</div>
            </a>
          </div>
      </div>
      <div class="header__sp-nav sp-nav js-drawer-menu">
        <div class="sp-nav__items sp-nav__items--drawer">
          <ul class="sp-nav__items-half">
            <li class="sp-nav__item">
              <a href="<?php echo get_campaign_url();?>" class="sp-nav__item-link">キャンペーン</a>
              <?php
              $terms = get_terms( array(
              'taxonomy' => 'campaign_category',
              'hide_empty' => true,
              ));
              ?>
              <ul class="sp-nav__sub-items">
              <?php foreach ( $terms as $term ):?>
                <li class="sp-nav__sub-item"><a href="<?php echo esc_url(get_term_link($term));?>" class="sp-nav__sub-item-link"><?php echo esc_html( $term->name);?></a></li>
              <?php endforeach;?>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo get_aboutus_url();?>" class="sp-nav__item-link">私たちについて</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo get_information_url()?>" class="sp-nav__item-link">ダイビング情報</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="<?php echo get_information_url()?>?tab=tab01" class="sp-nav__sub-item-link js-link-1">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo get_information_url()?>?tab=tab03" class="sp-nav__sub-item-link js-link-2">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo get_information_url()?>?tab=tab02" class="sp-nav__sub-item-link js-link-3">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo get_blog_url();?>" class="sp-nav__item-link">ブログ</a></li>
          </ul>
          <ul class="sp-nav__items-half">
            <li class="sp-nav__item"><a href="<?php echo get_voice_url();?>" class="sp-nav__item-link">お客様の声</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo get_price_url();?>" class="sp-nav__item-link">料金一覧</a>
              <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item"><a href="<?php echo get_price_url();?>#price-table1" class="js-page-link sp-nav__sub-item-link">ライセンス講習</a></li>
                  <li class="sp-nav__sub-item"><a href="<?php echo get_price_url();?>#price-table2" class="js-page-link sp-nav__sub-item-link">体験ダイビング</a></li>
                  <li class="sp-nav__sub-item"><a href="<?php echo get_price_url();?>#price-table3" class="js-page-link sp-nav__sub-item-link">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item sp-nav__item"><a href="<?php echo get_faq_url();?>" class="sp-nav__item-link">よくある質問</a></li>
            <li class="sp-nav__item sp-nav__item--fifth"><a href="<?php echo get_privacy_url();?>" class="sp-nav__item-link sp-nav__item-link--span">プライバシー<span>ポリシー</span></a></li>
            <li class="sp-nav__item sp-nav__item--fifth"><a href="<?php echo get_termsservice_url();?>" class="sp-nav__item-link">利用規約</a></li>
            <li class="sp-nav__item sp-nav__item--fifth"><a href="<?php echo get_sitemappage_url();?>" class="sp-nav__item-link">サイトマップ</a></li>
            <li class="sp-nav__item sp-nav__item--fifth"><a href="<?php echo get_contactform_url();?>" class="sp-nav__item-link">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>