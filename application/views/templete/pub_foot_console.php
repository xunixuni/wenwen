<div class="footer-console">
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
