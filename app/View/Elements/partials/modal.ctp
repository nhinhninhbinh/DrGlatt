<!-- Modal -->
<div class="modal fade" id="loginUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="left-content">
                        <div class="main-logo">
                            <a href="/"><?= $this->Html->image('logo.svg', array('alt' => 'Dr glatt')); ?></a>
                        </div>
                        <div class="content-text">
                            <p style="margin-bottom: 20px;">Dr Glatt là một đội ngũ đam mê, yêu thích thiết kế, lái xe thiết kế, sống để cung cấp thêm sự tự tin trên khuôn mặt của bạn khi bạn bước ra khỏi cửa. Khi bạn cảm thấy tự tin, bạn tạo ra nhiều hơn - và nhiệm vụ của chúng tôi đã hoàn thành.</p>
                            <p>Để đạt được điều này, chúng tôi đang mang đến một loạt các thiết bị làm đẹp cao cấp tiêu chuẩn mới có thể được sử dụng tại nhà của bạn.</p>
                            <p>Để đạt được điều này, chúng tôi đang mang đến một loạt các thiết bị làm đẹp cao cấp tiêu chuẩn mới có thể được sử dụng tại nhà của bạn.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="right-content">
                        <ul class="nav nav-tabs" style="padding-left: 75px;padding-bottom: 17px;padding-top: 31px;">
                            <li class="active">
                                <a href="#login" data-toggle="tab">Đăng nhập</a>
                            </li>
                            <li>
                                <a href="#signUp" data-toggle="tab" style="padding-left: 113px;">Đăng ký</a>
                            </li>
                        </ul>
                      
                          
                        <div class="tab-content">
                            <div id="login" class="tab-pane fade in active">
                                <div class="login-form">
                                          <form style="padding-left: 11px;">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td class="font-size-24">Email</td> <td><input type="text" name="email" class="form-enter" placeholder="Nhập Email"></td>
                                                </tr>
                                            <tr>
                                                <td class="font-size-24" >Password</td> <td style="padding-top: 17px;"><input type="password" name="pwd" class="form-enter" placeholder="Mật khẩu từ 6 đến 12 ký tự"></td>
                                            </tr>
                                            <tr>
                                                <td class="font-size-24"></td> <td class="font-size-18 forget-pass" style="padding-top: 17px;">Quên mật khẩu? Nhấn vào đây</td>
                                            </tr>
                                            <tr>
                                                <td class="font-size-24""></td> <td style="padding-top: 46px;"><input class="login" type="submit" value="Đăng nhập"></td>
                                            </tr>
                                            <tr>
                                                <td class="font-size-24"></td> <td style="padding-top: 10px;">
                                                    <input class="logFb" type="submit" value="Đăng nhập bằng Facebook">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div id="signUp" class="tab-pane fade">
                                <div class="login-form">
                                      <form style="padding-left: 11px;">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td class="font-size-24">Họ và tên</td> <td><input type="text" name="email" class="form-enter" placeholder="Nhập họ và tên">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24" >SĐT</td> 
                                                    <td style="padding-top: 17px;">
                                                        <input type="password" name="pwd" class="form-enter" placeholder="Nhập số điện thoại">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24" >Email</td> 
                                                    <td style="padding-top: 17px;">
                                                        <input type="password" name="pwd" class="form-enter" placeholder="Nhập email">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24" >Mật khẩu</td> 
                                                    <td style="padding-top: 17px;">
                                                        <input type="password" name="pwd" class="form-enter" placeholder="Mật khẩu từ 6 đến 12 ký tự">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24" >Nhập lại</td>
                                                    <td style="padding-top: 17px;">
                                                        <input type="password" name="pwd" class="form-enter" placeholder="Nhập lại mật khẩu">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24" style="padding-top: 37px;">Giới tính</td>
                                                    <td style="padding-top: 37px;">
                                                        <div class="check-box">
                                                            <div class="round">
                                                                <input type="checkbox" id="checkbox1" />
                                                                <label for="checkbox"></label>
                                                            </div>
                                                            <div class="sex">Nam</div>
                                                            <div class="round" style="margin-left: 84px;">
                                                                <input type="checkbox" id="checkbox2" />
                                                                <label for="checkbox"></label>
                                                            </div>
                                                            <div class="sex">Nữ</div>
                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24" style="padding-top:17px;">Ngày sinh</td>
                                                    <td style="padding-top: 17px;">
                                                        <div class="date-pick">
                                                            <select id="yearBirth" value="mmmm"></select>
                                                            <select id="monthBirth"></select>
                                                            <select id="dateBirth"></select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-size-24""></td> 
                                                    <td style="padding-top: 46px;">
                                                        <input class="signUp" type="submit" value="Đăng ký">
                                                    </td>
                                                </tr>
                                            </table>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="buy">
    <div class="slide">
        <?php echo $this->element("slide/slide-top")?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                <?php echo $this->element("partials/nav-side-menu-left")?>
            </div>
            <div class="col-6 col-sm-6 col-md-8 col-lg-8 buy" style="padding-right: 0px;">
                <div class="gallery">

                    <div class="gallery-item">
                        <img class="gallery-image" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=500&h=500&fit=crop" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer" data-toggle="modal" data-target="#loginUser">
                        <div class="desc">
                            <div class="star-rating">
                              <input id="star-5" type="radio" name="rating" value="star-5" />
                              <label for="star-5" title="5 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-4" type="radio" name="rating" value="star-4" />
                              <label for="star-4" title="4 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-3" type="radio" name="rating" value="star-3" />
                              <label for="star-3" title="3 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-2" type="radio" name="rating" value="star-2" />
                              <label for="star-2" title="2 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-1" type="radio" name="rating" value="star-1" />
                              <label for="star-1" title="1 star">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                            </div>
                            <div class="product-name">
                                <p style="font-size: 24px;">Lorem ipsum</p>
                            </div>
                            <div class="price">
                                <p style="font-size: 18px;">2500.000Vnđ</p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop" alt="sunset behind San Francisco city skyline">
                        <div class="desc">
                            <div class="star-rating">
                              <input id="star-5" type="radio" name="rating" value="star-5" />
                              <label for="star-5" title="5 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-4" type="radio" name="rating" value="star-4" />
                              <label for="star-4" title="4 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-3" type="radio" name="rating" value="star-3" />
                              <label for="star-3" title="3 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-2" type="radio" name="rating" value="star-2" />
                              <label for="star-2" title="2 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-1" type="radio" name="rating" value="star-1" />
                              <label for="star-1" title="1 star">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                            </div>
                            <div class="product-name">
                                <p style="font-size: 24px;">Lorem ipsum</p>
                            </div>
                            <div class="price">
                                <p style="font-size: 18px;">2500.000Vnđ</p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=500&h=500&fit=crop" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
                        <div class="desc">
                            <div class="star-rating">
                              <input id="star-5" type="radio" name="rating" value="star-5" />
                              <label for="star-5" title="5 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-4" type="radio" name="rating" value="star-4" />
                              <label for="star-4" title="4 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-3" type="radio" name="rating" value="star-3" />
                              <label for="star-3" title="3 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-2" type="radio" name="rating" value="star-2" />
                              <label for="star-2" title="2 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-1" type="radio" name="rating" value="star-1" />
                              <label for="star-1" title="1 star">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                            </div>
                            <div class="product-name">
                                <p style="font-size: 24px;">Lorem ipsum</p>
                            </div>
                            <div class="price">
                                <p style="font-size: 18px;">2500.000Vnđ</p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=500&h=500&fit=crop" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
                        <div class="desc">
                            <div class="star-rating">
                              <input id="star-5" type="radio" name="rating" value="star-5" />
                              <label for="star-5" title="5 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-4" type="radio" name="rating" value="star-4" />
                              <label for="star-4" title="4 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-3" type="radio" name="rating" value="star-3" />
                              <label for="star-3" title="3 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-2" type="radio" name="rating" value="star-2" />
                              <label for="star-2" title="2 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-1" type="radio" name="rating" value="star-1" />
                              <label for="star-1" title="1 star">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                            </div>
                            <div class="product-name">
                                <p style="font-size: 24px;">Lorem ipsum</p>
                            </div>
                            <div class="price">
                                <p style="font-size: 18px;">2500.000Vnđ</p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=500&h=500&fit=crop" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
                        <div class="desc">
                            <div class="star-rating">
                              <input id="star-5" type="radio" name="rating" value="star-5" />
                              <label for="star-5" title="5 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-4" type="radio" name="rating" value="star-4" />
                              <label for="star-4" title="4 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-3" type="radio" name="rating" value="star-3" />
                              <label for="star-3" title="3 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-2" type="radio" name="rating" value="star-2" />
                              <label for="star-2" title="2 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-1" type="radio" name="rating" value="star-1" />
                              <label for="star-1" title="1 star">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                            </div>
                            <div class="product-name">
                                <p style="font-size: 24px;">Lorem ipsum</p>
                            </div>
                            <div class="price">
                                <p style="font-size: 18px;">2500.000Vnđ</p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=500&h=500&fit=crop" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
                        <div class="desc">
                            <div class="star-rating">
                              <input id="star-5" type="radio" name="rating" value="star-5" />
                              <label for="star-5" title="5 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-4" type="radio" name="rating" value="star-4" />
                              <label for="star-4" title="4 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-3" type="radio" name="rating" value="star-3" />
                              <label for="star-3" title="3 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-2" type="radio" name="rating" value="star-2" />
                              <label for="star-2" title="2 stars">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                              <input id="star-1" type="radio" name="rating" value="star-1" />
                              <label for="star-1" title="1 star">
                                <i class="active fa fa-star pro-star" aria-hidden="true"></i>
                              </label>
                            </div>
                            <div class="product-name">
                                <p style="font-size: 24px;">Lorem ipsum</p>
                            </div>
                            <div class="price">
                                <p style="font-size: 18px;">2500.000Vnđ</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clear"></div>
                <div class="pagination-corner-beauty">
                    <a href="#"><img src="../img/icon/pre.png"></a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>

                    <a href="#"><img src="../img/icon/next.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- forget modal -->

<!-- modal forget pass -->