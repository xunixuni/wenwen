<div class="footer">
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


<!--用户登录弹框-->
<div id="upwin_login" class="upwin" style="display: none;">
    <div class="upwin-title" style="border-bottom: none;">&nbsp;<a href="javascript:;" class="upwin-title-close" onclick="Pop.exit();"></a></div>
    <div class="upwin-content">
        <div class="upwin-form" style="margin-top: -30px; position: relative;">
            <div class="login-tab">
                <a href="javascript:;" class="cur">快捷登录</a>
                <a href="javascript:;">密码登录</a>
            </div>
            <div class="form-tip" id="upwin_login_error">用户名密码错误</div>
            <ul>
                <li>
                    <div class="form-input-box">
                        <input type="tel" class="form-input" id="phone_login" placeholder="输入手机号码" maxlength="11" required="required" />
                    </div>
                </li>
                <li id="code_num_box">
                    <div class="form-input-box">
                        <div class="form-code-box">
                            <input type="tel" class="form-input" id="code_login" placeholder="短信验证码" maxlength="6" required="required" />
                        </div>
                        <a href="javascript:;" class="form-input-link forbid" id="code_btn" onclick="sendCodeLogin(this,60,$('#phone_num').val(),'upwin_login_error')">获取验证码</a>
                    </div>
                </li>
                <li id="pwd_num_box" style="display: none;">
                    <div class="form-input-box">
                        <input type="password" class="form-input" id="pwd_login" placeholder="请输入密码" required="required" />
                    </div>
                </li>
            </ul>
            <!--用户登录方式，sms_login短信登录，pwd_login密码登录-->
            <input type="hidden" id="login_type" value="sms_login" />

            <div class="ta-r mb10 h15" style="margin-top: -10px; color: #999;">
                <a href="javascript:;" class="upwin-link col-gray6 fl-l" style="display: none;" id="upwin_tofindpwd">忘记密码?</a>没有账号？<a href="javascript:;" class="upwin-link" id="upwin_toregister">立即注册</a>
            </div>
            <a href="javascript:;" id="login_btn" class="upwin-btn mb20 forbid">登录</a>
            <div class="login-bottom-text">微信登录</div>
            <div class="login-wechat-icon pt10">
                <a href="<?php echo base_url() ?>page/wxlogin" class="ico-wechat"></a>
            </div>
        </div>
    </div>
</div>

<!--用户注册弹窗-->
<div id="upwin_register" class="upwin" style="display: none;">
    <div class="upwin-title" style="border-bottom: none;">&nbsp;<a href="javascript:;" class="upwin-title-close" onclick="Pop.exit();"></a></div>
    <div class="upwin-content">
        <div class="upwin-form" style="margin-top: -40px; position: relative;">
            <div class="login-tab" style="border-bottom: none;">
                <a href="javascript:;" class="f18 col-gray6 w100" style="cursor: default;">注册</a>
            </div>
            <div class="form-tip" id="upwin_register_error">手机号码格式错误</div>
            <ul>
                <li>
                    <div class="form-input-box">
                        <input type="tel" class="form-input" id="phone_reg" placeholder="输入手机号码" maxlength="11" required="required" />
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <div class="form-code-box">
                            <input type="tel" class="form-input" id="code_reg" placeholder="短信验证码" maxlength="6" required="required" />
                        </div>
                        <a href="javascript:;" class="form-input-link forbid" id="code_btn_reg" onclick="sendCodeRegister(this,60,$('#phone_reg').val(),'upwin_register_error')">获取验证码</a>
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <input type="password" class="form-input" id="pwd_reg" placeholder="请输入密码，至少8位英文数字组合" required="required" />
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <input type="password" class="form-input" id="confirm_reg" placeholder="请确认密码" required="required" />
                    </div>
                </li>
            </ul>

            <div class="ta-r mb10 h15" style="margin-top: -10px; color: #999;">
                <label class="fl-l"><input type="checkbox" name="reg_agreement" checked=""><i style="top: -1px;"></i>我已阅读并同意<a href="" class="upwin-link" target="_blank">《官网用户服务协议和隐私条款》</a></label>
            </div>
            <a href="javascript:;" id="register_btn" class="upwin-btn mb20 forbid">立即注册</a>
            <div class="login-bottom-text">已有账号，<a href="javascript:;" class="upwin-link f14" id="upwin_tologin">直接登录</a></div>
        </div>
    </div>
</div>

