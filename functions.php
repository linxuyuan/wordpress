<?php

function my_custom_post_movie() {
    $labels = array(
        'name'               => _x( '产品', 'post type 名称' ),
        'singular_name'      => _x( '产品', 'post type 单个 item 时的名称，因为英文有复数' ),
        'add_new'            => _x( '添加产品', '添加新产品的链接名称' ),
        'add_new_item'       => __( '新建一个产品' ),
        'edit_item'          => __( '编辑产品' ),
        'new_item'           => __( '新产品' ),
        'all_items'          => __( '所有产品' ),
        'view_item'          => __( '查看产品' ),
        'search_items'       => __( '搜索产品' ),
        'not_found'          => __( '没有找到有关产品' ),
        'not_found_in_trash' => __( '回收站里面没有相关产品' ),
        'parent_item_colon'  => '',
        'menu_name'          => '产品'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => '我们网站的产品信息',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true
    );
    register_post_type( 'product', $args );
}

add_action( 'init', 'my_custom_post_movie' );

/**
 * 添加产品分类
 */

function my_taxonomies_movie() {
    $labels = array(
        'name'              => _x( '产品分类', 'taxonomy 名称' ),
        'singular_name'     => _x( '产品分类', 'taxonomy 单数名称' ),
        'search_items'      => __( '搜索产品分类' ),
        'all_items'         => __( '所有产品分类' ),
        'parent_item'       => __( '该产品分类的上级分类' ),
        'parent_item_colon' => __( '该产品分类的上级分类：' ),
        'edit_item'         => __( '编辑产品分类' ),
        'update_item'       => __( '更新产品分类' ),
        'add_new_item'      => __( '添加新的产品分类' ),
        'new_item_name'     => __( '新产品分类' ),
        'menu_name'         => __( '产品分类' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'product_category', 'product', $args );
}
add_action( 'init', 'my_taxonomies_movie', 0 );

/* 根据文章对象获取文章图片 */
function getImageByPost($post) {
    $cate = get_the_category();
    //echo $cate[0]->cat_ID;
    //$post->post_parent->term_id
    if (has_post_thumbnail($post->ID)) {
        $image= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
        $image = $image[0];
        return $image;
    } elseif (strlen($catImageUrl = getCategoryImage($cate[0]->cat_ID)) > 0) {
        return $catImageUrl;
    } elseif (strlen(getFirstImage($post->ID)) > 0) {
        $image= getFirstImage($post->ID);
        return $image;
    } else {

        $theme = get_option('themes');
        if ($theme == '10') {
            return get_stylesheet_directory_uri() . '/asset/img/themes/post-default10.jpg'; // TODO 常量化
        } elseif ($theme == 11) {
            return get_stylesheet_directory_uri() . '/asset/img/themes/post-default11.jpg';
        } elseif ($theme == 12) {
            return get_stylesheet_directory_uri() . '/asset/img/themes/post-default12.jpg';
        } else {
            return get_stylesheet_directory_uri() . '/asset/img/themes/post-default10.jpg'; // TODO
        }

    }
}


/**
 * 根据文章对象获取第一张图片
 * @param $post  文章对象
 * @return string
 */

function get_product_img( $post ) {

    $id = $post->ID;

// 如果设置了缩略图
    $post_thumbnail_id = get_post_thumbnail_id( $id );
    if ( $post_thumbnail_id ) {
        $output = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
        $first_img = $output[0];
    }
    else { // 没有缩略图，查找文章中的第一幅图片
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches [1] [0];

        if(empty($first_img)){ // 既没有缩略图，文中也没有图，设置一幅默认的图片
            $first_img = "../asset/img/product1.png";
        }
    }
    return $first_img;
}


/**
 * 数字分页函数
 * 因为wordpress默认仅仅提供简单分页
 * 所以要实现数字分页，需要自定义函数
 * @Param int $range            数字分页的宽度
 * @Return string|empty        输出分页的HTML代码
 */
/* Pagenavi */
/*@分页功能*/
function native_pagenavi(){
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars["paged"] > 1 ? $current = $wp_query->query_vars["paged"] : $current = 1;
    $pagination = array(
        "base" => @add_query_arg("page","%#%"),
        "format" => "",
        "total" => $wp_query->max_num_pages,
        "current" => $current,
        "prev_text" => "« ",
        "next_text" => " »"
    );
    if( $wp_rewrite->using_permalinks() )
        $pagination["base"] = user_trailingslashit( trailingslashit( remove_query_arg("s",get_pagenum_link(1) ) ) . "page/%#%/", "paged");
    if( !empty($wp_query->query_vars["s"]) )
        $pagination["add_args"] = array("s"=>get_query_var("s"));
    echo paginate_links($pagination);
}

register_nav_menu( 'header-menu', '顶部导航' );
