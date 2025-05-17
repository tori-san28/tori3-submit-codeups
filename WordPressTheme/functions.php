<?php

//アイキャッチの有効化
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );
//cssとjsの読み込み
function my_script_init()
{
	//css
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',array(), null );
	wp_enqueue_style( 'swiper-css','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(),null);
	wp_enqueue_style( 'style-css',  get_theme_file_uri('/assets/css/style.css'), false);
	//js
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script( 'inview-js',  get_theme_file_uri('/assets/js/jquery.inview.min.js'), array( 'jquery' ), null, true );
	wp_enqueue_script( 'script-js', get_theme_file_uri('/assets/js/script.js'), array( 'jquery' ),  null, true );
}
add_action('wp_enqueue_scripts', 'my_script_init');

//投稿の名称を変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
	}
	function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
	}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

//管理バー（Admin Bar）を非表示
add_filter('show_admin_bar', '__return_false');

//wordpressの管理画面で不要な画面を非表示
function remove_dashboard_widgets() {
   	remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); // サイトヘルスステータス
  	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
  	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
  	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
  	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress イベントとニュース
	remove_action('welcome_panel', 'wp_welcome_panel'); 
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

//カスタムダッシュボードウィジェットでよく使うメニューへのリンクを表示
function custom_dashboard_widget() {
    wp_add_dashboard_widget(
        'custom_quick_links', // ウィジェットID
        'よく使うメニュー',   // タイトル
        'custom_dashboard_widget_display' // 表示関数
    );
}

add_action('wp_dashboard_setup', 'custom_dashboard_widget');

function custom_dashboard_widget_display() {
    echo '<ul>';
	echo '<li><a href="' . admin_url('edit.php?post_type=post') . '">ブログ一覧</a></li>';
	echo '<li><a href="' . admin_url('edit.php?post_type=campaign') . '">キャンペーン一覧</a></li>';
	echo '<li><a href="' . admin_url('edit.php?post_type=voice') . '">お客様の声一覧</a></li>';
	echo '<li><a href="' . admin_url('post.php?post=' . 7 . '&action=edit') . '">トップページへのリンク（メインビュー写真の追加変更）</a></li>';
	echo '<li><a href="' . admin_url('post.php?post=' . 11 . '&action=edit') . '">私たちについてページへのリンク（ギャラリーの写真追加）</a></li>';
	echo '<li><a href="' . admin_url('post.php?post=' . 19 . '&action=edit') . '">料金ページへのリンク(新しい料金コースリストの追加)</a></li>';
	echo '<li><a href="' . admin_url('post.php?post=' . 27 . '&action=edit') . '">FAQページへのリンク(新しい質問と回答の追加)</a></li>';
    echo '<li><a href="' . admin_url('post.php?post=' . 21 . '&action=edit') . '">プライバシーポリシーページへのリンク</a></li>';
	echo '<li><a href="' . admin_url('post.php?post=' . 23 . '&action=edit') . '">利用規約ページへのリンク</a></li>';
	echo '</ul>';
}

//各ページのurlを取得する関数
function get_homepage_url() {return esc_url( home_url( '/' ) );}
function get_campaign_url() {return esc_url( home_url( '/campaign/' ) );}
function get_aboutus_url() {return esc_url( home_url( '/about-us/' ) );}
function get_information_url() {return esc_url( home_url( '/information/' ) );}
function get_blog_url() {return esc_url( home_url( '/blog/' ) );}
function get_voice_url() {return esc_url( home_url( '/voice/' ) );}
function get_price_url() {return esc_url( home_url( '/price/' ) );}
function get_faq_url() {return esc_url( home_url( '/faq/' ) );}
function get_contactform_url() {return esc_url( home_url( '/contactform/' ) );}
function get_privacy_url() {return esc_url( home_url( '/privacy/' ) );}
function get_termsservice_url() {return esc_url( home_url( '/terms/' ) );}
function get_sitemappage_url() {return esc_url( home_url( '/sitemap/' ) );}

// home.php（つまりブログのホームページ）に表示される投稿数（記事数）を変更
function change_home_posts_per_page( $query ) {
		if ( $query->is_home() && $query->is_main_query() ) {
			$query->set( 'posts_per_page', 10 ); // 表示件数を6件に変更（必要に応じて変更）
		}
	}
add_action( 'pre_get_posts', 'change_home_posts_per_page' );

function change_posts_per_page( $query ) {
    // 管理画面やメインクエリ以外には適用しない
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }
    //１ページあたりの表示数を6へ変更
    if ( is_post_type_archive( 'campaign' ) ) {
         $query->set( 'posts_per_page', 4 );
     }
	 if ( is_post_type_archive( 'voice' ) ) {
		$query->set( 'posts_per_page', 6 );
	} 
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

// ContactForm7で自動挿入されるPタグ、brタグを削除
  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
  function wpcf7_autop_return_false() {
    return false;
  }

// ContactForm7でキャンペーン項目の選択肢をキャンペーンページカテゴリーから動的取得
function custom_get_select_values($tag, $unused) {
	//tagの名前をチェック
	if ( $tag['name'] != 'select-item' ) {
			return $tag;
	}
    // データを取得する
      $terms = get_terms( array(
            'taxonomy' => 'campaign_category',
            'hide_empty' => false,
      ));
	if(!is_wp_error($terms) && !empty($terms)){
		$tag['raw_values'] = [];
        $tag['values'] = [];
		$tag['raw_values'][] = "";
        $tag['values'][] = "";
		foreach ( $terms as $term ) {
      		$tag['raw_values'][] = $term->name;
            $tag['values'][] = $term->name;
    	}
	}
  return $tag;
}
add_filter('wpcf7_form_tag', 'custom_get_select_values', 10 ,2);

// Contact Form7の送信ボタンをクリックした後の遷移先設定
 function add_origin_thanks_page() {
	?>
   <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
           window.location.href = '<?php echo esc_url(get_permalink(17)); ?>'; 
        }, false);
    </script>
	 <?php
 }
 add_action( 'wp_footer', 'add_origin_thanks_page' );

//brタグを残したまま抜粋を行い文字数を指定できる独自関数 
function get_custom_excerpt_with_br($content, $length = 80) {
    // <br> タグ以外のHTMLタグを除去
    $content = strip_tags($content, '<br>');

    // 全角スペース・改行などを正規化
    $content = trim(preg_replace('/\s+/', ' ', $content));

    // 指定した文字数で切り取り（マルチバイト対応）
    if (mb_strlen($content) > $length) {
        $excerpt = mb_substr($content, 0, $length) . '...';
    } else {
        $excerpt = $content;
    }

    return $excerpt;
}

//PVカウント用のコード追加
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function get_post_views($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    return $count ? $count : '0';
}

?>