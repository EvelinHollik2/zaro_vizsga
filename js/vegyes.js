<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
$(function () {
    $('.toggleNav').on('click', function () {
        $('.flex-nav ul').toggleClass('open');
    });
});

function kereses() {
    ker = document.getElementById("keres").innerHTML;
    eval(ker);
}

var myCarousel = document.querySelector('#myCarousel');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
})

$('.search').addClass('active');
$('.overlay').removeClass('hidden');
$('input').focus(); // If there are multiple inputs on the page you might want to use an ID
;

$('.overlay').click(function () {
    $('.search').removeClass('active');
    $(this).addClass('hidden');
});

/*Kutya mozgókép*/