<!--找回密码弹窗-->
<div id="upwin_findpwd" class="upwin" style="display: none;">
    <div class="upwin-title" style="border-bottom: none;">&nbsp;<a href="javascript:;" class="upwin-title-close" onclick="Pop.exit();"></a></div>
    <div class="upwin-content">
        <div class="upwin-form" style="margin-top: -40px; position: relative;">
            <div class="login-tab" style="border-bottom: none;">
                <a href="javascript:;" class="f18 col-gray6 w100" style="cursor: default;">找回密码</a>
            </div>
            <div class="form-tip" id="upwin_findpwd_error">手机号码未注册</div>
            <ul>
                <li>
                    <div class="form-input-box">
                        <input type="tel" class="form-input" id="phone_find" placeholder="输入手机号码" maxlength="11" required="required" />
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <div class="form-code-box">
                            <input type="tel" class="form-input" id="imgcode_find" placeholder="图形验证码" maxlength="6" required="required" />
                        </div>
                        <img src="/htdocs/images/create_imgcode.png" class="form-input-img" onclick="reloadImgcode(this)" />
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <div class="form-code-box">
                            <input type="tel" class="form-input" id="code_find" placeholder="短信验证码" maxlength="6" required="required" />
                        </div>
                        <a href="javascript:;" class="form-input-link forbid" id="code_btn_find" onclick="sendCodeFindpwd(this,60,$('#phone_find').val(),'upwin_findpwd_error')">获取验证码</a>
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <input type="password" class="form-input" id="pwd_find" placeholder="请重设密码，至少8位英文数字组合" required="required" />
                    </div>
                </li>
                <li>
                    <div class="form-input-box">
                        <input type="password" class="form-input" id="confirm_find" placeholder="请确认密码" required="required" />
                    </div>
                </li>
            </ul>

            <a href="javascript:;" id="findpwd_btn" class="upwin-btn mb20 forbid">完成</a>
        </div>
    </div>
</div>

<script src="/htdocs/js/jquery-1.11.1.min.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/public.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/dom-ready.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">

var cityJson;//城市数据
var cityMap = {};//省份对应城市,直接用键值对形式,避免再次循环,例如cityMap['101210000'] = [{code:101210100,name:'杭州'}]这样子

$(function(){

  $("#user").on("click",function(){//点击用户菜单下拉
      if($(this).hasClass("on")) {
          $(this).removeClass("on");
          $("#nav_user_panel").hide();
      }else {
          $(this).addClass("on");
          $("#nav_user_panel").show();
      }
  })

    $("#upwin_login .login-tab a").on("click",function(){
        var $this = $(this);
        if($this.hasClass("cur")) return;
        $this.addClass("cur").siblings().removeClass("cur");
        $("#upwin_login_error").html("");
        if($("#login_type").val() == "sms_login"){//如果当前是短信登录，则改为密码登录
            $("#login_type").val("pwd_login");
            $("#pwd_num_box").show();
            $("#code_num_box").hide();
            $("#upwin_tofindpwd").show();
        }else{//否则改为短信登录
            $("#login_type").val("sms_login");
            $("#code_num_box").show();
            $("#pwd_num_box").hide();
            $("#upwin_tofindpwd").hide();
        }
    })

    $("#upwin_tologin").on("click",function(){
        Pop.open("upwin_login");
    })

    $("#upwin_toregister").on("click",function(){
        Pop.open("upwin_register");
    })

    $("#upwin_tofindpwd").on("click",function(){
        Pop.open("upwin_findpwd");
    })
    
    $.ajax({
        type:"get",
        url:"/htdocs/json/city.json",
        async:true,
        success:function(data){
            cityJson = data;
            console.log(cityJson);
        }
    });
    
    $(".current-location").on("click",function(e){
        var eve = e || window.event;
        eve.stopPropagation ? eve.stopPropagation() : eve.cancelBubble = !0;
        if(cityJson != undefined){
            var allCityList = cityJson.data.cityList;
            var hotCityList = cityJson.data.hotCityList;
            var provincelist_str = '',citylist_str = '';
            $.each(allCityList,function(i){
                cityMap[allCityList[i].code] = allCityList[i].subLevelModelList;
                provincelist_str += '<a href="javascript:;" data-code="'+allCityList[i].code+'">'+allCityList[i].name+'</a>';
            })
            $(".provincelist").html(provincelist_str);
            $.each(hotCityList,function(j){
                if(hotCityList[j].code == '100010000'){
                    return true;
                }
            		citylist_str += '<a href="javascript:;" data-code="'+hotCityList[j].code+'">'+hotCityList[j].name+'</a>';
            })
            $(".citylist").html(citylist_str);
            $('.location').toggleClass("cur");
        }
    })
    
    $(".location").on("click",function(e){
    		var eve = e || window.event;
    		eve.stopPropagation ? eve.stopPropagation() : eve.cancelBubble = !0;
    })
    
    $("body").on("click",function(){
        $(".location").removeClass("cur");
    })
    
    $(".location-panel .title a").on("click",function(){
        $(this).addClass("curtype").siblings().removeClass("curtype");
        var target = $(this).data("target");
        $("#"+target).show().siblings(".list").hide();
    })
    
    $(".provincelist").on("click","a",function(){
        var code = $(this).data("code");
    		$(this).addClass("selected").siblings().removeClass("selected");
        $(".location-panel .title a[data-target='citylist']").addClass("curtype").siblings().removeClass("curtype");
        var hotCityList = cityMap[code];
        var citylist_str = '';
        $.each(hotCityList,function(j){
        		if(hotCityList[j].code == '100010000'){
        				return true;
        		}
        		citylist_str += '<a href="javascript:;" data-code="'+hotCityList[j].code+'">'+hotCityList[j].name+'</a>';
        })
        $(".citylist").html(citylist_str);
    		$(".provincelist").hide();
        $(".citylist").show();
    })
    
    $(".citylist").on("click","a",function(){
        $(this).addClass("selected").siblings().removeClass("selected");
        setTimeout(function(){
            location.reload();
        },1000)
    })

})
</script>
