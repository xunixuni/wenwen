<!DOCTYPE html>
<html>
    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>
    <body>
    <?php include_once('templete/top_head.php') ?>
    <div class="container pt40 pb50">
      <div class="">
        <!--banner图轮播-->
        <div class="banner-box">
          <div class="swiper-container banner-swiper" id="banner_swiper">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <a href="javascript:;">
                          <img src="http://iph.href.lu/750x100?text=750*100" width="750" height="100">
                      </a>
                  </div>
                  <div class="swiper-slide">
                      <a href="javascript:;">
                          <img src="http://iph.href.lu/750x100?text=750*100" width="750" height="100">
                      </a>
                  </div>
                  <div class="swiper-slide">
                      <a href="javascript:;">
                        <img src="http://iph.href.lu/750x100?text=750*100" width="750" height="100">
                      </a>
                  </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
          </div>
        </div>
        <!--三入口-->
        <div class="three-enter">
          <a href="/mobile/fenlei" class="a">
            <span>问题分类</span>
          </a>
          <a href="/mobile/jingxuan" class="b">
            <span>问题精选</span>
          </a>
          <a href="/mobile/ku" class="c">
            <span>问题库</span>
          </a>
          <a href="/mobile/huati" class="c">
            <span>新话题</span>
          </a>
        </div>
        <!--列表-->
        <div class="weui-tab weui-panel weui-panel_access article-list mt10">
          <div class="weui-navbar">
            <a href="#tab1" class="weui-navbar__item weui-bar__item--on">最新</a>
            <a href="#tab2" class="weui-navbar__item">精选</a>
            <a href="#tab3" class="weui-navbar__item">热门</a>
            <a href="#tab4" class="weui-navbar__item">未解决</a>
            <a href="#tab5" class="weui-navbar__item">已解决</a>
          </div>
          <div class="weui-tab__bd">
            <div class="weui-panel__bd weui-tab__bd-item weui-tab__bd-item--active" id="tab1">
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃 什么 不能 一起一起吃 什么 不能 一起</li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="weui-panel__bd weui-tab__bd-item" id="tab2">
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">游戏</i>标题二</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃 什么 不能 一起一起吃 什么 不能 一起</li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="weui-panel__bd weui-tab__bd-item" id="tab3">
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题三</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃 什么 不能 一起一起吃 什么 不能 一起</li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="weui-panel__bd weui-tab__bd-item" id="tab4">
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题四</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃 什么 不能 一起一起吃 什么 不能 一起</li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="weui-panel__bd weui-tab__bd-item" id="tab5">
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题五</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃</li>
                  </ul>
                </div>
              </a>
              <a href="<?php echo base_url() ?>mobile/pages" target="_parent" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box_text">
                  <h4 class="weui-media-box__title"><i class="type">美食</i>标题标题标题标题标题标题标题标题标题标题标题标题标题标题一</h4>
                  <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">2020-01-02</li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">柿子 什么 不能 一起吃 什么 不能 一起一起吃 什么 不能 一起</li>
                  </ul>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="home-type">
        <div class="weui-panel__hd">
          分类一
        </div>
        <div class="weui-panel__bd">
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩什么游戏好玩什么游戏好玩什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
        </div>
      </div>
      <div class="home-type">
        <div class="weui-panel__hd">
          分类二
        </div>
        <div class="weui-panel__bd">
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
        </div>
      </div>
      <div class="home-type">
        <div class="weui-panel__hd">
          分类三
        </div>
        <div class="weui-panel__bd">
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
        </div>
      </div>
      <div class="home-type">
        <div class="weui-panel__hd">
          分类四
        </div>
        <div class="weui-panel__bd">
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩什么游戏好玩什么游戏好玩什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
        </div>
      </div>
      <div class="home-type">
        <div class="weui-panel__hd">
          分类五
        </div>
        <div class="weui-panel__bd">
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
        </div>
      </div>
      <div class="home-type">
        <div class="weui-panel__hd">
          分类六
        </div>
        <div class="weui-panel__bd">
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
          <a class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">什么游戏好玩</h4>
            <p class="weui-media-box__desc">2020-09-09</p>
          </a>
        </div>
      </div>
      <div class="weui-loadmore" id="article_loading">
          <i class="weui-loading"></i>
          <span class="weui-loadmore__tips">正在加载</span>
      </div>
      <div class="home-huati">
        <div class="weui-panel weui-panel_access">
        <div class="weui-panel__hd">新话题</div>
        <div class="weui-panel__bd">
          <a href="/mobile/huati" class="weui-media-box weui-media-box_appmsg">
            <div class="weui-media-box__hd">
              <img src="http://iph.href.lu/60x60?text=60*60" width="60" height="60">
            </div>
            <div class="weui-media-box__bd">
              <h4 class="weui-media-box__title f16">标题一</h4>
              <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
              <p class="col-gray9 f12">发布时间:2020-09-09 19:00:00</p>
            </div>
          </a>
          <a href="/mobile/huati" class="weui-media-box weui-media-box_appmsg">
            <div class="weui-media-box__hd">
              <img src="http://iph.href.lu/60x60?text=60*60" width="60" height="60">
            </div>
            <div class="weui-media-box__bd">
              <h4 class="weui-media-box__title f16">标题二</h4>
              <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
              <p class="col-gray9 f12">发布时间:2020-09-09 19:00:00</p>
            </div>
          </a>
          <a href="/mobile/huati" class="weui-media-box weui-media-box_appmsg">
            <div class="weui-media-box__hd">
              <img src="http://iph.href.lu/60x60?text=60*60" width="60" height="60">
            </div>
            <div class="weui-media-box__bd">
              <h4 class="weui-media-box__title f16">标题一</h4>
              <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
              <p class="col-gray9 f12">发布时间:2020-09-09 19:00:00</p>
            </div>
          </a>
          <a href="/mobile/huati" class="weui-media-box weui-media-box_appmsg">
            <div class="weui-media-box__hd">
              <img src="http://iph.href.lu/60x60?text=60*60" width="60" height="60">
            </div>
            <div class="weui-media-box__bd">
              <h4 class="weui-media-box__title f16">标题二</h4>
              <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
              <p class="col-gray9 f12">发布时间:2020-09-09 19:00:00</p>
            </div>
          </a>
          <a href="/mobile/huati" class="weui-media-box weui-media-box_appmsg">
            <div class="weui-media-box__hd">
              <img src="http://iph.href.lu/60x60?text=60*60" width="60" height="60">
            </div>
            <div class="weui-media-box__bd">
              <h4 class="weui-media-box__title f16">标题一</h4>
              <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
              <p class="col-gray9 f12">发布时间:2020-09-09 19:00:00</p>
            </div>
          </a>
          <a href="/mobile/huati" class="weui-media-box weui-media-box_appmsg">
            <div class="weui-media-box__hd">
              <img src="http://iph.href.lu/60x60?text=60*60" width="60" height="60">
            </div>
            <div class="weui-media-box__bd">
              <h4 class="weui-media-box__title f16">标题二</h4>
              <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
              <p class="col-gray9 f12">发布时间:2020-09-09 19:00:00</p>
            </div>
          </a>
        </div>
        <div class="weui-panel__ft">
          <a href="/mobile/huati" class="weui-cell weui-cell_access weui-cell_link">
            <div class="weui-cell__bd">查看更多</div>
            <span class="weui-cell__ft"></span>
          </a>
        </div>
      </div>
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
    <?php include_once('templete/tabbar.php') ?>

    <link rel="stylesheet" href="/htdocs/mobile/dist/css/swiper.min.css?<?php echo CACHE_TIME; ?>">
    <link rel="stylesheet" href="/htdocs/mobile/dist/css/animate.min.css?<?php echo CACHE_TIME; ?>">
    <script src="/htdocs/mobile/dist/js/swiper.min.js?<?php echo CACHE_TIME; ?>"></script>
    <script src="/htdocs/mobile/dist/js/swiper.animate.min.js?<?php echo CACHE_TIME; ?>"></script>

    <script type="text/javascript">
    $(function(){
        var mySwiper_banner = new Swiper ('#banner_swiper', {
            loop : true,
            autoplay: {
                delay: 8000,//8秒切换一次
            },
            pagination: {
                el: '.swiper-pagination',
            }
        })
    })
    </script>
    </body>
</html>
