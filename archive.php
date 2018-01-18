<?php /* Template Name: 更多新闻列表 */ ?>
<?php get_header(); ?>
<!-- Column 1 / Content -->
<div class="main">
    <div class="wrap-body">
        <div class="main-left">
            <p class="category-box">产品分类</p>
            <div class="category-content">
                <ul>
                    <li>
                        <a href="#">贴片电容</a>
                    </li>
                    <li>
                        <a href="#">贴片电阻</a>
                    </li>
                    <li>
                        <a href="#">电解电容</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main-right">

            <div class="right_title"><span class="right_name">新闻列表<font>news</font></span>
                <div class="fast"><b>当前位置：</b>
                    <ul class="breadcrumbs">
                        <li><a href="http://xfl1688.com">首页</a></li>
                        <li> &gt; <a href="news">新闻列表</a></li>
                    </ul>
                </div>
            </div>
            <div class="news-more-box">
                <ul class="news-more-list">
                    <?php
                    global $post;
                    $post_tags = wp_get_post_tags($post->ID);
                    $args = array(
                        'post__not_in' => array($post->ID),
                        'showposts' => 5,
                        'paged' => $paged// 显示相关文章数量
                    );
                    query_posts($args);

                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            update_post_caches($posts); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                        }
                    } else {
                        echo '<li>* 暂无相关文章2</li>';
                    }
                    ?>
                </ul>


            </div>
            <div class="pagenav"><?php native_pagenavi(); ?></div>


        </div>
        <div class="clear"></div>
    </div>
</div>


<?php get_footer(); ?>

