<?php /* Template Name: 联系我们模板 */ ?>
<?php get_header(); ?>
<!-- Column 1 /Content -->

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

            <div class="right_title"><span class="right_name">联系我们<font>contact-us</font></span>
                <div class="fast"><b>当前位置：</b>
                    <ul class="breadcrumbs">
                        <li><a href="http://xfl1688.com">首页</a></li>
                        <li> &gt; <a href="http://ls.wpke.net/news">联系我们</a> </li>
                    </ul>
                </div>
            </div>
            <div class="product_pic">
                <?php while (have_posts()) : the_post(); ?>
                    　　　<?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>


<?php get_footer(); ?>

