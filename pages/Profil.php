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
