<?php
/**
 * 页脚模板
 */
?>

<div class="link-box">
    <div class="wrap-body">
        <h4 class="title">友情链接：</h4>
        <ul class="link-list">
            <li><a href="http://szgzwdz.1688.com">二极管生产厂家</a></li>
            <li><a href="http://team.yunser.com">云设工作室</a></li>
            <li><a href="https://shop104683752.taobao.com/?spm=a313o.7775905.1998679131.d0011.DCvT5J" target="_blank">新富林官方网店</a>
            <li><a href="http://www.smtjg.com/">龙岗贴片加工厂</a></li>
            </li>
        </ul>
    </div>
</div>
<footer>

    <div class="footer-info ">
        <div class="wrap-body">
            <div class="left">
                <img src="<?php echo RES_PATH ?>/img/logo_white.png">
            </div>
            <div class="middle">
                <div class="">
                    <div class="footer_nav smal-hide">
                        <a href="http://xfl1688.com">网站首页</a><a href="about">关于我们</a><a href="news">新闻资讯</a><a href="mlcc">产品中心</a><a
                            href="contact" class="last">联系我们</a>
                    </div>
                    <div class="footer_detail">
                        <p><span>联系电话：0755-27838398</span> <span>电话：+86 15602228983 </span></p>
                        <p><span>地址：深圳市宝安电子城1楼1016</span></p> <a href="http://www.miitbeian.gov.cn/">粤ICP备17151952号</a>
                        <p style="visibility:hidden"><span>关键字:电解电容 电解电容厂家 铝电解电容 电容器 电子元器件配套</span></p>
                    </div>

                </div>
            </div>
            <div class="right">
                <img src="<?php echo RES_PATH ?>/img/wechat.png">
            </div>
        </div>

    </div>

</footer>
<!-- /页脚 -->
<script type="text/javascript" src="<?php echo RES_PATH ?>/lib/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES_PATH ?>/js/jquery.SuperSlide.2.1.1.js"></script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?3f35f8f7e36ec1c39510f5accdb52eb8";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script>
    function _addFavorite() {
        var url = window.location;
        var title = document.title;
        var ua = navigator.userAgent.toLowerCase();
        if (ua.indexOf("360se") > -1) {
            alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
        }
        else if (ua.indexOf("msie 8") > -1) {
            window.external.AddToFavoritesBar(url, title); //IE8
        }
        else if (document.all) {//IE类浏览器
            try{
                window.external.addFavorite(url, title);
            }catch(e){
                alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
            }
        }
        else if (window.sidebar) {//firfox等浏览器；
            window.sidebar.addPanel(title, url, "");
        }
        else {
            alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
        }
    }
</script>
<script id="jsID" type="text/javascript">
    var ary = location.href.split("&");
    jQuery(".slideTxtBox").slide({
        effect: ary[1],
        autoPlay: ary[2],
        trigger: ary[3],
        easing: ary[4],
        delayTime: ary[5],
        pnLoop: ary[6]
    });
</script>

<script id="jsID" type="text/javascript">
    var ary = location.href.split("&");
    jQuery(".slideBox").slide({
        mainCell: ".bd ul",
        effect: ary[3],
        autoPlay: ary[2],
        trigger: ary[3],
        easing: ary[4],
        delayTime: ary[5],
        mouseOverStop: ary[6],
        pnLoop: ary[7]
    });


</script>
<script>
    $(function(){
        var KF = $(".keifu");
        var wkbox = $(".keifu_box");
        var kf_close = $(".keifu .keifu_close");
        var icon_keifu = $(".icon_keifu");
        var kH = wkbox.height();
        var kW = wkbox.width();
        var wH = $(window).height();
        KF.css({height:kH});
        icon_keifu.css("top",parseInt((kH-100)/2));
        var KF_top = (wH-kH)/2;
        if(KF_top<0) KF_top=0;
        KF.css("top",KF_top);
        $(kf_close).click(function(){
            KF.animate({width:"0"},200,function(){
                wkbox.hide();
                icon_keifu.show();
                KF.animate({width:26},300);
            });
        });
        $(icon_keifu).click(function(){
            $(this).hide();
            wkbox.show();
            KF.animate({width:kW},200);
        });
    });
</script>
</body>
</html>