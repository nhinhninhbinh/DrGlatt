<div class="info-custom-order">
    <div class="container">
        <div class="row">
            <div class="col col-md-7">
            	<h4 class="font-weight">THÔNG TIN KHÁCH HÀNG:</h4>
            	<div class="form-group row">
				    <label for="inputName" class="col-sm-5 col-form-label font-size-24 font-weight">Họ và tên</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control font-size-18" id="inputName" placeholder="họ và tên">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="inputName" class="col-sm-5 col-form-label font-size-24 font-weight">Điện thoại di động</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control font-size-18" id="inputName" placeholder="nhập số điện thoại">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="inputName" class="col-sm-5 col-form-label font-size-24 font-weight">Tỉnh/Thành phố</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control font-size-18" id="inputName" placeholder="Chọn Tỉnh/Thành phố">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="inputName" class="col-sm-5 col-form-label font-size-24 font-weight">Địa chỉ</label>
				    <div class="col-sm-7">
                        <textarea id="w3review" class="font-size-18" name="w3review" rows="3" placeholder="VD: 35 Lê Văn Lương .. "></textarea>

<!--				      <input type="text" class="form-control font-size-18" id="inputName" placeholder="VD: 35 Lê Văn Lương .. ">-->
				    </div>
				</div>
            </div>
            <div class="col col-md-4 your-order">
            	<h4 class="font-weight">ĐƠN HÀNG CỦA BẠN</h4>
                <table class="table tbl-your-order">
                    <tbody>
                    <tr>
                        <td>Sản phẩm</td>
                        <td>x3</td>
                        <td>Lorem ipsum</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>x2</td>
                        <td>Lorem ipsum sfsdf</td>
                    </tr>
                    <tr>
                        <td colspan="2">Phí vận chuyển</td>
                        <td>35.000Vnđ</td>
                    </tr>
                    <tr>
                        <td colspan="2">Tổng</td>
                        <td class="total-price">7500.000Vnđ</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="method-payment">
            <h4 class="font-weight">PHƯƠNG THỨC THANH TOÁN</h4>
            <div class="detail-method-payment">
                <div class="choose-paymen choose-paymen-cod active">
                    <input type="radio" id="male" name="cod" value="" checked>
                    <div class="content-choose-payment payment-cod">
                        <img src="../img/payment/1.png">
                        <div class="form-choose-payment">
                            <p class="title font-weight font-size-18">Thu tiền tại nhà (COD)</p>
                            <p class="font-weight font-size-14">Nhận hàng trả trực tiếp tiền cho ship</p>
                        </div>
                    </div>
                </div>
                <div class="choose-paymen choose-paymen-transfer">
                    <input type="radio" id="male" name="cod" value="">
                    <div class="content-choose-payment payment-transfer">
                        <img src="../img/payment/2.png">
                        <div class="form-choose-payment">
                            <p class="title font-weight font-size-18">Chuyển khoản (ATM)</p>
                            <p class="font-weight font-size-14">Sử dụng thẻ ATM hoặc dịch vụ Internet Banking để tiến hành chuyển khoản cho chúng tôi</p>
                        </div>
                    </div>
                </div>
                <div class="choose-paymen choose-paymen-nganluong">
                    <input type="radio" id="male" name="cod" value="">
                    <div class="content-choose-payment payment-nganluong">
                        <img src="../img/payment/3.png">
                        <div class="form-choose-payment">
                            <p class="title font-weight font-size-18">Thanh toán thông qua Nganluong.vn</p>
                            <p class="font-weight font-size-14">Sử dụng số dư Ngânlượng.vn ,ATM đã đăng kí Internet Banking hoặc thẻ Visa, Mastercard, JCB để tiến hành thanh toán</p>
                        </div>
                    </div>

                </div>
                <button type="button" class="font-size-24 font-weight" data-toggle="modal" data-target="#orderTracking">Thanh toán</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="orderTracking" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <p class="title-thanks font-size-48 font-weight">Cảm ơn bạn đã mua hàng tại <img src="../img/logo.png"></p>
            <p class="title-tracking font-size-48 font-weight">Theo dõi đơn hàng của bạn</p>
            <a href="/detailOrder"><button type="button" class="btn btn-oder-tracking font-size-24 font-weight">Theo dõi đơn hàng</button></a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.choose-paymen-cod').on('click', function(){
        $('.choose-paymen').removeClass('active');
        $(this).find('input').prop('checked', true);
        $(this).addClass('active');
    });
    $('.choose-paymen-transfer').on('click', function(){
        $('.choose-paymen').removeClass('active');

        $(this).find('input').prop('checked', true);
        $(this).addClass('active');
    });
    $('.choose-paymen-nganluong').on('click', function(){
        $('.choose-paymen').removeClass('active');
        $(this).find('input').prop('checked', true);
        $(this).addClass('active');
    });
</script>