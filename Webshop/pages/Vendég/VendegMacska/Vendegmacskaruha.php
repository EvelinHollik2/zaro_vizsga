<div class="container">
    <form action="index.php?menu=kosar" method="POST">
        <div class="row rendezes">
            <?php
            foreach ($db->MRTermekek() as $row) {
                $image = null;
                if (file_exists("./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".jpg")) {
                    $image = "./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".jpg";
                } else if (file_exists("./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".jpeg")) {
                    $image = "./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".jpeg";
                } else if (file_exists("./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".png")) {
                    $image = "./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".png";
                } else if (file_exists("./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".webp")) {
                    $image = "./Kepek/a_vasarlas/termekek/" . $row['termeknev'] . ".webp";
                } else {
                    $image = "./Kepek/a_vasarlas/noimg/noimage.jpg";
                }
                $card = '<div class="card col-3" style="width: 18rem;">
                    <img src="' . $image . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['termeknev'] . '</h5>' .
                        '<p class="card-text">Termék darab: ' . $row['termekdb'] . '</p>' .
                        '<p class="card-text">Termék ár: ' . $row['termekar'] . ' Ft</p>' .
                        '<p class="card-text">Fajta: ' . $row['fajta'] . '</p>' .
                        '<a class="nav-link" href="index.php?menu=bejelentkezes"><button>Kosárba</button></a>'.
                        '</div>
                </div>
            ';

                echo $card;
            }
            ?>

        </div>
            <button type="submit" name="bevitel" value="1" id="megjel" class="btn">Kosár megjelenítése</button>        
    </form>
</div>