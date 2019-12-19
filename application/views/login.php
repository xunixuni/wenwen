<!DOCTYPE html>
<html style="height: 100%;">
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/css/login.css?<?php echo CACHE_TIME; ?>">
</head>
<body>
<div class="login-page-header after-cls">
    <div class="container">
        <a href="/page/home" class="top-logo"><img src="http://iph.href.lu/200x88?text=200*88" width="200" height="88" /></a>
    </div>
</div>
<div class="login-page after-cls">
  <div class="container">
    <div class="login-page-left">
      <div class="f20 lh40"><img src="/htdocs/images/coffee.png" alt="" style="position:relative;top:18px;">寄语</div>
      <br />
      <p>问问网成立于2019年12月，本着知识创造未来的愿景，为用户探索更多了解世界的渠道，助力用户学习更多知识；</p>
      <br />
      <p>问问网，助力“[帮助他人，就是成就自己]”的使命，愿每一个真挚的问题都能获取自己想要的答案，愿每一个真挚的回答，都能帮助更多的寻知者；</p>
      <br />
      <p>问一问，我们都是知识的追求者，也是知识的探索者，因为问问，所以问问；</p>
      <br />
      <p>如果您对网站有更多期待，也可以给予我们反馈，帮助我们建立更好的互助问答环境。</p>
      <br />
      <p class="ta-r mt20">——  问问网  www.wenwen.cn</p>
    </div>
    <div class="login-page-form">
        <div class="form-title">用户登录</div>
        <div class="form-tip" id="login_error">用户名密码错误</div>
        <ul>
            <li>
                <div class="form-input-box">
                    <i class="ico-user"></i>
                    <input type="text" class="form-input" id="username_login" placeholder="用户名\手机号码" required="required" />
                </div>
            </li>
            <li>
                <div class="form-input-box">
                    <i class="ico-pwd"></i>
                    <input type="password" class="form-input" id="pwd_login" placeholder="密码" required="required" />
                </div>
            </li>
            <!-- <li>
                <div class="form-input-box mb0">
                    <div class="form-code-box">
                        <i class="ico-code"></i>
                        <input type="text" class="form-input" id="code_login" placeholder="验证码" maxlength="5" required="required" />
                    </div>
                    <img src="/htdocs/images/image-code.png" class="form-input-image" />
                </div>
            </li> -->
        </ul>
        <div class="h45 lh45">
            <a href="/page/register" class="form-link" id="login_toregister">立即注册</a>
            <a href="javascript:;" class="form-link fl-r" id="login_tofindpwd">忘记密码</a>
        </div>
        <a href="javascript:;" id="login_btn" class="login-btn mb20 forbid">登录</a>
    </div>
  </div>
</div>
<div class="login-page-footer">
    <div class="about-link">
      <a href="" target="_blank">关于我们</a>
      <a href="" target="_blank">隐私声明</a>
      <a href="" target="_blank">联系我们</a>
      <a href="" target="_blank">网站地图</a>
      <a href="" target="_blank">帮助中心</a>
    </div>
    <div class="copyright">©2019&nbsp;&nbsp;问问网&nbsp;&nbsp;浙ICP备号&nbsp;&nbsp;业务经营许可证：浙&nbsp;&nbsp;浙公网安备号</div>
</div>
<script src="/htdocs/js/jquery-1.11.1.min.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/public.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/dom-ready.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){



})
</script>
</body>
</html>
