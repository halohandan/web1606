<?php
    header('Content-Type:text/html;charset=UTF-8');
?>
    //<!--响应式导航条-->
        <div class="navbar navbar-default">
        <div class="container">
            <!--导航条头部，包含商标+汉堡包-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="images/logo_031.gif" alt=""/>
                </a>
                <a data-toggle="collapse" href="#my-menu" class="navbar-toggle" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </div>
            //<!--导航条折叠部分，包含菜单、表单、文字...-->
            <div id="my-menu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active time-show"><a href="#">首页</a></li>
                    <li class="time-show"><a href="#">课堂</a></li>
                    <li class="time-show"><a href="#">购物</a></li>
                    <li class="time-show"><a href="#">健康餐</a></li>
                    <li class="time-show"><a href="#">音乐库</a></li>
                </ul>

                <a class="navbar-link navbar-text navbar-right" href="#">注册</a>
                <span class="navbar-text navbar-right">|</span>
                <a class="navbar-link navbar-text navbar-right" href="#">登陆</a>
                <!--在导航条中添加一个搜索表单-->
                <form action="#" class="navbar-form navbar-right">
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="kw">请输入搜索关键字</label>
                        <input class="form-control" id="kw" placeholder="请输入搜索关键字">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
       // <!--轮播广告图-->
        <div class="container-fluid advert">
            <div id="lunbo" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/banner1.jpg">
                        <div class="carousel-caption">
                            <h1>keep</h1>
                            <h3>规范你的训练过程</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner22.jpg">
                        <div class="carousel-caption">
                            <h1>Change</h1>
                            <h3>分享汗水后你的性感</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner3.jpg">
                        <div class="carousel-caption">
                            <h1>Time</h1>
                            <h3>全程记录你的健身数据</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner4.jpg">
                        <div class="carousel-caption">
                            <h1>Passion</h1>
                            <h3>量体裁衣，让你爱上健身</h3>
                        </div>
                    </div>
                </div>
                <a data-slide="prev" class="carousel-control left" href="#lunbo">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a data-slide="next" class="carousel-control right" href="#lunbo">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <ul class="carousel-indicators">
                    <li data-slide-to="0" data-target="#lunbo" class="active"></li>
                    <li data-slide-to="1" data-target="#lunbo"></li>
                    <li data-slide-to="2" data-target="#lunbo"></li>
                    <li data-slide-to="3" data-target="#lunbo"></li>
                </ul>
            </div>
        </div>