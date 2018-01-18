<?php

if (wp_is_mobile()) {
    header("Location: http://m.xfl1688.com");
} else {
include('constant.php');

?>
<!doctype html>
<html lang="zh-CN">
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MZMWKFJ');</script>
    <!-- End Google Tag Manager -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="baidu-site-verification" content="W9K48gqQ1C" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <title>
        <?php
        global $page, $paged;
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            bloginfo('name');
            echo "-$site_description";
        } else {
            echo trim(wp_title('', 0));
            if ($paged >= 2 || $page >= 2)
                echo ' - ' . sprintf(__('第%s页'), max($paged, $page));
            echo ' | ';
            bloginfo('name');
        }
        ?></title>


    <?php
    $description = '';
    $keywords = '电解电容,贴片电容, 铝电解电容,高压贴片电容, 电解电容厂家,电解电容生产厂家，贴片电阻，电子元器件配套';

    if (is_home() || is_page()) {
        // 将以下引号中的内容改成你的主页description
        $description = "新富林电子,10余年专业生产铝电解电容，代理销售贴片电容贴片电阻，一级代理商，为客户提供电子元器件配套服务，咨询热线：15602228983 ";
        $keywords = "电解电容,贴片电容, 铝电解电容,高压贴片电容, 电解电容厂家,电解电容生产厂家，贴片电阻，电子元器件配套";
    } elseif (is_single()) {
        $description1 = get_post_meta($post->ID, "description", true);
        $description2 = str_replace("\n", "", mb_strimwidth(strip_tags($post->post_content), 0, 200, "…", 'utf-8'));

        // 填写自定义字段description时显示自定义字段的内容，否则使用文章内容前200字作为描述
        $description = $description1 ? $description1 : $description2;

        // 填写自定义字段keywords时显示自定义字段的内容，否则使用文章tags作为关键词
        $keywords = get_post_meta($post->ID, "keywords", true);
        if ($keywords == '') {
            $tags = wp_get_post_tags($post->ID);
            foreach ($tags as $tag) {
                $keywords = $keywords . $tag->name . ", ";
            }
            $keywords = rtrim($keywords, ', ');
        }
    } elseif (is_category()) {
        // 分类的description可以到后台 - 文章 -分类目录，修改分类的描述
        $description = category_description();
        $keywords = single_cat_title('', false);
    } elseif (is_tag()) {
        // 标签的description可以到后台 - 文章 - 标签，修改标签的描述
        $description = tag_description();
        $keywords = single_tag_title('', false);
    }
    $description = trim(strip_tags($description));
    $keywords = trim(strip_tags($keywords));
    ?>
    <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <meta name="description" content="<?php echo $description; ?>"/>

    <link rel="stylesheet" href="<?php echo RES_PATH ?>/css/common.css">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZMWKFJ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <div class="top-bar">
        <div class="wrap-body">
            <span>欢迎访问深圳新富林电子网站!</span>
            <ul class="top-nav-list">
                <li><a href="javascript:void(0)" onclick="_addFavorite()" style="border-left:none;">收藏我们</a></li>
                <li><a href="about">联系我们</a></li>
                <li><a href="sitemap.xml">网站地图</a></li>
            </ul>
        </div>

    </div>
    <div class="header-content wrap-body ">
        <a href="http://xfl1688.com" class="logo"><img class="img-logo" src="<?php echo RES_PATH ?>/img/logo.png"
                                                       border="0"></a>

        <div class="logo-info">
            <div class="desc"><span class="year">17年</span>铝电解电容生产厂家</div>
            <div>电容电阻二三极管配套供应商</div>
        </div>

        <div class="logo-tel">
            <p>全国咨询热线<a href="tel:4000379806">156-0222-8983</a></p>
        </div>

        <div class="clear"></div>

    </div>


</header>
<?php
if (function_exists('wp_nav_menu')) {

    $defaults = array(
        'theme_location' => '',
        'menu' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'nav',
        'menu_class' => 'nav-ul wrap',
        'depth' => 0,
    );

    wp_nav_menu($defaults);
}
?>


<?php
}

?>


