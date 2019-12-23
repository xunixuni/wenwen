<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/css/swiper.min.css?<?php echo CACHE_TIME; ?>">
</head>
<body>
<?php include_once('templete/menubar.php') ?>
<div class="container after-cls">
  <div class="breadcrumbs">
    <span>您所在的位置：</span>
    <a href="/page/home">首页</a><em></em><a href="/page/tag-all">问答标签</a><em></em><a href="/page/tag">标签:美食</a>
  </div>
  <div class="first-tit">
    <span class="title">关于
      <font>美食</font>标签的热门问题
    </span>
  </div>
  <div class="jingxuan-list biaoqian">
    <div class="jingxuan-item after-cls">
        <div class="desc">
          <a href="" target="_blank" class="title">柿子和什么不能一起吃？</a>
          <p class="after-cls"><span class="tag"><a href="/page/tag">柿子</a><a href="/page/tag">不能</a><a href="/page/tag">一起吃</a><a href="#">什么</a></span>
          <span class="source">
            <a href="#">首页</a>
            <em>//</em>
            <a href="#">美食</a>
          </span>
          </p>
        </div>
    </div>
    <div class="jingxuan-item after-cls">
        <div class="desc">
          <a href="" target="_blank" class="title">柿子和什么不能一起吃？</a>
          <p class="after-cls"><span class="tag"><a href="/page/tag">柿子</a><a href="/page/tag">不能</a><a href="/page/tag">一起吃</a><a href="#">什么</a></span>
          <span class="source">
            <a href="#">首页</a>
            <em>//</em>
            <a href="#">美食</a>
          </span></p>
        </div>
    </div>
    <div class="jingxuan-item after-cls">
        <div class="desc">
          <a href="" target="_blank" class="title">柿子和什么不能一起吃？</a>
          <p class="after-cls"><span class="tag"><a href="/page/tag">柿子</a><a href="/page/tag">不能</a><a href="/page/tag">一起吃</a><a href="#">什么</a></span>
            <span class="source">
              <a href="#">首页</a>
              <em>//</em>
              <a href="#">精选问答</a>
            </span></p>
        </div>
    </div>
    <div class="jingxuan-item after-cls">
        <div class="desc">
          <a href="" target="_blank" class="title">柿子和什么不能一起吃？</a>
          <p class="after-cls"><span class="tag"><a href="/page/tag">柿子</a><a href="/page/tag">不能</a><a href="/page/tag">一起吃</a><a href="#">什么</a></span>
          <span class="source">
            <a href="#">首页</a>
            <em>//</em>
            <a href="#">美食</a>
          </span>
          </p>
        </div>
    </div>
    <div class="jingxuan-item after-cls">
        <div class="desc">
          <a href="" target="_blank" class="title">柿子和什么不能一起吃？</a>
          <p class="after-cls"><span class="tag"><a href="/page/tag">柿子</a><a href="/page/tag">不能</a><a href="/page/tag">一起吃</a><a href="#">什么</a></span>
          <span class="source">
            <a href="#">首页</a>
            <em>//</em>
            <a href="#">美食</a>
          </span></p>
        </div>
    </div>
    <div class="jingxuan-item after-cls">
        <div class="desc">
          <a href="" target="_blank" class="title">柿子和什么不能一起吃？</a>
          <p class="after-cls"><span class="tag"><a href="/page/tag">柿子</a><a href="/page/tag">不能</a><a href="/page/tag">一起吃</a><a href="#">什么</a></span>
            <span class="source">
              <a href="#">首页</a>
              <em>//</em>
              <a href="#">美食</a>
            </span></p>
        </div>
    </div>
    <div class="pagination mt15 mb30 fl-r">
        <ul>
            <li class="first"><a href="" data-ci-pagination-page="1" rel="start">«</a></li>
            <li class="pre"><a href="" data-ci-pagination-page="3" rel="prev">‹</a></li>
            <li><a href="" data-ci-pagination-page="2">2</a></li>
            <li><a href="" data-ci-pagination-page="3">3</a></li>
            <li class="current"><a>4</a></li>
            <li><a href="" data-ci-pagination-page="5">5</a></li>
            <li><a href="" data-ci-pagination-page="6">6</a></li>
            <li class="next"><a href="" data-ci-pagination-page="5" rel="next">›</a></li>
            <li class="last"><a href="" data-ci-pagination-page="261">»</a></li>
            <li><span>共89页，到第</span><input type="text"><span>页</span><input type="button" value="GO"></li>
        </ul>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot.php') ?>
<?php include_once('templete/navigation.php') ?>
<script src="/htdocs/js/swiper.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
  $("#btn_more").on("click",function() {
    var a = $(this).parent().siblings(".hidden");
      if($(this).html() == "收起全文 -"){
          $(a).hide();
          $(this).html("展开更多 +");
      }else {
          $(this).html("收起全文 -");
          $(a).show();
      }
  });
})
</script>
</body>
</html>
