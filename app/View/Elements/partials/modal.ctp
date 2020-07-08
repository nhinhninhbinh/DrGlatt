<!-- Modal -->
<div class="modal fade" id="loginUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document" style="transform: translate(-50%,10px);">
        <div class="modal-content" style="width: 969px;">
            <div class="row"  style="padding-bottom: 21px;">
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
                            <div id="login" class="tab-pane active">
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
                                                <td class="font-size-24"></td> <td class="font-size-18 forget-pass" style="padding-top: 17px; cursor: pointer;" data-toggle="modal" data-target="#forgetPass" data-dismiss="modal">Quên mật khẩu? Nhấn vào đây</td>
                                            </tr>
                                            <tr>
                                                <td class="font-size-24"></td> <td style="padding-top: 46px;"><input class="login" type="submit" value="Đăng nhập"></td>
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
                                                            <div class="sex" style="font-size: 16px;">Nam</div>
                                                            <div class="round" style="margin-left: 84px;">
                                                                <input type="checkbox" id="checkbox2" />
                                                                <label for="checkbox"></label>
                                                            </div>
                                                            <div class="sex" style="font-size: 16px;">Nữ</div>
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

<script type="text/javascript">
// http://jsfiddle.net/hirani89/bq9uog1q/
function getDaysInMonth(month, year, daySelector) {
    var date = new Date(year, month - 1, 1); //get first date in month ,1
    var days = [];
    while (date.getMonth() == month - 1) {
        days[date.getDate()] = (date.getDate());
        date.setDate(date.getDate() + 1);
    }
    daySelector.find('option').remove();
    daySelector.append($("<option></option>").attr("value", '').text("Ngày"));
    for (var key in days) {
        daySelector.append($("<option></option>").attr("value", key).text(days[key]));
    }
}

for (var i = 1; i < 13; i++) {
    $('#month')
        .append($("<option></option>")
        .attr("value", i)
        .text(i));
}

var d = new Date();
var year = d.getFullYear();

$('body').on('DOMSubtreeModified', '#loginUser tr td div.same-as-selected', function(){
  // console.log($(this).text());
  // getDaysInMonth($(this).text(), year, $('#loginUser tr td div.select-selected'));
  getDaysInMonth($(this).text(), year, $('#day'));
});


// $('#month').change(function () {
//   alert('aaa');
//     var monthYear = $('#month').val();
//     getDaysInMonth(monthYear, year, $('#day'));
// });


for (var i = 1970; i <= year; i++) {
    $('#yeaer')
        .append($("<option></option>")
        .attr("value", i)
        .text(i));
}
</script>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>




<style type="text/css">
#forgetPass .content-text, #resetPass .content-text{
    padding: 28px 28px 30px 28px;
}
#forgetPass input.form-enter, #resetPass input.form-enter{
    margin-top: 17px;
    background: #D6F2F2;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border: none;
    padding: 8px 0px 9px 20px;
    width: 100%;
}

#forgetPass input.send, #resetPass input.send{
    margin-top: 25px;
    background: #E8A45F;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 22px;
    width: 80%;
    font-size: 24px;
    line-height: 33px;
    padding-top: 10px;
    padding-bottom: 11px;
    border: none;
    cursor: pointer;
}

#forgetPass .form-group, #resetPass .form-group{
    text-align: center;
}
#resetPass input.form-enter{
    pointer-events: none;
}
#resetPass .modal-content, #forgetPass .modal-content{
    width: 570px;
}

#loginUser .check-box .sex {
  font-size: 16px;
}
</style>