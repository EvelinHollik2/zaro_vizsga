<?php
if (filter_input(INPUT_POST, 'regisztraciosAdatok', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
    $pass1 = filter_input(INPUT_POST, "password");
    $pass2 = filter_input(INPUT_POST, "password2");
    $name = htmlspecialchars(filter_input(INPUT_POST, 'name'));
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $db->register($name, $email, $pass1);
    if ($pass1 == $pass2) {
        echo 'Jó';
    } else {
        //-- regisztráció indítása
        echo '<p>Nem egyeznek a jelszavak!</p>';
    }
}
?>
<center>
    <div class='signup-container'>
        <div class='left-container'>
            <h1>
                <a class="navbar-brand" href="javascript:void(0)"><img src="Kepek/Tappancs.png" alt="" class="tapi"></a>
                REGISZTRÁCIÓ
            </h1>
            <div class='puppy'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>

            </div>
        </div>
        <div class='right-container'>
            <div class="h">
                <div class='set'>
                    <div class="container">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail cím:</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="name" class="form-label">Felhasználó név:</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="password" class="form-label">Jelszó:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Jelszó megerősítés:</label>
                                <input type="password" class="form-control" id="password2" name="password2">
                            </div>
                            <br>
                            <button type="submit" class="btn" name="regisztraciosAdatok" value="true">Regisztráció</button>
                        </form>
                        <a href="index.php?oldalneve=bejelentkezes">Bejelentkezés</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
