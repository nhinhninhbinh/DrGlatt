<div class="container main-nav">
    <div class="main-logo">
        <a href=""><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a>
    </div>
    <div class="main-menu-content">
        <ul>
            <li><a class="font-size-18 font-weight" href="">Về chúng tôi</a></li>
            <li>
                <a class="font-size-18 active font-weight" href="">Sản phẩm</a>
                <ul>
                    <li><a class="font-size-18 font-weight" href="#">San pham 1</a></li>
                    <li><a class="font-size-18 font-weight" href="#">San pham 2</a></li>
                    <li><a class="font-size-18 font-weight" href="#">San pham 3</a></li>
                </ul>
            </li>
            <li><a class="font-size-18 font-weight" href="">Mua hàng</a></li>
            <li><a class="font-size-18 font-weight" href="">Góc làm đẹp</a></li>
        </ul>
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
                <a href="javascript:void(0);"><img src="../img/icon_top/cart.png"></a>
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



