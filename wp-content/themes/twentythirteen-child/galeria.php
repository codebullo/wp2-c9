<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/css/swiper.css">

    <link rel="stylesheet" href="./css/swiperpersonal.css">

</head>

<body>

    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background-image:url(./images/1.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/2.jpg)"><a class="enlace" href="https://www.google.es/maps/place/Calle+Benjam%C3%ADn+de+Tudela,+39,+31008+Pamplona,+Navarra/@42.8104786,-1.6752236,17z/data=!3m1!4b1!4m15!1m12!4m11!1m3!2m2!1d-1.6752343!2d42.8106202!1m5!1m1!1s0xd50927f9bed9e9f:0x756f94cfdd0c2be9!2m2!1d-1.6752236!2d42.8104786!3e0!3m1!1s0xd50927f9bed9e9f:0x756f94cfdd0c2be9!6m1!1e1?hl=es"></a></div>
            <div class="swiper-slide" style="background-image:url(./images/3.jpg)"><a class="enlace" href="tel:948365751"></a></div>
            <div class="swiper-slide" style="background-image:url(./images/4.jpg)"><a class="enlace" href="http://www.kayapamplona.es/home/103-overdrive-1l-advanced.html"></a></div>
        <div class="swiper-slide" style="background-image:url(./images/5.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./images/6.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./images/7.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./images/8.jpg)"></div>
        
        
        </div>

        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background-image:url(./images/1.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/2.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/3.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/4.jpg)"></div>
                 <div class="swiper-slide" style="background-image:url(./images/5.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./images/6.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./images/7.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(./images/8.jpg)"></div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/js/swiper.min.js"></script>

    <script>
        var galleryTop = new Swiper('.gallery-top', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 10,
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 'auto',
            touchRatio: 0.2,
            slideToClickedSlide: true
        });
        galleryTop.params.control = galleryThumbs;
        galleryThumbs.params.control = galleryTop;
    </script>
</body>

</html>