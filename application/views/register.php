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
    <div class="login-page-form" style="left: -50%;position: relative;margin-right: -180px;margin-top:0;">
        <div class="form-title">用户注册</div>
        <div class="form-tip" id="reg_error">用户名已存在</div>
        <ul>
            <li>
                <div class="form-input-box">
                    <input type="text" class="form-input pl15" id="username_reg" placeholder="请输入您的用户名" required="required" />
                </div>
            </li>
            <li>
                <div class="form-input-box">
                    <input type="password" class="form-input pl15" id="pwd_reg" placeholder="请输入您的密码" required="required" />
                </div>
            </li>
            <li>
                <div class="form-input-box">
                    <input type="text" class="form-input pl15" id="phone_reg" placeholder="请输入您的手机号码" required="required" />
                </div>
            </li>
            <li>
                <div class="form-input-box">
                    <div class="form-code-box">
                        <input type="text" class="form-input pl15" id="smscode_reg" placeholder="请输入短信验证码" maxlength="6" required="required" />
                    </div>
                    <a href="javascript:;" class="form-input-link forbid" id="code_btn_reg">获取验证码</a>
                </div>
            </li>
            <li>
                <div class="form-input-box mb0">
                    <div class="form-code-box">
                        <input type="text" class="form-input pl15" id="imgcode_reg" placeholder="请输入图形验证码" maxlength="5" required="required" />
                    </div>
                    <img src="/htdocs/images/image-code.png" class="form-input-image" />
                </div>
            </li>
        </ul>
        <div class="h45 lh45">
            <label class="f13 col-gray6">
                <input type="checkbox" /><i></i>狗狗网用户注册协议和隐私政策
            </label>
        </div>
        <a href="javascript:;" id="login_btn" class="login-btn mb20 forbid">注册</a>
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
