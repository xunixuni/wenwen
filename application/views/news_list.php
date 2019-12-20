<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/css/swiper.min.css?<?php echo CACHE_TIME; ?>">
</head>
<body>
<?php include_once('templete/menubar.php') ?>

<div class="container">
    <!-- 面包屑导航 -->
    <div class="breadcrumbs"><span>所在位置：</span><a href="/page/home">首页</a><em></em><span>宠物百科</span></div>
</div>

<div class="container">
    <div class="module-left">
        <div class="news-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="swiper-link" href="<?php echo base_url() ?>" target="_blank" style="background-color: #374049;">
                        <img src="<?php echo base_url() ?>htdocs/images/banner/news-banner1.png" width="956" height="366" />
                    </a>
                    <div class="text">
                        <h4>狗和猫能够同时养么？</h4>
                        <div class="summary">猫是特别敏感的动物，通常对狗狗都充满敌意。而狗对猫，只是充满好奇心，特别是大型犬，它们其实根本就不屑与猫咪打交道。所以再将猫猫狗狗带回家之后，可以先栓起狗狗，让猫咪熟悉家中的大环境，但是先不要让它见到狗狗。</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a class="swiper-link" href="<?php echo base_url() ?>" target="_blank" style="background-color: #050102;">
                        <img src="<?php echo base_url() ?>htdocs/images/banner/news-banner2.png" width="956" height="366" />
                    </a>
                    <div class="text">
                        <h4>狗和猫能够同时养么？</h4>
                        <div class="summary">猫是特别敏感的动物，通常对狗狗都充满敌意。而狗对猫，只是充满好奇心，特别是大型犬，它们其实根本就不屑与猫咪打交道。所以再将猫猫狗狗带回家之后，可以先栓起狗狗，让猫咪熟悉家中的大环境，但是先不要让它见到狗狗。</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a class="swiper-link" href="<?php echo base_url() ?>" target="_blank" style="background-color: #050102;">
                        <img src="<?php echo base_url() ?>htdocs/images/banner/news-banner3.png" width="956" height="366" />
                    </a>
                    <div class="text">
                        <h4>狗和猫能够同时养么？</h4>
                        <div class="summary">猫是特别敏感的动物，通常对狗狗都充满敌意。而狗对猫，只是充满好奇心，特别是大型犬，它们其实根本就不屑与猫咪打交道。所以再将猫猫狗狗带回家之后，可以先栓起狗狗，让猫咪熟悉家中的大环境，但是先不要让它见到狗狗。</div>
                    </div>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="module-right">
        <div class="f16 col-default h35 lh20 pb15" style="border-bottom: 1px dashed #c9cacd;">一周宠物关注榜</div>
        <div class="news-rank">
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">1、布偶猫</span>
                <span class="fl-r f12 col-default">1936<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">2、哈士奇</span>
                <span class="fl-r f12 col-default">1836<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">3、星罗猫</span>
                <span class="fl-r f12 col-default">1736<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">4、拉布拉多</span>
                <span class="fl-r f12 col-default">1636<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">5、锦鲤</span>
                <span class="fl-r f12 col-default">1536<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">6、变色龙</span>
                <span class="fl-r f12 col-default">1436<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">7、八哥</span>
                <span class="fl-r f12 col-default">1336<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">8、英国短毛猫</span>
                <span class="fl-r f12 col-default">1236<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">9、秋田犬</span>
                <span class="fl-r f12 col-default">1136<i class="ico-love ml5 mb3"></i></span>
            </a>
            <a href="" target="_blank" class="item">
                <span class="f14 col-gray6">10、金猫</span>
                <span class="fl-r f12 col-default">936<i class="ico-love ml5 mb3"></i></span>
            </a>
        </div>
    </div>
    <div class="after-cls"></div>
    <div class="news-type after-cls mt30">
        <div class="news-type-left">
            <a href="javascript:;">宠物狗</a>
            <a href="javascript:;" class="cur">小型犬</a>
            <a href="javascript:;">中型犬</a>
            <a href="javascript:;">大型犬</a>
        </div>
        <div class="news-type-right">
            <div class="figure-list after-cls">
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
                <a href="" target="_blank" class="item">
                    <img src="/htdocs/images/pet.png" />
                    <p>哈士奇</p>
                </a>
            </div>
            <div class="pagination mt15">
                <ul>
                    <li class="first"><a href="" data-ci-pagination-page="1" rel="start">&laquo;</a></li>
                    <li class="pre"><a href="" data-ci-pagination-page="3" rel="prev">&lsaquo;</a></li>
                    <li><a href="" data-ci-pagination-page="2">2</a></li>
                    <li><a href="" data-ci-pagination-page="3">3</a></li>
                    <li class="current"><a>4</a></li>
                    <li><a href="" data-ci-pagination-page="5">5</a></li>
                    <li><a href="" data-ci-pagination-page="6">6</a></li>
                    <li class="next"><a href="" data-ci-pagination-page="5" rel="next">&rsaquo;</a></li>
                    <li class="last"><a href="" data-ci-pagination-page="261">&raquo;</a></li>
                    <li><span>共89页，到第</span><input type="text" /><span>页</span><input type="button" value="GO" ></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- 宠物疾病 -->
    <div class="f16 col-default h40 lh40">宠物疾病</div>
    <div class="news-sick after-cls">
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
        <a href="" target="_blank" class="item">
            <h4>阿福丁中毒</h4>
            <div class="summary">阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...阿福丁是阿维菌素的商品名，也称作虫克星。该品可以驱杀动物体内的各种线虫和体外寄生虫，是近些年一种新型广谱高效的抗寄生虫类药物...</div>
        </a>
    </div>
    <div class="module-left">
        <div class="news-list">
            <div class="tab">
                <ul class="after-cls">
                    <li><a href="javascript:;">最新宠讯</a></li>
                    <li class="cur"><a href="javascript:;">行业动态</a></li>
                    <li><a href="javascript:;">猫咪</a></li>
                    <li><a href="javascript:;">狗狗</a></li>
                    <li><a href="javascript:;">水族类</a></li>
                    <li><a href="javascript:;">鸟类</a></li>
                    <li><a href="javascript:;">爬行类</a></li>
                </ul>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <div class="news-item after-cls">
                <div class="thumb">
                    <img src="/htdocs/images/news3.png" />
                </div>
                <div class="desc">
                    <a href="" target="_blank" class="title">猫咪乱尿尿后怎么除尿味？</a>
                    <div class="summary">猫咪除了在猫砂盆尿尿外，还有可能会在各种地方解决内急问题，比如墙角、柜子里、床底、甚至是你的被窝。一旦垫子、被子上沾染了猫尿的气味，就很难处理。虽然被罩，垫子套等可以清洗，可是渗透到棉花上的猫尿味却很难去除，直接把这床被子给扔了吧太可惜，可是又实在找不到好的去味方法，难道猫尿味就真的这么难去除吗？并不是呦。</div>
                    <p class="after-cls"><span class="tag">北京&nbsp;&nbsp;花鸟&nbsp;&nbsp;市场</span><span class="time">发布时间：2018-2-22 18：30：22</span></p>
                </div>
            </div>
            <a href="javascript:;" class="more-btn">加载更多</a>
        </div>
    </div>
    <div class="module-right">
        <div class="f16 col-default h40 lh40 mb15" style="border-bottom: 1px dashed #c9cacd;">您可能会喜欢</div>
        <div class="home-module pt0 pb0">
            <div class="module-list after-cls" style="width: 230px;">
                <a href="" target="_blank" class="item">
                    <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                    <div class="desc">
                        <div class="after-cls lh24">
                            <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                        </div>
                        <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                        <div class="after-cls lh18">
                            <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                            <span class="f12 col-gray9 fl-r">上海</span>
                        </div>
                    </div>
                </a>
                <a href="" target="_blank" class="item">
                    <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                    <div class="desc">
                        <div class="after-cls lh24">
                            <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                        </div>
                        <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                        <div class="after-cls lh18">
                            <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                            <span class="f12 col-gray9 fl-r">上海</span>
                        </div>
                    </div>
                </a>
                <a href="" target="_blank" class="item">
                    <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                    <div class="desc">
                        <div class="after-cls lh24">
                            <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                        </div>
                        <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                        <div class="after-cls lh18">
                            <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                            <span class="f12 col-gray9 fl-r">上海</span>
                        </div>
                    </div>
                </a>
                <a href="" target="_blank" class="item">
                    <div class="thumb"><img src="/htdocs/images/pet.png" /></div>
                    <div class="desc">
                        <div class="after-cls lh24">
                            <span class="f20 col-default"><i class="f16 mr5">¥</i>20000<font class="f12 ml5">【包邮】</font></span>
                        </div>
                        <div class="f12 col-gray6 lh18 title">本地犬舍出售纯种巴哥犬包养活，签协议可送货上门</div>
                        <div class="after-cls lh18">
                            <span class="f12 col-gray9"><i class="ico-house"></i>花都宠物生活馆</span>
                            <span class="f12 col-gray9 fl-r">上海</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="after-cls"></div>
</div>

<?php include_once('templete/navigation.php') ?>
<?php include_once('templete/pub_foot.php') ?>
<script src="/htdocs/js/swiper.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    
    var mySwiper = new Swiper ('.news-banner', {
        direction: 'horizontal', // 水平切换选项
        loop: true, // 循环模式选项
        autoplay:true,
        
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            clickable :true,
        },
    })
    
})
</script>
</body>
</html>
