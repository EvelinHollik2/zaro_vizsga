<div class="row">
    <?php
    foreach ($db->KutyaTermek() as $row) {
        $image = null;
        if (file_exists("./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".jpg")) {
            $image = "./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".jpg";
        } else if (file_exists("./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".jpeg")) {
            $image = "./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".jpeg";
        } else if (file_exists("./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".png")) {
            $image = "./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".png";
        } else if (file_exists("./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".webp")) {
            $image = "./Kepek/a_vasarlas/k/" . $row['ktermeknev'] . ".webp";
        } else {
            $image = "./images/";
        }
        $card = '<div class="card" style="width: 18rem;">
                    <img src="'.$image.'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['ktermeknev'] . '</h5>' .
                '<p class="card-text">Darabszám: ' . $row['ktermekdarab'] . '</p>' .
                '<p class="card-text">Termék ára: ' . $row['ktermekar'] . '</p>                
                    <a class="nav-link" href="index.php?menu=kosar"><button>Kosárba</button></a>
                    </div>
                </div>
            ';
        
        echo $card;
    }
    ?>
</div>