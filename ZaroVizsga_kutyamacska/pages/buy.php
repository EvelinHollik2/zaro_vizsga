<?php
if (filter_input(INPUT_POST, 'Mentes', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
    $irszam = filter_input(INPUT_POST, "irszam");
    $telepules = htmlspecialchars(filter_input(INPUT_POST, "telepules"));
    $utca = htmlspecialchars(filter_input(INPUT_POST, 'utca'));
    $hazszam = filter_input(INPUT_POST, "hazszam");
    $emelet = htmlspecialchars(filter_input(INPUT_POST, 'emelet'));
    $telefonszam = htmlspecialchars(filter_input(INPUT_POST, 'telefonszam'));
    $db->szallit($irszam, $telepules, $utca, $hazszam, $emelet, $telefonszam);
}
    $db->szalladat()
?>
<center>
    <div class='signup-container'>
        <div class='left-container'>
            <h1>
                Szállítási adatok
            </h1>
        </div>
        <div class='right-container'>
            <div class="h">
                <div class='set'>
                    <div class="container szallit">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="irszam" class="form-label">Irányítószám</label>
                                <input type="number" class="form-control" id="irszam" value="<?php echo $_SESSION['irszam'] ?>" name="irszam" maxlength="4">
                            </div>
                            <div class="mb-3">
                                <label for="telepules" class="form-label">Település</label>
                                <input type="text" class="form-control" id="telepules" value="<?php echo $_SESSION['telepules'] ?>" name="telepules">
                            </div>
                            <div class="mb-3">
                                <label for="utca" class="form-label">Utca</label>
                                <input type="text" class="form-control" id="utca" value="<?php echo $_SESSION['utca'] ?>" name="utca">
                            </div>
                            <div class="mb-3">    
                                <label for="hazszam" class="form-label">Hazszam</label>
                                <input type="number" class="form-control" id="hazszam" value="<?php echo $_SESSION['hazszam'] ?>" name="hazszam">
                            </div>
                            <div class="mb-3">    
                                <label for="emelet" class="form-label">Emelet</label>
                                <input type="text" class="form-control" id="emelet" value="<?php echo $_SESSION['emelet'] ?>" name="emelet">
                            </div>
                            <div class="mb-3">
                                <label for="telefonszam" class="form-label">Telefonszám</label>
                                <input type="text" class="form-control" id="telefonszam" value="<?php echo $_SESSION['telefonszam'] ?>" name="telefonszam" maxlength="20">
                            </div>
                            <button type="submit" class="btn btn-primary" name="Mentes" value="true">Mentés </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>

<a class="nav-link" href="index.php?menu=payment"><button class="btn">Fizetés</button></a>

