<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Price</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/price-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/price-sub-mv-sp.png' alt='price-mv'>
        </picture>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <div class="archive-price page-archive-price common-back-fish">
        <div class="archive-price__inner inner">
          <div class="archive-price__tables price-tables">
          <!-- ライセンス情報 -->
           <?php
              $title1 = SCF::get('title1');
              $list1 = SCF::get('list1');
              $count = 0;
              $rspan = 0;
           ?>
           <?php if(!empty($title1) && !empty($list1)):?>
            <table id="price-table1" class="price-tables__table price-table">
              <tr>
                <th class="price-table__head-sp" colspan="2"><?php echo esc_html($title1);?></th>
              </tr>
              <!-- rowspanのためのカウント -->
              <?php foreach($list1 as $item) {$rspan = $rspan + 1;}?>
              
              <?php  foreach($list1 as $item): ?>
                <tr>
                <?php if($count == 0):?>
                  <th class="price-table__head-pc" rowspan="<?php echo $rspan ?>"><?php echo esc_html($title1);?></th>
                  <?php $count = $count + 1;?>
                <?php endif;?>
                <td class="price-table__data">
                  <span class="u-desktop"><?php echo esc_html($item['course1']);?></span>
                  <span class="u-mobile"><?php echo esc_html(nl2br($item['course1']));?></span>
                </td>
                <td class="price-table__price"><?php echo esc_html($item['price1']);?></td>
              </tr>
              <?php  endforeach;?>
            </table>
          <?php endif;?>

            <?php
              $title2 = SCF::get('title2');
              $list2 = SCF::get('list2');
              $count = 0;
              $rspan = 0;
           ?>
           <?php if(!empty($title2) && !empty($list2)):?>
            <table id="price-table2" class="price-tables__table price-table">
              <tr>
                <th class="price-table__head-sp" colspan="2"><?php echo esc_html($title2);?></th>
              </tr>
               <!-- rowspanのためのカウント -->
               <?php foreach($list2 as $item) {$rspan = $rspan + 1;}?>
              
              <?php  foreach($list2 as $item): ?>
                <tr>
                <?php if($count == 0):?>
                  <th class="price-table__head-pc" rowspan="<?php echo $rspan ?>"><?php echo esc_html($title2);?></th>
                  <?php $count = $count + 1;?>
                <?php endif;?>
                <td class="price-table__data">
                  <span class="u-desktop"><?php echo esc_html($item['course2']);?></span>
                  <span class="u-mobile"><?php echo esc_html(nl2br($item['course2']));?></span>
                </td>
                <td class="price-table__price"><?php echo esc_html($item['price2']);?></td>
              </tr>
              <?php  endforeach;?>
            </table>
           <?php endif;?>

           <?php
              $title3 = SCF::get('title3');
              $list3 = SCF::get('list3');
              $count = 0;
              $rspan = 0;
           ?>
           <?php if(!empty($title3) && !empty($list3)):?>
            <table id="price-table3" class="price-tables__table price-table">
              <tr>
                <th class="price-table__head-sp" colspan="2"><?php echo $title3?></th>
              </tr>
               <!-- rowspanのためのカウント -->
               <?php foreach($list3 as $item) {$rspan = $rspan + 1;}?>
              
              <?php  foreach($list3 as $item): ?>
                <tr>
                <?php if($count == 0):?>
                  <th class="price-table__head-pc" rowspan="<?php echo $rspan ?>"><?php echo esc_html($title3);?></th>
                  <?php $count = $count + 1;?>
                <?php endif;?>
                <td class="price-table__data">
                  <span class="u-desktop"><?php echo esc_html($item['course3']);?></span>
                  <span class="u-mobile"><?php echo esc_html(nl2br($item['course3']));?></span>
                </td>
                <td class="price-table__price"><?php echo esc_html($item['price3']);?></td>
              </tr>
              <?php  endforeach;?>
            </table>
           <?php endif;?>

           <?php
              $title4 = SCF::get('title4');
              $list4 = SCF::get('list4');
              $count = 0;
              $rspan = 0;
           ?>
           <?php if(!empty($title4) && !empty($list4)):?>
            <table id="price-table4" class="price-tables__table price-table">
              <tr>
                <th class="price-table__head-sp" colspan="2"><?php echo esc_html($title4);?></th>
              </tr>
               <!-- rowspanのためのカウント -->
               <?php foreach($list4 as $item) {$rspan = $rspan + 1;}?>
              
              <?php  foreach($list4 as $item): ?>
                <tr>
                <?php if($count == 0):?>
                  <th class="price-table__head-pc" rowspan="<?php echo $rspan ?>"><?php echo esc_html($title4);?></th>
                  <?php $count = $count + 1;?>
                <?php endif;?>
                <td class="price-table__data">
                  <span class="u-desktop"><?php echo esc_html($item['course4']);?></span>
                  <span class="u-mobile"><?php echo esc_html(nl2br($item['course4']));?></span>
                </td>
                <td class="price-table__price"><?php echo esc_html($item['price4']);?></td>
              </tr>
              <?php  endforeach;?>
            </table>
           <?php endif;?>
          </div>
        </div>
    </div>
<?php get_footer();?>