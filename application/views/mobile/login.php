<!DOCTYPE html>
<html>
    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>
    <body>
    <div class="container login-wrap">
      <a href="javascript:history.go(-1);" id="back" class="mt20 ml10 in-block padding20">
        <i class="ico-header-back"></i>
      </a>
      <p class="ta-c col-white f24 mb5">logo</p>
      <p class="ta-c col-white f14 mb30">帮助他人，就是成就自己</p>
      <div class="login-switch" id="mima_switch">
        <p class="ta-c f16">用户登录</p>
        <form class="" action="" method="">
          <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <input class="weui-input" type="text" placeholder="用户名或者手机号">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <input class="weui-input" type="password" placeholder="输入密码">
              </div>
            </div>
          </div>
        </form>
        <p class="ta-r mb50">
          <a href="javascript:;" id="forgot_mima" class="col-gray9 mr15">忘记密码?</a>
        </p>
        <a href="javascript:;" class="btn" id="btn_login_big">登录</a>
        <p class="ta-c mb50">
          <a href="javascript:;" id="new_reg1" class="col-gray9">用户注册&nbsp;></a>
        </p>
      </div>
      <div class="forgot-mima-box" style="display:none;">
        <p class="ta-c f16">忘记密码</p>
        <div class="">
          <form class="" action="" method="">
            <div class="weui-cells weui-cells_form">
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="text" placeholder="手机号">
                </div>
              </div>
              <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="tel" placeholder="手机验证码">
                </div>
                <div class="weui-cell__ft pr0">
                  <input type="button" name="" value="获取验证码" id="getCode2" class="weui-vcode-btn" onclick="sendCode(this.id,60)">
                </div>
              </div>
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="password" placeholder="密码，至少8位中英文数字组合">
                </div>
              </div>
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="password" placeholder="确认密码">
                </div>
              </div>
            </div>
          </form>
          <a href="javascript:;" class="btn" id="save_btn">提交</a>
          <p class="">
            <a href="javascript:;" id="new_reg3" class="col-gray9">用户注册&nbsp;></a>
            <a href="javascript:;" id="btn_login" class="col-gray9 fl-r">用户登录&nbsp;></a>
          </p>
        </div>
      </div>
      <div class="reg-box" id="reg_switch" style="display:none;">
        <p class="ta-c f16">用户注册</p>
        <div class="">
          <form class="" action="" method="">
            <div class="weui-cells weui-cells_form">
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="text" placeholder="请输入用户名">
                </div>
              </div>
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="password" placeholder="密码，至少8位中英文数字组合">
                </div>
              </div>
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="text" placeholder="手机号">
                </div>
              </div>
              <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="tel" placeholder="手机验证码">
                </div>
                <div class="weui-cell__ft pr0">
                  <input type="button" name="" value="获取验证码" id="getCode3" class="weui-vcode-btn" onclick="sendCode(this.id,60)">
                </div>
              </div>
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <input class="weui-input" type="tel" placeholder="图形验证码">
                </div>
                <div class="weui-cell__ft pr0">
                  <img src="/htdocs/images/image-code.png" alt="" width="100">
                </div>
              </div>
            </div>
          </form>
          <p class="col-gray9 f12"><label for="weuiAgree" class="weui-agree in-block">
            <input id="weuiAgree" type="checkbox" class="weui-agree__checkbox">
            <span class="weui-agree__text">我已阅读并同意问问网
            </span>
          </label><a href="javascript:;" id="" class="col-default">《用户注册协议》</a>和<br />
          <a href="javascript:;" id="" class="col-default">《隐私政策》</a></p>
          <a href="javascript:;" id="btn_go_login" class="btn">注册</a>
          <p class="ta-c">
            <a href="javascript:;" id="btn_login2" class="col-gray9">用户登录&nbsp;></a>
          </p>
        </div>
      </div>
    </div>
      <?php include_once('templete/pub_foot.php') ?>
      <script type="text/javascript">
        $(function(){
          //忘记密码
          $('#forgot_mima').on('click',function () {
            $('.login-switch,.right-switch').hide();
            $('.forgot-mima-box').show();
          });
          //登录
          $('#btn_login').on('click',function () {
            $('.forgot-mima-box').hide();
            $('.right-switch,#mima_switch').show();
          });
          $('#btn_login2,#btn_go_login').on('click',function () {
            $('.reg-box').hide();
            $('.right-switch,#mima_switch').show();
          });
          });
          $("#save_btn").on("click",function(){
            $.toast('密码已重置',function () {
              $('.forgot-mima-box').hide();
              $('.right-switch,#mima_switch').show();
            });
          })
          //用户注册
          $('#new_reg1,#new_reg2').on('click',function () {
            $('.login-switch,.right-switch').hide();
            $('.reg-box').show();
          });
          $('#new_reg3').on('click',function () {
            $('.forgot-mima-box').hide();
            $('.reg-box').show();
          });
      </script>
    </body>
</html>
