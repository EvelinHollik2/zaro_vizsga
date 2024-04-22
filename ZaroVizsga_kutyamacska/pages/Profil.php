<div class="row">
    <?php
    $row = $db->Profil();
    $card = '<div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['username'] . '</h5>' .
            '<p class="card-text">Email cím: ' . $row['email'] . '</p>' .
            '<p class="card-text">Jelszó: ' . $row['password'] . '</p>' .
            '<a class="nav-link" href="index.php?menu=profil_szerkesztes"><button>Szerkesztés</button></a>                
                    </div>
                </div>
            ';

    echo $card;
    ?>

</div>

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