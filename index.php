<?php get_header(); ?>
<!--效果html开始-->

<div id="slideBox" class="slideBox">
    <div class="hd">
        <ul>
            <li>1</li>
            <li>2</li>
        </ul>
    </div>
    <div class="bd">
        <ul>
            <li><a href="http://xfl1688.com/" target="_blank"><img
                        src="<?php echo RES_PATH ?>/img/banner1.jpg"/></a></li>
            <li><a href="http://xfl1688.com/" target="_blank"><img
                        src="<?php echo RES_PATH ?>/img/banner2.jpg"/></a></li>
        </ul>
    </div>

    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>

</div>


<div class="main bg-grey">
    <div class="wrap-body">
        <div class="main-left">
            <p class="category-box">产品分类</p>
            <div class="category-content">
                <!--自定义文章类型分类查询-->
                <?php

                $taxonomy = 'product';
                $orderby = 'name';
                $show_count = 0; // 1 为是, 0 为否
                $pad_counts = 0; // 1 为是, 0 为否
                $hierarchical = 1; // 1 为是, 0 为否
                $title = '';

                $args = array(
                    'taxonomy' => $taxonomy,
                    'orderby' => $orderby,
                    'show_count' => $show_count,
                    'pad_counts' => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li' => $title
                );
                ?>

                <ul>
                    <?php wp_list_categories($args); ?>
                </ul>
                <ul>
                    <li>
                        <a href="http://xfl1688.com/mlcc">贴片电容</a>
                    </li>
                    <li>
                        <a href="http://xfl1688.com/mlcc">贴片电容</a>
                    </li>
                    <li>
                        <a href="http://xfl1688.com/mlcc">铝电解电容</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main-right">
            <div class="slideTxtBox">
                <div class="hd">
                    <ul>
                        <li><a href="#">贴片电容</a></li>
                        <li><a href="#">贴片电阻</a></li>
                        <li><a href="#">电解电容</a></li>
                        <li><a href="#">二三极管</a></li>
                    </ul>
                </div>
                <div class="bd">

                    <ul id="recommend-list" class="index-product-list">
                        <?php
                        global $post;
                        $post_tags = wp_get_post_tags($post->ID);
                        $args = array(
                            'post_type' => 'product', //自定义文章类型名称
                            'showposts' => 10,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',//自定义分类法名称
                                    'terms' => 10 //id为64的分类。也可是多个分类array(12,64)
                                ),
                            )
                        );
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post();
//                                $imageUrl = getImageByPost($post);
                                ?>
                                <li class="item recommend-item">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                        <img class="img" src="<?php echo RES_PATH ?>/img/yageo_mlcc.jpg"  width="178" height="178">
                                        <div class="title"><?php the_title();?></div>
                                    </a>
                                </li>

                            <?php endwhile; wp_reset_query(); } ?>


                    </ul>
                    <ul id="recommend-list" class="index-product-list">

                        <?php
                        $args = array(
                            'post_type' => 'product', //自定义文章类型名称
                            'showposts' => 10,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',//自定义分类法名称
                                    'terms' => 10 //id为64的分类。也可是多个分类array(12,64)
                                ),
                            )
                        );
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post();
                                ?>
                                <li class="item recommend-item">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                        <img class="img" width="178" height="178"
                                            src="<?php echo RES_PATH ?>/img/uniohm_resistor.jpg" >
                                        <div class="title"><?php the_title();?></div>
                                    </a>
                                </li>

                            <?php endwhile; wp_reset_query(); } ?>


                    </ul>
                    <ul id="recommend-list" class="index-product-list">

                        <?php
                        $args = array(
                            'post_type' => 'product', //自定义文章类型名称
                            'showposts' => 10,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',//自定义分类法名称
                                    'terms' => 10 //id为64的分类。也可是多个分类array(12,64)
                                ),
                            )
                        );
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post();
                                ?>
                                <li class="item recommend-item">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                        <img class="img" src="<?php echo RES_PATH ?>/img/yageo_mlcc.jpg" width="178" height="178">
                                        <div class="title"><?php the_title();?></div>
                                    </a>
                                </li>

                            <?php endwhile; wp_reset_query(); } ?>

                    </ul>

                </div>
            </div>

        </div>
        <div class="clear"></div>

    </div>

</div>

<div class="banner02">
    <img src="<?php echo RES_PATH ?>/img/banner6.jpg">
