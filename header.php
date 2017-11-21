<?php
/**
 * 网页头部模板
 */
?>
<?php include('constant.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <title>深圳新富林电子公司网站</title>
    <link rel="stylesheet" href="<?php echo RES_PATH ?>/css/common.css">
    <script type="text/javascript" src="<?php echo RES_PATH ?>/lib/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo RES_PATH ?>/js/yxmobileslider.js"></script>
    <script type="text/javascript" src="<?php echo RES_PATH ?>/js/jquery.dlmenu.js"></script>
    <script type="text/javascript" src="<?php echo RES_PATH ?>/js/modernizr.custom.js"></script>
</head>
<body>
<header class="header">
    <a href="http://120.79.14.77/m/" class="logo"><img  class="img-logo" src="<?php echo RES_PATH ?>/img/logo.png" border="0" ></a>
    <a href="http://120.79.14.77/m/" target="_blank" class="logo1"><img src="<?php echo RES_PATH ?>/img/alibaba.png" border="0"></a>
    <div id="dl-menu" class="dl-menuwrapper">
        <button id="dl-menu-button">Open Menu</button>
        <ul class="dl-menu">
            <li><a href="/m/">首页</a></li>
            <li><a href="about_us">关于我们</a></li>
            <li><a href="Productlist.asp">产品中心</a></li>
            <li><a href="Newslist.asp">新闻资讯</a></li>
            <li><a href="contact">联系我们</a></li>
        </ul>
    </div>
    <script type="text/javascript">
        $(function(){
            $( '#dl-menu' ).dlmenu();
        });
    </script>


</header>