<div class="w3-content w3-section main-slide-home-page">
    <div class="item-slide mySlides w3-animate-fading">
        <img class="" src="../img/Rectangle.png" style="width:100%">
        <div class="carousel-caption d-none d-md-block cation-main-slide">
            <h5 class="font-weight">Máy Rửa Mặt</h5>
            <p class="font-weight">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua.</p>
            <button type="submit" class="btn btn-slide-more">Xem Thêm</button>
        </div>
    </div>
    <div class="item-slide mySlides w3-animate-fading">
        <img class="" src="../img/slide1.jpg" style="width:100%">
        <div class="carousel-caption d-none d-md-block cation-main-slide">
            <h5 class="font-weight">Máy Rửa Mặt</h5>
            <p class="font-weight">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua.dg df g fdg df g</p>
            <button type="submit" class="btn btn-slide-more">Xem Thêm</button>
        </div>
    </div>
</div>

<script>
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
        setTimeout(carousel, 9000); // Change image every 2 seconds
    }
</script>









