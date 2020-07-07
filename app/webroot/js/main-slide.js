$(document).ready(function(){
    if ($(window).width() > 767) {
        //remove even click li tag
        $('.navbar-main-menu .nav-side-menu ul li').on('click', function (e) {
            e.stopPropagation();
        });
    } else {
        $('.navbar-main-menu .nav-side-menu ul li').unbind('mouseenter');
        $('.navbar-main-menu .nav-side-menu ul li').unbind('mouseleave');
    }

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

});
function searchTop() {
  $('.txt-search-top').css('display', 'block');
}

function clickItemUse(tags) {
    var header = document.getElementById('method-use');
    var getClassActive = header.getElementsByClassName('active');
    getClassActive[0].className = getClassActive[0].className.replace("active","");
    $(tags).addClass('active');
    var expandedImgUse = document.getElementById("expandedImgUse");
    expandedImgUse.src = $(tags).children('img').attr('src');
    expandedImgUse.parentElement.style.display = "block";
}