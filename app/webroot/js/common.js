$(document).ready(function(){

    var delay = 4500;
    var sliderRadios = document.getElementsByName("slider");
    var index=0
    var imageCount = sliderRadios.length;

    setInterval(function(){
        index++;
        if(index>imageCount-1){
            index=0;
        }
        // sliderRadios[index].click();
        // console.log(sliderRadios[index].id);
    },delay);


    $('#carousel-example').on('slide.bs.carousel', function (e) {
        /*
            CC 2.0 License Iatek LLC 2018 - Attribution required
        */
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 5;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });

    $('.sub-gallery-1').on('click', function(){
        var current = document.getElementsByClassName("active");
        var expandImg = document.getElementById("expandedImg");
        expandImg.src = $(this).children().attr('src');
        expandImg.parentElement.style.display = "block";

        current[1].className = current[1].className.replace(" active", "");
        $(this).addClass('active');

    });

    $('.sub-gallery-2').on('click', function(){
        var header = document.getElementById("tab-gallery-2");
        var current = header.getElementsByClassName("active");
        var expandImg = document.getElementById("expandedImg1");
        expandImg.src = $(this).children().attr('src');
        expandImg.parentElement.style.display = "block";

        current[1].className = current[1].className.replace(" active", "");
        $(this).addClass('active');

    });

    $(".buy-button").on('click', function(){
        window.location.href = "/Products/cart";
    });

    $(".cart-button").on('click', function(){
        window.location.href = "/Products/cart";
    });


    // select day, month, year
    $.fn.getDateSelect = function(year, month){
    var days = 30;
    var dateCert = this.val();
    if (month == 2){
        if(year == 0) {
            days = 29;
        } else {
            var isLeap = year % 400 === 0 || year % 100 !== 0 && year % 4 === 0 ? true : false;
            days = isLeap ? 29 : 28;
        }
    } else {
        if(month == 0 || month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12){
            days = 31;
        }
    }
    this.find('option[value!="0"]').remove();
    this.initDateSelect(1, days);
    if(parseInt(this.find('option:last').val()) < dateCert){
        this.val(0);
    } else {
        this.val(dateCert);
    }
    }
    $.fn.initDateSelect = function(from, to){
        for(var i = from; i <= to; i++){
            this.append('<option value="' + i + '">' + i + '</option>');
        }
    }
    $(function () {
        var initYearBirth = 0;
        var initMonthBirth = 0;
        var initDateBirth = 0;
        var d = new Date();
        $('#yearBirth').prepend('<option value="0">Năm</option>');
        $('#monthBirth').prepend('<option value="0">Tháng</option>');
        $('#dateBirth').prepend('<option value="0">Ngày</option>');
        $('option')
        $('#yearBirth').initDateSelect(1900, (d.getFullYear() - 17));
        $('#yearBirth').val(initYearBirth);
        $('#monthBirth').initDateSelect(1, 12);
        $('#monthBirth').val(initMonthBirth);
        $('#dateBirth').getDateSelect($('#yearBirth').val(), $('#monthBirth').val());
        $('#dateBirth').val(initDateBirth);
        $('#yearBirth, #monthBirth').change(function(){
            $('#dateBirth').getDateSelect($('#yearBirth').val(), $('#monthBirth').val());
        });
    });

});

// var tabAction = function(){

// }