
function kereses() {
    ker = document.getElementById("keres").innerHTML;
    eval(ker);
}

var myCarousel = document.querySelector('#myCarousel');
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: false
});

$('.search').addClass('active');
$('.overlay').removeClass('hidden');
$('input').focus(); // If there are multiple inputs on the page you might want to use an ID
;

$('.overlay').click(function () {
    $('.search').removeClass('active');
    $(this).addClass('hidden');
});

/*Kutya kosar
document.querySelectorAll('.cart button');
cartButton.forEach(button=>{
    button.addEventListener('click', cartClick);
});
function cartclick(){
let button = this;button.classList.add('cliked');
}*/

