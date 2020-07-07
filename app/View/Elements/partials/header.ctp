<div class="container navbar-main-menu">
    <div class="main-logo">
        <a href="/"><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a>
    </div>
    <div class="nav-side-menu">
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
            <li class="phone-number-main-top">
                <a href="javascript:void(0);" class="phone-number-top"><img src="../img/icon_top/phone.svg"></a>
                <span class="font-size-18 font-weight">0915229082</span>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>

<!-- Static navbar -->

