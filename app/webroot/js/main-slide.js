$(document).ready(function(){
    if ($(window).width() > 767) {
        //remove even click li tag
        $('.navbar-main-menu .head-nav-side-menu ul li').on('click', function (e) {
            e.stopPropagation();
        });
    } else {
        $('.navbar-main-menu .head-nav-side-menu ul li').unbind('mouseenter');
        $('.navbar-main-menu .head-nav-side-menu ul li').unbind('mouseleave');
    }

    $('.search-main-top .search-top').on('click', function() {
        $('.main-social-icon-top .search-main-top img.no-active').css('display', 'none');
        $('.main-social-icon-top .search-main-top img.active').css('display', 'block');
        $('.main-social-icon-top .search-main-top .txt-search-top').toggleClass('active');
    });

    $("#searchclear").click(function(){
        // $('.main-social-icon-top .search-main-top .txt-search-top').css('display', 'none');
        $('#searchinput').val('');
    });
    $('#searchinput').on('focus', function() {
        $('.main-social-icon-top .txt-search-top img.icon-search-top').css('display', 'none');
    });

    //phone number top
    $('.phone-number-top').mouseover(function() {
        $('.phone-number-main-top span').css('display', 'block');
    }).mouseout(function() {
        $('.phone-number-main-top span').css('display', 'none');
    });

    $('.contact-main-top').on('click', function() {
        $('.main-social-icon-top .contact-main-top img.no-active').css('display', 'none');
        $('.main-social-icon-top .contact-main-top img.active').css('display', 'block');
        $('.main-social-icon-top .contact-main-top ul').toggleClass('active');
    });

    //select product form footer
    $('.select-product-frm').selectpicker();

    // remove placeholder on focus $('input,textarea') in comment product page
    $('textarea').focus(function(){
        $(this).removeAttr('placeholder');
    });
});

function clickItemUse(tags) {
    var header = document.getElementById('method-use');
    var getClassActive = header.getElementsByClassName('active');
    getClassActive[0].className = getClassActive[0].className.replace("active","");
    $(tags).addClass('active');
    var expandedImgUse = document.getElementById("expandedImgUse");
    console.log($(tags).children('img').attr('src'));
    expandedImgUse.src = $(tags).children('img').attr('src');
    expandedImgUse.parentElement.style.display = "block";
}
function clickItemColor(tag) {
    var header = document.getElementById('choose-color-item');
    var getClassActive = header.getElementsByClassName('active');
    getClassActive[0].className = getClassActive[0].className.replace("active","");
    $(tag).addClass('active');

    var color = '';
    var x = $(tag).css('background-color');
    color = hexc(x);

    var getTagClass = document.getElementsByClassName('image-detail-item');
    var length = getTagClass.length;
    for(var i = 0; i < length; i++) {
        getTagClass[i].style.display = "none";
    }
    var getTagId = document.getElementById(color.toUpperCase());
    getTagId.style.display = "block";
}

function hexc(colorval) {
  var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  delete(parts[0]);
  for (var i = 1; i <= 3; ++i) {
    parts[i] = parseInt(parts[i]).toString(16);
    if (parts[i].length == 1) parts[i] = '0' + parts[i];
  }
    color = parts.join('');
  return color;
}