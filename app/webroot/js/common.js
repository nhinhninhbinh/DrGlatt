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
        sliderRadios[index].click();
        console.log(sliderRadios[index].id);
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
        var expandImg = document.getElementById("expandedImg")
        expandImg.src = $(this).children().attr('src')
        expandImg.parentElement.style.display = "block";

        current[1].className = current[1].className.replace(" active", "");
        $(this).addClass('active');

    });

    $('.sub-gallery-2').on('click', function(){
        var current = document.getElementsByClassName("active");
        var expandImg = document.getElementById("expandedImg1")
        expandImg.src = $(this).children().attr('src')
        expandImg.parentElement.style.display = "block";

        current[1].className = current[1].className.replace(" active", "");
        $(this).addClass('active');

    });

    $('.text-tab').on('click', function(){
        console.log('ok');
    });

});

// var tabAction = function(){

// }