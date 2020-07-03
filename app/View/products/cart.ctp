<div class="cart-product">
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-orange">
                <tr>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Tổng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td><img src="../img/cart/1.png" /></td>
                  <td class="font-size-24 font-weight">Lorem ipsum</td>
                  <td class="font-size-18 font-weight">25.000Vnđ</td>
                  <td>

                    <div class="cart-plus-minus" data-target="amount-1">
                        <button class="btn cart-minus-1">-</button>
                        <input type="text" id="amount-1" value="1" min="1" max="300" disabled>
                        <button class="btn cart-plus-1">+</button>
                    </div>

                  </td>
                  <td class="font-size-18 font-weight">25.000Vnđ <i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <td><img src="../img/cart/2.png" /></td>
                  <td class="font-size-24 font-weight">Lorem ipsum</td>
                  <td class="font-size-18 font-weight">25.000Vnđ</td>
                  <td>

                        <div class="cart-plus-minus" data-target="amount-2">
                          <button class="btn cart-minus-1">-</button>
                          <input type="text" id="amount-2" value="1" min="1" max="300" disabled>
                          <button class="btn cart-plus-1">+</button>
                        </div>

                  </td>
                  <td class="font-size-18 font-weight">25.000Vnđ <i class="fa fa-trash-o" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <td><img src="../img/cart/3.png" /></td>
                  <td class="font-size-24 font-weight">Lorem ipsum</td>
                  <td class="font-size-18 font-weight">25.000Vnđ</td>
                  <td>
                      

                        <div class="cart-plus-minus" data-target="amount-3">
                          <button class="btn cart-minus-1">-</button>
                          <input type="text" id="amount-3" value="1" min="1" max="300" disabled>
                          <button class="btn cart-plus-1">+</button>
                        </div>

                  </td>
                  <td class="font-size-18 font-weight">25.000Vnđ <span onclick='deleteRowCart(this)'><i class="fa fa-trash-o" aria-hidden="true"></i></span></td>
                </tr>
            </tbody>
        </table>
        <div class="total-cart">
            <p class="font-size-18 font-weight">TỔNG: <input type="text" id="total" class="font-size-24 font-weight" value="750.000Vnđ"/></p>
            <a href="/infoCustomOrder"><button class="font-size-24 font-weight">Tiến hành đặt hàng</button></a>
        </div>
    </div>
</div>
<div class="clear"></div>
<?= $this->Html->script('cart'); ?>