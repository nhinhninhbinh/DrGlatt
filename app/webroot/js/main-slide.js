$(document).ready(function(){
    // search icon top
    $(".search-main-top").mouseover(function() {
        $('.txt-search-top').css('display', 'block');
    });
    $("#searchclear").click(function(){
        $('.txt-search-top').css('display', 'none');
        // $("#searchinput").val('');
    });

    //phone number top
    $('.phone-number-top').mouseover(function() {
        $('.phone-number-main-top span').css('display', 'block');
    }).mouseout(function() {
        $('.phone-number-main-top span').css('display', 'none');
    });

    // login and logout
    $('.contact-main-top').mouseover(function() {
        $('.contact-main-top ul').css('display', 'block');
    }).mouseout(function() {
        $('.contact-main-top ul').css('display', 'none');
    });

    //select product form footer
    $('.select-product-frm').selectpicker();
    // $('.bootstrap-select .dropdown-menu li').addClass("test");


    // remove placeholder on focus $('input,textarea') in comment product page
    $('textarea').focus(function(){
        $(this).removeAttr('placeholder');
    });

    // var heightDiv = $('.address-detail-order-one');
    // $('.detail-order div.row > div.col .address-detail-order').height(heightDiv);
    // console.log(heightDiv.height());

});
function searchTop() {
  $('.txt-search-top').css('display', 'block');
}

function clickItemUse(tags) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = $(tags).children('img').attr('src')
    expandImg.parentElement.style.display = "block";
}