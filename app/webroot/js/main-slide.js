$(document).ready(function(){
  // main slide top
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    // end main slide

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
    // $('.bootstrap-select .dropdown-menu li').addClass("test");

});
function searchTop() {
  $('.txt-search-top').css('display', 'block');
}