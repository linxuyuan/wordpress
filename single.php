<?php /* Template Name: 文章页面模板 */ ?>
<?php get_header(); ?>
    <!-- Column 1 / Content -->
    <div class="main">
        <div class="wrap-body">
            <div class="main-left">
                <p class="category-box">新闻咨询</p>
                <div class="category-content">
                    <ul>
                        <li>
                            <a href="#">企业新闻</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="main-right">

                <div class="right_title"><span class="right_name">企业新闻<font>news</font></span>
                    <div class="fast"><b>当前位置：</b>
                        <ul class="breadcrumbs">
                            <li><a href="http://xfl1688.com">首页</a></li>
                            <li> &gt; <a href="http://ls.wpke.net/news">企业新闻</a> &gt; 正文</li>
                        </ul>
                    </div>
                </div>
                <h2 class="news-title "><?php the_title(); ?></h2>
                <div class="sub-post-title">
                    <span>发表时间:<?php the_time('Y年n月j日') ?></span>
                    <span>作者:管理员</span>
                    <span>类目:<?php the_category(', ') ?></span>
                    <span>浏览:1008</span>
                </div>


                <!-- Post Content -->

                <?php while (have_posts()) : the_post(); ?>
                    　　　<?php the_content(); ?>
                <?php endwhile; ?>
                <p>本文标签:</p>


                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#"
                                                                                                  class="bds_qzone"
                                                                                                  data-cmd="qzone"
                                                                                                  title="分享到QQ空间"></a><a
                        href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq"
                                                                                           data-cmd="tqq"
                                                                                           title="分享到腾讯微博"></a><a
                        href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin"
                                                                                            data-cmd="weixin"
                                                                                            title="分享到微信"></a>
                </div>
                <script>window._bd_share_config = {
                        "common": {
                            "bdSnsKey": {},
                            "bdText": "",
                            "bdMini": "2",
                            "bdMiniList": false,
                            "bdPic": "",
                            "bdStyle": "0",
                            "bdSize": "16"
                        }, "share": {}
                    };
                    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>

                <div>
                    <?php
                    $categories = get_the_category();
                    $categoryIDS = array();
                    foreach ($categories as $category) {
                        array_push($categoryIDS, $category->term_id);
                    }
                    $categoryIDS = implode(",", $categoryIDS);
                    ?>
                    <?php if (get_previous_post($categoryIDS)) {
                        previous_post_link('上一篇: %link', '%title', true);
                    } else {
                        echo "没有了";
                    } ?>
                    <?php if (get_next_post($categoryIDS)) {
                        next_post_link('下一篇: %link', '%title', true);
                    } else {
                        echo "没有了";
                    } ?>


                </div>

            </div>
            <div class="clear"></div>


        </div>

    </div>


<?php get_footer(); ?>