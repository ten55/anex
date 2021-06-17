<?php

/**
 * カスタムメニュー機能を有効にする
 */
add_theme_support('menus');
/**
 * アイキャッチ画像を有効にする 
 */
add_theme_support('post-thumbnails');

/**
 * NEWSページ
 * 投稿記事抜粋分の最大文字数と末尾記号を設定
 */
function twpp_change_excerpt_length( $length ) {
  return 130; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

function twpp_change_excerpt_more( $more ) {
    return '...';
  }
  add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

  add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
  $output = preg_replace( '/<\/a>\s*\((\d+)\)/', ' （$1）</a>', $output );
  return $output;
}

add_filter( 'wp_get_archives', 'my_get_archives', 10, 2 );
function my_get_archives( $output, $args ) {
    $output = preg_replace( '/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</spn></a>', $output );
    return $output;
  }

  function the_pagination($wp_query) {
    //global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
      return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
      'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
      'format'       => '',
      'current'      => max( 1, get_query_var('paged') ),
      'total'        => $wp_query->max_num_pages,
      //'prev_text'    => '&larr;',
      'prev_text'    => ' ',
      'next_text'    => ' ',
      'type'         => 'list',
      'end_size'     => 3,
      'mid_size'     => 3
    ) );
    echo '</nav>';
  }
?>