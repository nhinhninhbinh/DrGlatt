$(document).ready(function(){
  // main slide top
  $('.carousel').carousel();

  // search icon top
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

});
function searchTop() {
  $('.txt-search-top').css('display', 'block');
}