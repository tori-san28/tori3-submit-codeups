<?php if(!is_page('contactform') && !is_page('contact-thanks') && !is_404()):?>
  <?php if(is_front_page()):?>
    <section class="contact page-contact page-contact--short">
  <?php else:?>   
    <section class="contact page-contact">
  <?php endif;?>   
      <div class="contact__inner inner">
        <div class="contact__contents">
          <div class="contact__location contact-location">
            <div class="contact-location__logo">
              <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-codeups-sp-green.svg" alt="logo-green">
            </div>
            <div class="contact-location__contents">
              <div class="contact-location__sub-contents">
                <p class="contact-location__text">沖縄県那覇市1-1</p>
                <p class="contact-location__text">TEL:0120-000-0000</p>
                <p class="contact-location__text">営業時間:8:30-19:00</p>
                <p class="contact-location__text">定休日:毎週火曜日</p>
              </div>
              <div class="contact-location__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57272.98532469251!2d127.64350214684703!3d26.210936387812268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1736043878967!5m2!1sja!2sjp" width="320" height="590" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="contact__line contact-line">
            <div class="contact-line__line"></div>
          </div>
          <div class="contact__link contact-link">
            <div class="contact-link__title section-title-big">
              <p class="section-title-big__english">contact</p>
              <h2 class="section-title-big__japanese">お問合せ</h2>
            </div>
            <div class="contact-link__link">
              <a href="">ご予約・お問い合わせはコチラ</a>
            </div>
            <div class="contact-link__button">
              <a href="<?php echo get_contactform_url();?>" class="main-button">contact us<span class="main-button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif;?>
  </main>
  <?php if(is_page('contactform')): ?>
   <footer class="footer page-footer page-footer--contactform">
  <?php elseif(is_page('contact-thanks')):?>
   <footer class="footer page-footer page-footer--contact-thanks">
  <?php elseif(is_page('sitemap')):?>
    <footer class="footer page-footer page-footer--sitemap">
  <?php elseif(is_404()):?>
    <footer class="footer page-footer page-footer--not-found">
  <?php else:?>  
    <footer class="footer page-footer">
  <?php endif;?>    
    <div class="footer__inner inner">
      <div class="footer__contents">
        <div class="footer__header">
          <div class="footer__title">
            <a href="<?php echo get_homepage_url();?>" class="footer__logo">
              <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-codeups-sp.svg" alt="CodeUpsロゴ">
            </a>
          </div>
          <div class="footer__snss">
            <a href="https://www.facebook.com/?locale=ja_JP"  target="_blank" class="footer__sns1"><img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-facebook.svg" alt="icon-facebook"></a>
            <a href="https://www.instagram.com/?locale=ja_JP"  target="_blank" class="footer__sns2"><img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-instagram.svg" alt="icon-instagram"></a>
          </div>
        </div>
        <div class="footer__nav footer-nav">
          <div class="footer-nav__items">
            <div class="footer-nav__items-half">
              <ul class="footer-nav__items-quarter">
                <li class="footer-nav__item">
                  <a href="<?php echo get_campaign_url();?>" class="footer-nav__item-link">キャンペーン</a>
                  <?php
                  $terms = get_terms( array(
                  'taxonomy' => 'campaign_category',
                  'hide_empty' => true,
                  ));
                  ?>
                  <ul class="footer-nav__sub-items">
                    <?php foreach ( $terms as $term ):?>
                    <li class="footer-nav__sub-item"><a href="<?php echo esc_url(get_term_link($term));?>" class="footer-nav__sub-item-link"><?php echo esc_html( $term->name);?></a></li>
                    <?php endforeach;?>
                  </ul>
                </li>
                <li class="footer-nav__item"><a href="<?php echo get_aboutus_url();?>" class="footer-nav__item-link">私たちについて</a></li>
              </ul>
              <ul class="footer-nav__items-quarter">
                <li class="footer-nav__item">
                  <a href="<?php echo get_information_url();?>" class="footer-nav__item-link">ダイビング情報</a>
                  <ul class="footer-nav__sub-items">
                    <li class="footer-nav__sub-item"><a href="<?php echo get_information_url()?>?tab=tab01" class="footer-nav__sub-item-link js-link-1">ライセンス講習</a></li>
                    <li class="footer-nav__sub-item"><a href="<?php echo get_information_url()?>?tab=tab03" class="footer-nav__sub-item-link js-link-2">体験ダイビング</a></li>
                    <li class="footer-nav__sub-item"><a href="<?php echo get_information_url()?>?tab=tab02" class="footer-nav__sub-item-link js-link-3">ファンダイビング</a></li>
                  </ul>
                </li>
                <li class="footer-nav__item"><a href="<?php echo get_blog_url();?>" class="footer-nav__item-link">ブログ</a></li>
              </ul>
            </div>
            <div class="footer-nav__items-half">
              <ul class="footer-nav__items-quarter">
                <li class="footer-nav__item"><a href="<?php echo get_voice_url();?>" class="footer-nav__item-link">お客様の声</a></li>
                <li class="footer-nav__item">
                  <a href="<?php echo get_price_url();?>" class="footer-nav__item-link">料金一覧</a>
                  <ul class="footer-nav__sub-items">
                    <li class="footer-nav__sub-item"><a href="<?php echo get_price_url();?>#price-table1" class="js-page-link footer-nav__sub-item-link">ライセンス講習</a></li>
                    <li class="footer-nav__sub-item"><a href="<?php echo get_price_url();?>#price-table2" class="js-page-link footer-nav__sub-item-link">体験ダイビング</a></li>
                    <li class="footer-nav__sub-item"><a href="<?php echo get_price_url();?>#price-table3" class="js-page-link footer-nav__sub-item-link">ファンダイビング</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="footer-nav__items-quarter">
                <li class="footer-nav__item"><a href="<?php echo get_faq_url();?>" class="footer-nav__item-link">よくある質問</a></li>
                <li class="footer-nav__item"><a href="<?php echo get_privacy_url();?>" class="footer-nav__item-link footer-nav__item-link--span">プライバシー<span>ポリシー</span></a></li>
                <li class="footer-nav__item"><a href="<?php echo get_termsservice_url();?>" class="footer-nav__item-link">利用規約</a></li>
                <li class="footer-nav__item"><a href="<?php echo get_contactform_url();?>" class="footer-nav__item-link">お問い合わせ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="footer__copyright">Copyright&copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <a href="#" id="back-to-top">
    <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-back-to-top.svg" alt="back-to-top">
  </a>
  <?php wp_footer();?>
</body>
</html>