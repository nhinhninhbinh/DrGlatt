

      


<div class="container main-nav">
    <div class="main-logo">
        <a href="/"><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a>
    </div>
    <div class="main-menu-content">

        <nav class="navbar navbar-expand-md navbar-light main-nav-head">
            <a href="/"><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="font-size-18 font-weight" href="/about">Về chúng tôi</a>
                        <ul>
                            <li><a class="font-size-18 font-weight" href="/about">Câu chuyện Dr Glatt</a></li>
                            <li><a class="font-size-18 font-weight" href="/review">Review sản phẩm</a></li>
                            <li><a class="font-size-18 font-weight" href="/faq">Hỏi đáp</a></li>
                            <li><a class="font-size-18 font-weight" href="/news">Tin tức</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="font-size-18 active font-weight" href="/product">Sản phẩm</a>
                        <ul>
                            <li><a class="font-size-18 font-weight" href="/product">San pham 1</a></li>
                            <li><a class="font-size-18 font-weight" href="/product">San pham 2</a></li>
                            <li><a class="font-size-18 font-weight" href="/product">San pham 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="font-size-18 font-weight" href="/buy">Mua hàng</a></li>
                    <li class="nav-item dropdown"><a class="font-size-18 font-weight" href="/beauty-corner">Góc làm đẹp</a></li>
                </ul>
            </div>
        </nav>
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

