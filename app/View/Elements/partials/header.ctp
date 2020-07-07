<div class="container navbar-main-menu">
    <div class="main-logo">
        <a href="/"><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a>
    </div>
    <div class="head-nav-side-menu">
        <div class="brand"><a href="/"><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content1"></i>
        <div class="menu-list">
            <ul id="menu-content1" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#products1" class="collapsed active">
                    <a class="font-size-18 font-weight" href="#">Về chúng tôi<span class="arrow"></span></a>
                    <ul class="sub-menu collapse" id="products1">
                        <li class="active"><a class="font-size-18 font-weight" href="/about">Câu chuyện Dr Glatt</a></li>
                        <li><a class="font-size-18 font-weight" href="/review">Review sản phẩm</a></li>
                        <li><a class="font-size-18 font-weight" href="/faq">Hỏi đáp</a></li>
                        <li><a class="font-size-18 font-weight" href="/news">Tin tức</a></li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#main-product" class="collapsed">
                    <a class="font-size-18 font-weight" href="#">Sản phẩm <span class="arrow"></span></a>
                    <ul class="sub-menu collapse" id="main-product">
                        <li><a class="font-size-18 font-weight" href="/product">San pham 1</a></li>
                        <li><a class="font-size-18 font-weight" href="/product">San pham 2</a></li>
                        <li><a class="font-size-18 font-weight" href="/product">San pham 3</a></li>
                    </ul>
                </li>
                <li><a class="font-size-18 font-weight" href="/buy">Mua hàng</a></li>
                <li><a class="font-size-18 font-weight" href="/beauty-corner">Góc làm đẹp</a></li>
                <li class="login-mobile">
                    <a class="font-size-18 font-weight" href="#">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-social-icon-top">
        <ul>
            <li class="search-main-top">
                <a href="javascript:void(0);" onclick="return searchTop();" class="search-top"><img src="../img/icon_top/search.png"></a>
                <div class="txt-search-top">
                    <input type="text" class="" id="searchinput" placeholder="&#xF002;" style="font-family:Arial, FontAwesome"/>
                    <span id="searchclear" class="glyphicon glyphicon-remove-circle"><i class="fa fa-times" aria-hidden="true"></i></span>
                </div>
            </li>
            <li class="contact-main-top">
                <a href="javascript:void(0);"><img src="../img/icon_top/username.png"></a>
                <ul>
                    <li><a class="font-size-18 font-weight" href="#">Đăng nhập</a></li>
                    <li><a class="font-size-18 font-weight" href="#">Đăng ký</a></li>
                    <li><a class="font-size-18 font-weight" href="#"><i class="fa fa-facebook"></i>Đăng nhập bằng facebook</a></li>
                </ul>
            </li>
            <li class="cart-main-top">
                <a href="/cart"><img src="../img/icon_top/cart.png"></a>
                <span class="font-size-18 font-weight">3</span>
            </li>
            <li class="phone-number-main-top" style="margin-left: 0px;">
                <a href="javascript:void(0);" class="phone-number-top"><img src="../img/icon_top/phone.svg"></a>
                <span class="font-size-18 font-weight">0915229082</span>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>

<style>
    .head-nav-side-menu ul .sub-menu li.active,
    .head-nav-side-menu li .sub-menu li.active {
        color: #d19b3d;
    }
    .head-nav-side-menu ul .sub-menu li.active a,
    .head-nav-side-menu li .sub-menu li.active a {
        color: #d19b3d;
    }
    .head-nav-side-menu ul .sub-menu li,
    .head-nav-side-menu li .sub-menu li {
        /*background-color: #181c20;*/
        border: none;
        line-height: 28px;
        border-bottom: 10px solid #fff;
        margin-left: 0px;
        padding: 7px 0px 10px;
    }
     .head-nav-side-menu ul .sub-menu li:hover,
    .head-nav-side-menu li .sub-menu li:hover {
        background: rgba(37, 108, 108, 0.65);
        /*box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);*/
    }

    .head-nav-side-menu li .sub-menu li:hover {
        background: rgba(37, 108, 108, 0.65);
        /*box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);*/
    }
    .head-nav-side-menu ul .sub-menu li:before,
    .head-nav-side-menu li .sub-menu li:before {
        font-family: FontAwesome;
        content: "\f054";
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
    }
    .head-nav-side-menu li {
        border-bottom: 19px solid #fff;
        background: #D6F2F2;
        /*box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);*/
        padding: 5px 0px 4px 12px;
    }

    /*#nav-bar .nav-side-menu li {
      border-bottom: 19px solid #fff;
    }
    #faq .nav-side-menu li {
      border-bottom: 30px solid #fff;
    }*/
    .head-nav-side-menu li a {
        text-decoration: none;
        color: #000000;
        font-family: "Noticia";
    }
    .head-nav-side-menu li a i {
        padding-left: 10px;
        width: 20px;
        padding-right: 20px;
    }
    .head-nav-side-menu li:hover {
        /*border-left: 3px solid #d19b3d;*/
        background-color: rgba(37, 108, 108, 0.65);;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
</style>

<!-- Static navbar -->