</div>
<div class="advantage">
    <div class="advantage-left">
        <div class="adv01">
            <h3>
                <p class="title">自有超大工厂</p>
                <small class="sub-title">铝电解电容生产厂家</small>
            </h3>
            <p>全系列铝电解电容器，低压中高压,高频低阻</p>
            <p>品类齐全，全尺寸，现货库存，交货及时</p>
        </div>
        <div class="adv02">
            <h3>
                <p class="title">全系列产品</p>
                <small class="sub-title">三星国巨贴片电容</small>
            </h3>
            <p>三星国巨华新贴片电容代理商</p>
            <p>产品规格齐全，长期大量库存现货，快速配套，灵活满足多元化需求</p>
        </div>

    </div>

    <div class="advantage-right">
        <img class="advantage-img" src="<?php echo RES_PATH ?>/img/advtange1.jpg" width="450">
    </div>
    <div class="clear"></div>

    <div class="advantage-right">
        <img class="advantage-img" src="<?php echo RES_PATH ?>/img/advtange1.jpg" width="450">
    </div>

    <div class="advantage-left">
        <div class="adv01">
            <h3>
                <p class="title">电子元器件配套</p>
                <small class="sub-title">为厂商提供一站式服务</small>
            </h3>
            <p>经验丰富，实力超群 产品热销全国，企业荣膺多项殊荣</p>
            <p>大量库存，货源价格稳定，贴片电容，电阻，电感，晶振，二三极管，种类齐全</p>
        </div>
        <div class="adv02">
            <h3>
                <p class="title">原装品质 售后无忧</p>
                <small class="sub-title">专业电子元器件供应商</small>
            </h3>
            <p>与国内外元器件厂家和代理商合作，为确保每颗物料来自原厂</p>
            <p>17年 电子行业经验，送货上门，物流直达，快速相应客户需求</p>
        </div>

    </div>


    <div class="clear"></div>
</div>
<div class="cooperate">
    <h2>代理品牌</h2>
    <h3>优质的产品赢得千万家客户的信赖</h3>
    <div class="company-list">
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate1.png">
            <span>三星贴片电容</span>
        </div>
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate2.png">
            <span>长电科技</span>
        </div>
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate3.png">
            <span>风华高科</span>
        </div>
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate4.jpg">
            <span>国巨贴片电容</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="company-list">
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate5.jpg">
            <span>村田贴片电容</span>
        </div>
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate6.jpg">
            <span>华新贴片电容</span>
        </div>
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate7.jpg">
            <span>爱普生晶振</span>
        </div>
        <div class="company-list-item">
            <img src="<?php echo RES_PATH ?>/img/cooperate8.jpg">
            <span>厚声UniOhm</span>
        </div>
        <div class="clear"></div>
    </div>

</div>
<div class="layout-news wrap-body">
    <div class="news-box">
        <h2 class="box-title">
            新闻中心
            <span class="sub-title">News</span>
            <a class="more" href="/news">+</a>
        </h2>
        <ul class="news-list">
            <?php
            global $post;
            $post_tags = wp_get_post_tags($post->ID);
            $args = array(

                'showposts' => 5,// 显示相关文章数量
                'order' => DESC
            );
            query_posts($args);

            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    update_post_caches($posts); ?>

                    <li class="item">
                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div>
                            <div class="time"><?php the_time(get_option('date_format')) ?></div>
                        </div>
                    </li>
                    <?php
                }
            } else {
                echo '<li>* 暂无相关文章2</li>';
            }
            ?>
        </ul>

    </div>
    <div class="about-us">
        <h2 class="box-title" style="border-bottom: 2px solid #ccc;padding-bottom: 8px">
            关于我们
            <span class="sub-title">News</span>
            <a class="more" href="about">+</a>
        </h2>
        <img class="about-img" src="<?php echo RES_PATH ?>/img/about.jpg" width="500">
        <div class="about-text">
            深圳市宝安区新安新富林电子商行成立于2001年1月，是一家专业从事电子元器件配套供应商，主营全系列铝电解电容，电阻，二三极管，贴片电容，贴片电阻，电感，LED和USB连接器。我们整合了最优质的电子元器件资源，与国内外100多家龙头企业对接，如三星，TDK,
            厚生，MIC, 广泛应用于数码、通讯、仪器仪表、汽车，移动通信、程控交换机、计算机、家用电器、电动玩具、手机、电源驱动及消费电子等领域!
            我们秉承诚信经营，质量第一的宗旨，为客户提供了方便快捷放心的一站式配套服务。
        </div>
    </div>
    <div class="clear"></div>

</div>


<?php get_footer(); ?>
<?php get_sidebar(); ?>
