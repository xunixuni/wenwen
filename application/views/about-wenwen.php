<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/css/swiper.min.css?<?php echo CACHE_TIME; ?>">
</head>
<body>
<?php include_once('templete/menubar.php') ?>
<!-- 帮助中心 -->
<div class="container mb20">
  <div class="breadcrumbs"><a href="/">首页</a><em></em>关于问问网</div>
  <div class="after-cls" style="border:1px solid #f5f5f5;background: #fafafa;">
    <div class="help-nav">
      <div class="bd">
          <ul>
            <li>
              <a href="/page/about-wenwen" class="cur">关于问问网</a>
            </li>
            <li>
              <a href="/page/about-privacy">隐私声明</a>
            </li>
            <li>
              <a href="/page/about-contact">联系我们</a>
            </li>
            <li>
              <a href="/page/sitemap">网站地图</a>
            </li>
            <li>
              <a href="/page/about-help">帮助中心</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="help-r-content">
      <div class="bd">
        <div class="title after-cls"><span>关于问问网</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <p>问问网 创立于2019年，专注。</p>
          <p>
            <b>问问网提供什么样的信息服务？</b>
          </p>
          <p>1.
              <br>
          </p>
          <p>2.
              <br>通过问问网
          </p>
          <p>3.
              <br>解决各种难题。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script src="/htdocs/js/swiper.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    var contentH = $(window).height()-$(".header").outerHeight()-$(".footer").outerHeight()-$(".breadcrumbs").outerHeight()-20;
    var helpnavH = $(".help-nav").outerHeight();
    var minHelpH;
    if($(".help-r-content .hb").length == 1){
        minHelpH = helpnavH > contentH ? (helpnavH-$(".help-r-content .hb").outerHeight(true)) : (contentH-$(".help-r-content .hb").outerHeight(true));
    }else{
        minHelpH = helpnavH > contentH ? helpnavH : contentH;
    }
    $(".help-r-content .bd").css({
        "min-height" : minHelpH+'px'
    })
})
</script>
</body>
</html>
