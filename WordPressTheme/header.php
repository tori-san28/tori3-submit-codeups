<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head();?>
</head>
<?php
$home = esc_url(home_url( '/' ));
$campaign = esc_url(home_url( '/campaign/' ));
$aboutus = esc_url(home_url( '/about-us/' ));
$information = esc_url(home_url( '/information/' ));
$blog = esc_url(home_url( '/blog/' ));
$voice = esc_url(home_url( '/voice/' ));
$price = esc_url(home_url( '/price/' ));
$faq = esc_url(home_url( '/faq/' ));
$contact = esc_url(home_url( '/contactform/' ));
?>
<body>
<?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()):?>
       <h1 class="header__title">
      <?php else:?>
       <div class="header__title">
      <?php endif;?>
        <a href="<?php echo $home;?>" class="header__logo">
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
            <a href="<?php echo $campaign;?>" class="pc-nav__item">
                <div class="pc-nav__title-english">campaign</div>
                <div class="pc-nav__title-japanese">キャンペーン</div>
            </a>
            <a href="<?php echo $aboutus;?>" class="pc-nav__item">
              <div class="pc-nav__title-english">about us</div>
              <div class="pc-nav__title-japanese">私たちについて</div>
            </a>
            <a href="<?php echo $information;?>" class="pc-nav__item">
              <div class="pc-nav__title-english">information</div>
              <div class="pc-nav__title-japanese">ダイビング情報</div>
            </a>
            <a href="<?php echo $blog;?>" class="pc-nav__item">
              <div class="pc-nav__title-english">blog</div>
              <div class="pc-nav__title-japanese">ブログ</div>
            </a>
            <a href="<?php echo $voice;?>" class="pc-nav__item">
              <div class="pc-nav__title-english">voice</div>
              <div class="pc-nav__title-japanese">お客様の声</div>
            </a>
            <a href="<?php echo $price;?>" class="pc-nav__item">
              <div class="pc-nav__title-english">price</div>
              <div class="pc-nav__title-japanese">料金一覧</div>
            </a>
            <a href="<?php echo $faq;?>" class="pc-nav__item">
              <div class="pc-nav__title-english pc-nav__title-english--allUpper">faq</div>
              <div class="pc-nav__title-japanese">よくある質問</div>
            </a>
            <a href="<?php echo $contactform;?>" class="pc-nav__item">
              <div class="pc-nav__title-english">contact</div>
              <div class="pc-nav__title-japanese">お問合せ</div>
            </a>
          </div>
      </div>
      <div class="header__sp-nav sp-nav js-drawer-menu">
        <div class="sp-nav__items sp-nav__items--drawer">
          <ul class="sp-nav__items-half">
            <li class="sp-nav__item">
              <a href="<?php echo $campaign;?>" class="sp-nav__item-link">キャンペーン</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#" class="sp-nav__sub-item-link">ライセンス取得</a></li>
                <li class="sp-nav__sub-item"><a href="#" class="sp-nav__sub-item-link">貸切体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#" class="sp-nav__sub-item-link">ナイトダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $aboutus;?>" class="sp-nav__item-link">私たちについて</a></li>
            <li class="sp-nav__item">
              <a href="page-information.html" class="sp-nav__item-link">ダイビング情報</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="page-information.html?tab=tab01" class="sp-nav__sub-item-link js-link-1">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="page-information.html?tab=tab03" class="sp-nav__sub-item-link js-link-2">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="page-information.html?tab=tab02" class="sp-nav__sub-item-link js-link-3">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $blog;?>" class="sp-nav__item-link">ブログ</a></li>
          </ul>
          <ul class="sp-nav__items-half">
            <li class="sp-nav__item"><a href="<?php echo $voice;?>" class="sp-nav__item-link">お客様の声</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo $price;?>" class="sp-nav__item-link">料金一覧</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#" class="sp-nav__sub-item-link">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#" class="sp-nav__sub-item-link">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#" class="sp-nav__sub-item-link">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $faq;?>" class="sp-nav__item-link">よくある質問</a></li>
            <li class="sp-nav__item"><a href="<?php echo $privacy;?>" class="sp-nav__item-link sp-nav__item-link--span">プライバシー<span>ポリシー</span></a></li>
            <li class="sp-nav__item"><a href="<?php echo $terms;?>" class="sp-nav__item-link">利用規約</a></li>
            <li class="sp-nav__item"><a href="<?php echo $contactform;?>" class="sp-nav__item-link">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>