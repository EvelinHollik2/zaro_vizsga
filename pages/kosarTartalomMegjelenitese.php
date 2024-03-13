<pre>
    <?php
    $db = new mysqli('localhost', 'root', '', 'webshop');

    if (isset($_POST['kivalasztva']) && !empty($_POST['kivalasztva'])) {
        $termekid = $_POST['kivalasztva'];
        $termekid_string = implode(',', $termekid);
        $query = "SELECT * FROM termekek WHERE termekid IN ($termekid_string)";
        $result = $db->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
                $termek = array(
                    'id' => $row['termekid'],
                    'nev' => $row['termeknev'],
                    'ar' => $row['termekar'],
                    'kep' => $image
                );
                $termek_megtalalva = false;
                if (isset($_SESSION['kosar'])) {
                    foreach ($_SESSION['kosar'] as $kosar_termek) {
                        if ($kosar_termek['id'] == $termek['id']) {
                            $termek_megtalalva = true;
                            break;
                        }
                    }
                } else {
                    // -- kosár üres
                }
                if (!$termek_megtalalva) {
                    $_SESSION['kosar'][] = $termek;
                }
            }
        } else {
            echo 'Nincs találat.';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($POST['delete_item'])) {
            $delete_index = $_POST['delete_index'];
            unset($_SESSION['kosar'][$delete_index]);
            $_SESSION['kosar'] = array_values($_SESSION['kosar']);
        }
    }
    if (!empty($_SESSION['kosar'])) {
        foreach ($_SESSION['kosar'] as $index => $termek) {
            echo '<img src="' . $termek['kep'] . '" style="width: 100px ;">';
            echo '<div class="termek">';
            echo '<h2>' . $termek['nev'] . '</h2>';
            echo '<p>Ár: ' . $termek['ar'] . ' Ft</p>';
            // Itt további adatokat jeleníthetsz meg a termékekről
            echo '<imput type="hidden" name="delete_index" value="' . $index . '">';
            echo '<button class="btn-danger" name="delete_item" >törlés</button>';
            echo '</div>';
        }
    } else {
        echo 'A kosár üres.';
    }
    ?>
<a class="nav-link" href="index.php?menu=buy"><button class="btn">Vásárlás</button></a>
</pre>

