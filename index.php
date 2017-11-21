<?php get_header(); ?>

    <!--效果html开始-->
    <div class="slider">
        <ul>
            <li><a href="" target="_blank"><img src="<?php echo RES_PATH ?>/img/banner1.jpg" alt=""></a></li>
            <li><a href="" target="_blank"><img src="<?php echo RES_PATH ?>/img/banner2.jpg" alt=""></a></li>
        </ul>
    </div>

    <div class="title">最新产品展示</div>

    <div class="product_pic">
        <ul>
            <!--

            <div class="clear"></div>
            <li>
                <div class="product_item"><a href="#"><img src="<?php echo RES_PATH ?>/img/product1.png"
                                                           alt="国巨贴片电容"></a>
                    <dt><a href="http://xfl1688.com">国巨贴片电容</a></dt>
                </div>
            </li>
            <li>
                <div class="product_item"><a href="#"><img src="<?php echo RES_PATH ?>/img/product1.png"
                                                           alt="国巨贴片电容"></a>
                    <dt><a href="http://xfl1688.com">国巨贴片电容</a></dt>
                </div>
            </li>
            -->

            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'tax_query' => array(
                    'relation' => 'AND',
                    $array_case_cat,
                )
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
                            <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
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
    <div class="linkBtnbox"><a href="<?php bloginfo('template_directory'); ?>/single-product.php">
            <div class="linkBtn">查看更多产品</div>
        </a></div>
    <div class="title">公司简介</div>
    <div class="about"><span style="font-weight: bold">深圳市新富林电子有限公司</span><br>
        是一家专业从事电子元器件配套供应商，主营全系列铝电解电容，电阻，二三极管，贴片电容，贴片电阻，电感，LED和USB连接器。 <br>
        我们整合了最优质的电子元器件资源，与国内外100多家龙头企业对接，如三星，TDK, 厚生，MIC, 广泛应用于数码、通讯、仪器仪表、汽车，移动通信、程控交换机、计算机、家用电器、电动玩具、手机、电源驱动及消费电子等领域!
        我们秉承诚信经营，质量第一的宗旨，为客户提供了方便快捷放心的一站式配套服务。
    </div>
    <div class="linkBtnbox"><a href="m/about_us">
            <div class="linkBtn">查看详细介绍</div>
        </a></div>
    <div class="title">新闻资讯</div>

    <div class="news">
        <ul>

            <?php
            global $post;
            $post_tags = wp_get_post_tags($post->ID);
            $args = array(
                'post__not_in' => array($post->ID),
                'showposts' => 5, // 显示相关文章数量
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
    <div class="linkBtnbox"><a href="archive.php">
            <div class="linkBtn">查看更多新闻</div>
        </a></div>


    <script>
        $(".slider").yxMobileSlider({width: 640, height: 320, during: 3000})
    </script>
    <!--效果html结束-->

<?php get_footer(); ?>