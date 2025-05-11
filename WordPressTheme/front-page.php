<?php get_header();?>
<main>
    <div class="main-visual page-main-visual">
      <div class="main-visual__wrapper">
        <div class="main-visual__header">
          <h2 class="main-visual__title">diving</h2>
          <div class="main-visual__subtitle">into the ocean</div>
        </div>
        <div class="main-visual__swiper swiper js-main-visual-swiper">
          <div class="main-visual__items swiper-wrapper">
            <?php $pictures = SCF::get('swiper_pictures'); ?>
            <?php if(!empty($pictures)):?>
              <?php  foreach($pictures as $item): ?>
                <div class="swiper-slide main-visual__item main-visual-card">
                 <?php if(!empty($item['picture'])):?>
                   <?php $image_full = wp_get_attachment_image_src($item['picture'] , 'full'); ?>
                   <?php $image_large = wp_get_attachment_image_src($item['picture'] , 'large'); ?>
                  <picture>
                    <source media='(min-width: 768px)' srcset='<?php echo $image_full[0]; ?>'>
                    <img src='<?php echo $image_large[0]; ?>' alt='swiper-picture'>
                  </picture>
                 <?php endif;?> 
                </div>
              <?php endforeach;?> 
            <?php endif;?>  
          </div>
        </div>
      </div>
    </div>

    <section class="campaign page-campaign">
      <div class="campaign__inner">
        <div class="campaign__title section-title">
          <p class="section-title__english">campaign</p>
          <h2 class="section-title__japanese">キャンペーン</h2>
        </div>
        <?php
        $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => '-1',
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="campaign__contents">
          <div class="campaign__swiper swiper js-campaign">
           <div class="campaign__items swiper-wrapper">
              <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                 <div class="campaign__item swiper-slide campaign-card">
                  <div class="campaign-card__wrapper">
                    <div class="campaign-card__img">
                     <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail();?>
                     <?php else: ?>  
                      <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                     <?php endif;?>
                    </div>
                    <!-- カスタムタクソノミー名を取得 -->
                    <?php
                      $terms = get_the_terms(get_the_ID(), 'campaign_category');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        $first_term = $terms[0]->name; // 最初のタームを取得
                      }else{
                        $first_term = '未分類';
                      }
                    ?>
                    <div class="campaign-card__contents">
                      <div class="campaign-card__business-type"><span><?php echo esc_html($first_term); ?></span></div>
                      <div class="campaign-card__business-title"><?php the_title();?></div>
                      <div class="campaign-card__price-wrapper">
                        <div class="campaign-card__price-title">全部コミコミ(お一人様)</div>
                        <div class="campaign-card__price-pre-after">
                          <?php $price_pre = '&yen;' . number_format(get_field('price-pre')); ?>
                          <?php $price_after = '&yen;' . number_format(get_field('price-after')); ?>
                          <div class="campaign-card__price-pre"><?php echo $price_pre; ?></div>
                          <div class="campaign-card__price-after"><?php echo $price_after; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>  
           </div>
          </div>
          <div class="swiper-button-prev u-desktop">
            <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-swiper-button-prev.svg" alt="swiper-prev">
          </div>
          <div class="swiper-button-next u-desktop">
            <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/icon-swiper-button-next.svg" alt="swiper-next">
          </div>
        </div>
        <div class="campaign__button">
          <a href="<?php echo esc_url(home_url( '/campaign/' ));?>" class="main-button">view more<span class="main-button__arrow"></span></a>
        </div>
      </div>
    </section> 

    <section class="about-us page-about-us">
      <div class="about-us__inner inner">
        <div class="about-us__title section-title">
          <p class="section-title__english">about us</p>
          <h2 class="section-title__japanese">私たちについて</h2>
        </div>
        <div class="about-us__contents message-block">
          <div class="message-block__img-wrapper">
            <div class="message-block__img-left">
              <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/about-left-pc.png" alt="about-left">
            </div>
            <div class="message-block__img-right">
              <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/about-right-pc.png" alt="about-right">
            </div>
          </div>
          <div class="message-block__sub-contents">
            <div class="message-block__sub-title">Dive into<br>the Ocean</div>
            <div class="message-block__sub-small-contents">
              <div class="message-block__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br
                >ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </div>
              <div class="message-block__button">
                <a href="<?php echo esc_url(home_url( '/about-us/' ));?>" class="main-button">view more<span class="main-button__arrow"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="information page-information">
      <div class="information__inner inner">
        <div class="information__title section-title">
          <p class="section-title__english">information</p>
          <h2 class="section-title__japanese">ダイビング情報</h2>
        </div>
        <div class="information__contents">
          <div class="information__img colorbox">
            <img src="<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/information-pc.png" alt="information-img">
          </div>
          <div class="information__sub-contents">
            <div class="information__sub-small-contents">
              <h3 class="information__sub-title">ライセンス講習</h3>
              <div class="information__text">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br
                >正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </div>
              <div class="information__button">
                <a href="<?php echo esc_url(home_url( '/information/' ));?>" class="main-button">view more<span class="main-button__arrow"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog page-blog">
      <div class="blog__inner inner">
        <div class="blog__title section-title">
          <p class="section-title__english section-title__english--white-pc">blog</p>
          <h2 class="section-title__japanese section-title__japanese--white-pc">ブログ</h2>
        </div>
        <?php
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => '3',
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="blog__cards blog-cards">
         <?php if ($the_query->have_posts()): ?>
           <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="" class="blog-cards__card blog-card">
                <div class="blog-card__img">
                  <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail();?>
                  <?php else: ?>  
                      <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                  <?php endif;?>
                </div>  
                <div class="blog-card__contents">
                  <time datetime="<?php the_time('c')?>" class="blog-card__date"><?php the_time('Y.m.d')?></time>
                  <div class="blog-card__card-title"><?php the_title();?></div>
                  <div class="blog-card__text"><?php the_excerpt(); ?></div>
                </div>
            </a>
          <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="blog__button">
          <a href="<?php echo esc_url(home_url( '/blog/' ));?>" class="main-button">view more<span class="main-button__arrow"></span></a>
        </div>
      </div>
    </section>
    <section class="voice page-voice">
      <div class="voice__inner inner">
        <div class="voice__title section-title">
          <p class="section-title__english">voice</p>
          <h2 class="section-title__japanese">お客様の声</h2>
        </div>
        <?php
        $args = array(
        'post_type' => 'voice',
        'posts_per_page' => '2',
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="voice__cards voice-cards">
         <?php if ($the_query->have_posts()): ?>
           <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
           <!-- カスタムタクソノミー名を取得 -->
           <?php
              $terms = get_the_terms(get_the_ID(), 'voice_category');
              if (!empty($terms) && !is_wp_error($terms)) {
                $first_term = $terms[0]->name; // 最初のタームを取得
              }else{
                $first_term = '未分類';
              }
            ?>
            <div class="voice-cards__card voice-card">
              <div class="voice-card__wrapper">
                <div class="voice-card__contents">
                  <div class="voice-card__sub-contents">
                    <div class="voice-card__age"><?php echo get_field('age').'('. get_field('sex').')'; ?></div>
                    <div class="voice-card__business-type"><?php echo esc_html($first_term); ?></div>
                  </div>
                  <div class="voice-card__card-title"><?php echo wp_trim_words(get_the_title(), 20,''); ?></div>
                </div>
                <div class="voice-card__img colorbox">
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                  <?php else: ?>  
                    <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/noimage.jpg' alt='no-image'>
                  <?php endif;?>
                </div>
              </div>
              <div class="voice-card__text">
                <?php the_excerpt(); ?>
              </div>
            </div>
          <?php endwhile; ?>
         <?php endif; wp_reset_postdata(); ?>
        </div>

         <div class="voice__button">
            <a href="<?php echo esc_url(home_url( '/voice/' ));?>" class="main-button">view more<span class="main-button__arrow"></span></a>
         </div>
      </div>
    </section>
    <section class="price page-price">
      <div class="price__inner inner">
        <div class="price__title section-title">
          <p class="section-title__english">price</p>
          <h2 class="section-title__japanese">料金一覧</h2>
        </div>
        <div class="price__contents">
           
          <div class="price__items price-items">
            <!-- 価格情報のpage-id -->
            <?php
               $price_id = '19';
            ?>
            <div class="price-items__item price-item">
              <!-- ライセンス情報 -->
              <?php
                $title1 = SCF::get('title1',$price_id);
                $list1 = SCF::get('list1',$price_id);
              ?>
              <?php if(!empty($title1) && !empty($list1)):?>
                <div class="price-item__title"><?php echo $title1?></div>
                <dl class="price-item__contents">
                  <?php foreach($list1 as $item): ?>
                    <div class="price-item__list">
                      <dt class="price-item__term"><?php echo $item['course1'];?></dt>
                      <dd class="price-item__description"><?php echo $item['price1'];?></dd>
                    </div>
                  <?php endforeach;?>  
                </dl>
              <?php endif;?>
            </div>
            <div class="price-items__item price-item">
              <?php
                  $title2 = SCF::get('title2',$price_id);
                  $list2 = SCF::get('list2',$price_id);
              ?>
              <?php if(!empty($title2) && !empty($list2)):?>
                <div class="price-item__title"><?php echo $title2?></div>
                <dl class="price-item__contents">
                <?php foreach($list2 as $item): ?>
                  <div class="price-item__list">
                    <dt class="price-item__term"><?php echo $item['course2'];?></dt>
                    <dd class="price-item__description"><?php echo $item['price2'];?></dd>
                  </div>
                <?php endforeach;?>
                </dl>
              <?php endif;?>
            </div>
            <div class="price-items__item price-item">
              <?php
                $title3 = SCF::get('title3',$price_id);
                $list3 = SCF::get('list3',$price_id);
              ?>
              <?php if(!empty($title3) && !empty($list3)):?>
                <div class="price-item__title"><?php echo $title3?></div>
                <dl class="price-item__contents">
                <?php foreach($list3 as $item): ?>
                  <div class="price-item__list">
                    <dt class="price-item__term"><?php echo $item['course3'];?></dt>
                    <dd class="price-item__description"><?php echo $item['price3'];?></dd>
                  </div>
                <?php endforeach;?>
                </dl>
              <?php endif;?> 
            </div>
            <div class="price-items__item price-item">
              <?php
                $title4 = SCF::get('title4',$price_id);
                $list4 = SCF::get('list4',$price_id);
              ?>
              <?php if(!empty($title4) && !empty($list4)):?>
                <div class="price-item__title"><?php echo $title4?></div>
                <dl class="price-item__contents">
                <?php foreach($list4 as $item): ?>
                  <div class="price-item__list">
                    <dt class="price-item__term"><?php echo $item['course4'];?></dt>
                    <dd class="price-item__description"><?php echo $item['price4'];?></dd>
                  </div>
                  <?php endforeach;?>
                </dl>
              <?php endif;?> 
            </div>
          </div>
          <div class="price__img-outer">
              <div class="price__img-inner colorbox">
                <picture>
                  <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/price-pc.png'>
                  <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/price-sp.png' alt='price-img'>
                </picture>
              </div>
          </div>
        </div>
        <div class="price__button">
          <a href="<?php echo esc_url(home_url( '/price/' ));?>" class="main-button">view more<span class="main-button__arrow"></span></a>
        </div>
      </div>
    </section>
 
<?php get_footer();?>