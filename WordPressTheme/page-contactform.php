<?php get_header();?>
<main>
    <section class="sub-main-visual sub-main-visual--campaign page-sub-main-visual">
      <h1 class="sub-main-visual__title">Contact</h1>
      <div class="sub-main-visual__item">
        <picture>
          <source media='(min-width: 768px)' srcset='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/contactform-sub-mv-pc.png'>
          <img src='<?php echo esc_url(get_theme_file_uri());?>/assets/images/common/contactform-sub-mv-sp.png' alt='contact-mv'>
        </picture>
      </div>
    </section>
    
    <?php get_template_part('breadcrumb'); ?>

    <div class="contact-form page-contact-form common-back-fish">
      <div class="contact-form__inner inner">
        <div class="contact-form__error">
          <p>※必須項目が入力されていません。<span class="u-mobile"><br>　</span>入力してください。</p>
        </div>
        <div class="contact-form__fields form-field">
          <form id="js-form" action="">
            <dl class="form-field__item">
              <dt>お名前<span>必須</span></dt>
              <dd><input type="text" name="name" placeholder="沖縄　太郎" required></dd>
            </dl>
            <dl class="form-field__item">
              <dt>メールアドレス<span>必須</span></dt>
              <dd><input type="email" name="email" placeholder="aaa000@ggmail.com" required></dd>
            </dl>
            <dl class="form-field__item">
              <dt>電話番号<span>必須</span></dt>
              <dd><input type="tel" name="tel" placeholder="000-0000-0000" required>
              </dd>
            </dl>
            <dl class="form-field__item form-field__item--checkbox">
              <dt>お問合せ項目<span>必須</span></dt>
              <dd class="form-field__checkbox form-checkbox">
                <label>
                  <input type="checkbox" name="inquiry" checked>
                  <span>ダイビング講習について</span>
                </label>
                <label>
                  <input type="checkbox" name="inquiry">
                  <span>ファンデイビングについて</span>
                </label>
                <label>
                  <input type="checkbox" name="inquiry">
                  <span>体験ダイビングについて</span>
                </label>
              </dd>
            </dl>
            <dl class="form-field__item form-field__item--select">
              <dt>キャンペーン</dt>
              <dd class="form-field__select">
                  <select class="form-select">
                      <option hidden>キャンペーン内容を選択</option>
                      <option name="campaign" value="ライセンス取得">ライセンス取得</option>
                      <option name="campaign" value="貸切体験ダイビング">貸切体験ダイビング</option>
                      <option name="campaign" value="ナイトダイビング">ナイトダイビング</option>
                  </select>
              </dd>
            </dl>
            <dl class="form-field__item form-field__item--textarea">
              <dt>お問合せ内容<span>必須</span></dt>
              <dd>
                  <textarea name="message" required></textarea>
              </dd>
            </dl>
            <div class="form-field__personal-info form-checkbox form-checkbox--personal-info">
              <label>
                <input type="checkbox" name="p-info">
                <span>個人情報の取り扱いについて同意のうえ<br class="u-mobile">送信します。</span>
              </label>
            </div>
            <div class="form-field__button">
              <button id="js-submit" type="submit" class="main-button main-button--send">send
                <span class="main-button__arrow main-button__arrow--send"></span></button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  
<?php get_footer();?>