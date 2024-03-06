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
                
                echo '<div class="termekek" style="width: 18rem;">';
                echo '<img src="' . $image . '" alt="...">';
                echo '<h2> ' . $row['termeknev'] . '</h2>';
                echo '<p> ' . $row['termekar'] . ' Ft</p>';
                echo '</div>';                
            }
        } else {
            echo 'Nincs találat.';
        }
    } else {
        echo 'Nincs kiválasztva termék.';
    }

    ?>
<a class="nav-link" href="index.php?menu=buy"><button class="btn">Vásárlás</button></a>
</pre>
