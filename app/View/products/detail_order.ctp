<div class="detail-order">
    <div class="slide">
        <?php echo $this->element("slide/slide-sub-page")?>
    </div>
    <div class="container">
        <h2 class="font-size-48 font-weight">Chi Tiết Đơn Hàng</h2>
        <div class="row">
            <div class="col">
                <h4 class="font-size-24 font-weight">ĐỊA CHỈ NGƯỜI NHẬN</h4>
                <div class="address-detail-order-one">
                    <p class="name-detail-order font-size-20 font-weight">TRẦN THỊ TRANG</p>
                    <p class="address-name-order font-size-24 font-weight">Địa chỉ: 35 Lê Văn Lương Nhân Chính Thanh Xuân Hà Nội</p>
                    <p class="phone-detail-order font-size-24 font-weight">Điện thoại: 0982xx789</p>
                </div>
            </div>
            <div class="col">
                <h4 class="font-size-24 font-weight">HÌNH HỨC GIAO HÀNG</h4>
                <div class="address-detail-order">
                    <p class="font-size-24 font-weight">Phí vận chuyển: 19.000đ</p>
                </div>
                
            </div>
            <div class="col">
                <h4 class="font-size-24 font-weight">HÌNH THỨC THANH TOÁN</h4>
                <div class="address-detail-order">
                    <p class="font-size-24 font-weight">Thu tiền tại nhà</p>
                </div>
            </div>
        </div>

        
        <div class="table-responsive list-product-choose">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="font-size-24 font-weight">Sản phẩm</th>
                        <th scope="col" class="font-size-24 font-weight" style="text-align: center;">Giá</th>
                        <th scope="col" class="font-size-24 font-weight" style="text-align: center;">Số lượng</th>
                        <th scope="col" class="font-size-24 font-weight" style="text-align: center;">Tạm tính</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="../img/cart/1.png" />
                            <p class="font-size-18 font-weight" style="text-align: left;">Lorem ipsum</p>
                        </td>
                        <td class="font-size-18 font-weight" style="text-align: center;">25.000Vnđ</td>
                        <td>
                            <div class="cart-plus-minus" data-target="amount-1">
                                <button class="btn cart-minus-1 font-size-24 font-weight">-</button>
                                <input type="text" id="amount-1 font-size-24 font-weight" value="1" min="1" max="300" disabled>
                                <button class="btn cart-plus-1 font-size-24 font-weight">+</button>
                            </div>
                        </td>
                        <td class="font-size-18 font-weight" style="text-align: center;">25.000Vnđ</td>
                    </tr>
              </tbody>
            </table>

            <div class="cal-tranfer-product">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                               <span class="font-size-24 font-weight">Tạm tính</span>
                               <span class="font-size-24 font-weight">Phí vận chuyển</span>
                               <span class="font-size-24 font-weight">Tổng cộng</span>
                            </td>
                            <td>
                               <span class="font-size-18 font-weight">25.000Vnđ</span>
                               <span class="font-size-18 font-weight">3.000Vnđ</span>
                               <span class="font-size-18 font-weight">28.000Vnđ</span>
                            </td>
                            
                        </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <h2 class="font-size-48 font-weight">Trạng thái đơn hàng</h2>
        <!-- https://www.bootdey.com/snippets/view/Shop-Order-Tracking#html -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <div class="container padding-bottom-3x status-order-progress">
       
         
   
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"></div>
                </div>
                <h4 class="step-title font-size-18 font-weight">Đặt hàng thành công</h4>
              </div>
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"></div>
                </div>
                <h4 class="step-title font-size-18 font-weight">Đã lấy hàng</h4>
              </div>
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"></div>
                </div>
                <h4 class="step-title font-size-18 font-weight">Đóng gói hàng</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"></div>
                </div>
                <h4 class="step-title font-size-18 font-weight">Bàn giao vận chuyển</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"></div>
                </div>
                <h4 class="step-title font-size-18 font-weight">Đang vận chuyển</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"></div>
                </div>
                <h4 class="step-title font-size-18 font-weight">Giao hàng thành công</h4>
              </div>

            </div>
         
       
      </div>



    </div>
</div>
<div class="clear"></div>
<?= $this->Html->script('cart'); ?>


