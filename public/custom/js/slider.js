//Slider Code
function  slide() {
    $('#myCarousel').carousel({
        interval: 5000,
        pause: "hover",
    });


    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        //                alert(id);
        $('#myCarousel').carousel(id);

    });


    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());


        //               $('#thumbnail_img_div > .item').removeClass('active');
        // $( ".slider_tile").find( ".thumbnail" ).css("border", "none");
        // $('#carousel-selector-'+id).css("border", "solid 0.2px green");

        $(".slider_tile").find(".thumbnail").css({'opacity': '0.8', 'box-shadow': 'none'});
        $('#carousel-selector-' + id).css({'opacity': '0.5', 'box-shadow': '1px -1px 1px 2px green'});

    });
}
