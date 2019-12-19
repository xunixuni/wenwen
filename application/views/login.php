<!DOCTYPE html>
<html style="height: 100%;">
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/css/login.css?<?php echo CACHE_TIME; ?>">
</head>
<body style="height: 100%; background: url(/htdocs/images/login-bg.jpg) no-repeat; background-size: 100% auto; background-position: center center;">

<div class="login-page">
    <div class="login-page-header">
        <div class="container">
            <a href="/page/home" class="top-logo"></a>
        </div>
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
            <li>
                <div class="form-input-box mb0">
                    <div class="form-code-box">
                        <i class="ico-code"></i>
                        <input type="text" class="form-input" id="code_login" placeholder="验证码" maxlength="5" required="required" />
                    </div>
                    <img src="/htdocs/images/image-code.png" class="form-input-image" />
                </div>
            </li>
        </ul>
        <div class="h45 lh45">
            <a href="/page/register" class="form-link" id="login_toregister">立即注册</a>
            <a href="javascript:;" class="form-link fl-r" id="login_tofindpwd">忘记密码</a>
        </div>
        <a href="javascript:;" id="login_btn" class="login-btn mb20 forbid">登录</a>
    </div>
    <div class="login-page-footer">
        <div class="about-link">
            <a href="" target="_blank">关于我们</a>
            <a href="" target="_blank">隐私声明</a>
            <a href="" target="_blank">版权声明</a>
            <a href="" target="_blank">服务协议</a>
            <a href="" target="_blank">联系我们</a>
            <a href="" target="_blank">帮助中心</a>
        </div>
        <div class="copyright">©2019&nbsp;&nbsp;狗狗宠物交易网&nbsp;&nbsp;浙ICP备10703982号&nbsp;&nbsp;业务经营许可证：浙B1-30224128&nbsp;&nbsp;浙公网安备33807403020781号</div>
    </div>
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
