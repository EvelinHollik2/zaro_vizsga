<main>
    <!-- Mozgó kép sorozat -->
    <div id="slider" class="container carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
        </ul>
        <br>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Kepek/k3.jpg" alt="kutyus">
            </div>
            <div class="carousel-item">
                <img src="Kepek/i.png" alt="cicus">
            </div>
            <div class="carousel-item">
                <img src="Kepek/i2.png" alt="kutyus">
            </div>
            <div class="carousel-item">
                <img src="Kepek/k5.jpeg" alt="cicus">
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</main>
<br>

<footer class="container-fluid bg-dark text-white">
    <div class="container d-flex justify-content-between row mx-auto py-5">
        <div class="col-6">
            <img src="./Kepek/Tappancs2.png" alt="Logo" class="TAP">
            <h5>+36 70 954 3258</h5>
            <h5>Email: Cats.Dogs@gmail.com</h5>

        </div>
        <div class="col-4">
            <h4>Follow Us</h4>
            <p><img src="./Kepek/Facebook Iconvector.svg" alt="Facbook" class="plat"><img src="./Kepek/Instagram Iconvector.svg" alt="Instagram"  class="plat"><img src="./Kepek/Twitter Iconvector.svg" alt="Twitter" class="plat"></p>
        </div>
    </div>
</footer>


<script defer src="bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="vegyes.js"></script>
<script>

    $(function () {
        $('.toggleNav').on('click', function () {
            $('nav ul').toggleClass('open');
        });
    });

</script>

