<?php
$home = esc_url(home_url( '/' ));
$campaign = esc_url(home_url( '../campaign/' ));
$aboutus = esc_url(home_url( '../about-us/' ));
$information = esc_url(home_url( '../information/' ));
$blog = esc_url(home_url( '../blog/' ));
$voice = esc_url(home_url( '../voice/' ));
$price = esc_url(home_url( '../price/' ));
$faq = esc_url(home_url( '../faq/' ));
$contactform = esc_url(home_url( '../contactform/' ));
$privacy = esc_url(home_url( '../privacy/' ));
$terms = esc_url(home_url( '../terms/' ));
$sitemap = esc_url(home_url( '../sitemap/' ));
?>
<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Site MAP</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/policy-sub-mv-sp.png' alt='policy-mv'>
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
                <a href="<?php echo $campaign;?>" class="site-map__item-link">キャンペーン</a>
                <ul class="site-map__sub-items">
                  <li class="site-map__sub-item"><a href="#" class="site-map__sub-item-link">ライセンス取得</a></li>
                  <li class="site-map__sub-item"><a href="#" class="site-map__sub-item-link">貸切体験ダイビング</a></li>
                  <li class="site-map__sub-item"><a href="#" class="site-map__sub-item-link">ナイトダイビング</a></li>
                </ul>
              </li>
              <li class="site-map__item"><a href="<?php echo $aboutus;?>" class="site-map__item-link">私たちについて</a></li>
            </ul>
            <ul class="site-map__items-quarter">
              <li class="site-map__item">
                <a href="<?php echo $information;?>" class="site-map__item-link">ダイビング情報</a>
                <ul class="site-map__sub-items">
                  <li class="site-map__sub-item"><a href="page-information.html?tab=tab01" class="site-map__sub-item-link">ライセンス講習</a></li>
                  <li class="site-map__sub-item"><a href="page-information.html?tab=tab03" class="site-map__sub-item-link">体験ダイビング</a></li>
                  <li class="site-map__sub-item"><a href="page-information.html?tab=tab02" class="site-map__sub-item-link">ファンダイビング</a></li>
                </ul>
              </li>
              <li class="site-map__item"><a href="<?php echo $home;?>" class="site-map__item-link">ブログ</a></li>
            </ul>
          </div>
          <div class="site-map__items-half">
            <ul class="site-map__items-quarter site-map__items-quarter--right">
              <li class="site-map__item"><a href="<?php echo $voice;?>" class="site-map__item-link">お客様の声</a></li>
              <li class="site-map__item">
                <a href="<?php echo $price;?>" class="site-map__item-link">料金一覧</a>
                <ul class="site-map__sub-items site-map__sub-items--price">
                  <li class="site-map__sub-item"><a href="#" class="site-map__sub-item-link">ライセンス講習</a></li>
                  <li class="site-map__sub-item"><a href="#" class="site-map__sub-item-link">体験ダイビング</a></li>
                  <li class="site-map__sub-item"><a href="#" class="site-map__sub-item-link">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="site-map__items-quarter site-map__items-quarter--right">
              <li class="site-map__item"><a href="<?php echo $sitemap;?>" class="site-map__item-link">よくある質問</a></li>
              <li class="site-map__item"><a href="<?php echo $privacy;?>" class="site-map__item-link site-map__item-link--span">プライバシー<span>ポリシー</span></a></li>
              <li class="site-map__item"><a href="<?php echo $terms;?>" class="site-map__item-link">利用規約</a></li>
              <li class="site-map__item"><a href="<?php echo $contactform;?>" class="site-map__item-link">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  
<?php get_footer();?>