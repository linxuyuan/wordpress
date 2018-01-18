<?php /* Template Name: 产品详细页模板 */ ?>
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

            <div class="right_title"><span class="right_name">产品列表<font>news</font></span>
                <div class="fast"><b>当前位置：</b>
                    <ul class="breadcrumbs">
                        <li><a href="http://xfl1688.com">首页</a></li>
                        <li> &gt; <a href="http://ls.wpke.net/news">产品分类</a> &gt; 贴片电容</li>
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <div class="product-img-left">
                    <img src="<?php echo RES_PATH ?>/img/capacitor.png">
                </div>
                <?php while (have_posts()) : the_post(); ?>

                <div class="product-info-right">
                    <h1 class="product-title"> 　　　<?php the_title(); ?></h1>
                    <ul class="ul_prodinfo">
                        <li class="li_normalprice"><span class="span_title">产品简介：</span></li>

                        多层陶瓷片式电容器(MLCC, Multi-Layer Ceramic Capacitors)是在电路上暂时充电、消除Noise的一种类型Capacitor，采用介电质层和内电极层相互交叉的叠层结构。
                    </ul>
                    <ul class="ul_prodinfos">
                        <li>咨询热线：<span class="hottel" style="font-size: 24px;">15602228983</span></li>
                        <li class="li_weight">
                            <div class="propar">
                                <a class="x-price" title="点我咨询该产品最新低价" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2609461267&amp;site=qq&amp;menu=yes" rel="nofollow" target="_blank">立即订购</a>
                            </div>
                        </li>
                        <br>
                        本产品标签： <a href="http://www.xfl1688.com/product/samsung_0805_106" title="贴片电容" target="_blank">贴片电容</a>  <a href="http://www.xfl1688.com/product/samsung_0805_106" title="贴片电容" target="_blank">贴片电容</a>  <a href="http://www.xfl1688.com/product/samsung_0805_106" title="贴片电容" target="_blank">贴片电容</a>

                    </ul>
                </div>
                <?php endwhile; ?>

                <div class="clear"></div>
            </div>






            

        </div>
        <div class="clear"></div>

    </div>

</div>





<?php get_footer(); ?>
