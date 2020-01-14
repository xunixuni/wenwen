<!DOCTYPE html>
<html>
    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>
    <body>
    <?php include_once('templete/top_head.php') ?>
    <div class="container pt44 pb50">
      <div class="header">
        <div class="header-title">
          <a href="javascript:history.go(-1);" id="back">
            <i class="ico-header-back"></i>
          </a>
          <h4>关于我们</h4>
          <a href="javascript:;" class="open-popup" data-target="#sousuo">
              <i class="ico-header-search"></i>
          </a>
        </div>
      </div>
      <div class="weui-article bg-white">
        <h2 class="ta-c">问问网</h2>
        <p>问问网成立于2019年12月，本着知识创造未来的愿景，为用户探索更多了解世界的渠道，助力用户学习更多知识；</p>
        <p>问问网，助力“[帮助他人，就是成就自己]”的使命，愿每一个真挚的问题都能获取自己想要的答案，愿每一个真挚的回答，都能帮助更多的寻知者；</p>
        <p>问一问，我们都是知识的追求者，也是知识的探索者，因为问问，所以问问；</p>
        <p>如果您对网站有更多期待，也可以给予我们反馈，帮助我们建立更好的互助问答环境；</p>
      </div>
      <div class="about-link">
        <a href="/mobile/about-wenwen">关于我们</a>
        <a href="/mobile/about-wenwen">隐私声明</a>
        <a href="/mobile/about-wenwen" >联系我们</a>
        <a href="/mobile/sitemap">网站地图</a>
        <a href="/mobile/about-wenwen">帮助中心</a>
        <div class="copyright">©2019-2020&nbsp;&nbsp;问问网&nbsp;&nbsp;浙ICP备号&nbsp;&nbsp;<br />业务经营许可证：浙&nbsp;&nbsp;浙公网安备号</div>
      </div>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
    <script type="text/javascript">
    $(function(){
      $('#page_desc').find('a').on('click',function () {
        $(this).parent('#page_desc').addClass('ok');
        $(this).hide();
      })
      $('#question').on('click',function () {
        $('#anwser').show();
      });
      $('#submint,#shouqi').on('click',function () {
        $('#anwser').hide();
      });
      $('#show_part').on('click',function () {
        $(this).parent().prev('.text').addClass('show');
        $(this).parent('.hide').hide();
      });
      $('#more').on('click',function () {
        $(this).parent().prev('.pages-anwser').show();
        $(this).parent('.pages-anwser-more').hide();
      });
    })
    $(document).on("click", "#show_actions", function() {
      $.actions({
        actions: [{
          text: "分享",
          onClick: function() {
            //do something
          }
        },{
          text: "举报",
          onClick: function() {
            //do something
          }
        }]
      });
    });
    </script>
    </body>
</html>
