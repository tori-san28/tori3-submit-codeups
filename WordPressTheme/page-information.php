<?php get_header();?>
<section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Information</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info-sub-mv-sp.png' alt='aboutus-mv'>
        </picture>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>
    
    <section class="archive-information page-archive-information common-back-fish common-back-fish--information">
      <div id="tab-contents" class="archive-information__inner inner">
        <ul class="archive-information__tabs tab-list">
          <li class="tab-list__menu js-tab-menu is-active" data-number="tab01">ライセンス<br class="u-mobile">講習</li>
          <li class="tab-list__menu js-tab-menu" data-number="tab02">ファン<br class="u-mobile">ダイビング</li>
          <li class="tab-list__menu js-tab-menu" data-number="tab03">体験<br class="u-mobile">ダイビング</li>
        </ul>
  
        <div id="tab01" class="archive-information__contents js-tab-contents is-active">
          <div class="archive-information__wrapper">
            <div class="archive-information__texts">
              <h2 class="archive-information__title">ライセンス講習</h2>
              <p class="archive-information__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="archive-information__img">
              <picture>
                <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info1-pc.png'>
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info1-sp.png' alt='info1'>
              </picture>
            </div>
          </div>
        </div>
  
        <div id="tab02" class="archive-information__contents js-tab-contents">
          <div class="archive-information__wrapper">
            <div class="archive-information__texts">
              <h2 class="archive-information__title">ファンダイビング</h2>
              <p class="archive-information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="archive-information__img">
              <picture>
                <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info2-pc.png'>
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info2-sp.png' alt='info2'>
              </picture>
            </div>
          </div>
        </div>
  
        <div id="tab03" class="archive-information__contents js-tab-contents">
          <div class="archive-information__wrapper">
            <div class="archive-information__texts">
              <h2 class="archive-information__title">体験ダイビング</h2>
              <p class="archive-information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="archive-information__img">
              <picture>
                <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info3-pc.png'>
                <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/info3-sp.png' alt='info3'>
              </picture>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<?php get_footer();?>