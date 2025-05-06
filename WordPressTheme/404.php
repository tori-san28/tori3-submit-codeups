<?php get_header();?>
<main>
    <section class="not-found page-not-found">
      <div class="not-found__inner inner">
        <?php get_template_part('breadcrumb'); ?>
        <div class="not-found__contents">
          <h1 class="not-found__main-title">404</h1>
          <p class="not-found__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
          <div class="not-found__button">
            <a href="" class="main-button main-button--not-found">page TOP<span class="main-button__arrow main-button__arrow--not-found"></span></a>
          </div>
        </div>
      </div>
    </section>
  </main>
  
<?php get_footer();?>