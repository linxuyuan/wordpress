<?php /* Template Name: 产品列表 */ ?>

<?php get_header(); ?>

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

                <div class="right_title"><span class="right_name">产品列表<font>news</font></span>
                    <div class="fast"><b>当前位置：</b>
                        <ul class="breadcrumbs">
                            <li><a href="http://xfl1688.com">首页</a></li>
                            <li> &gt; <a href="http://xfl1688.com/mlcc">产品分类</a> &gt; 贴片电容</li>
                        </ul>
                    </div>
                </div>
                <div class="product_pic">
                    <ul>

                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 4,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',//自定义分类法名称
                                    'terms' => 10 //id为64的分类。也可是多个分类array(12,64)
                                ),)
                        );
                        $loop = new WP_Query($args);
                        ?>
                        <?php if ($loop->have_posts()) : ?>

                            <?php
                            while ($loop->have_posts())  : $loop->the_post();
                                $imageUrl = get_product_img($post);
                                ?>
                                <li>
                                    <div class="product_item"><a href="<?php the_permalink(); ?>"><img
                                                src="<?php echo $imageUrl; ?>"
                                                alt="国巨贴片电容"></a>
                                        <dt class="product-item-info"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
                                    </div>
                                </li>

                            <?php endwhile; ?>
                        <?php else : ?>
                            <ul id="case-list" class="case-list"></ul>
                            <div id="case-empty" class="template-empty">
                                没有符合条件的案例
                            </div>
                        <?php endif; ?>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="pagenav"><?php native_pagenavi(); ?></div>

            </div>
            <div class="clear"></div>

        </div>

    </div>


<?php get_footer(); ?>