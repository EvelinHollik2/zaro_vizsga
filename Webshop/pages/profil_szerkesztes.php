<?php
if (filter_input(INPUT_POST, "modosit", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $email2 = htmlspecialchars(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
    $pass3 = htmlspecialchars(filter_input(INPUT_POST, "pass"));
    $pass4 = htmlspecialchars(filter_input(INPUT_POST, "passwordUj"));
    $pass5 = htmlspecialchars(filter_input(INPUT_POST, "passwordUj2"));
    $username2 = htmlspecialchars(filter_input(INPUT_POST, "username"));
    if ($db->UserEdit($username2, $email2, $pass5, $username2, $pass3)) {
        header("Location: index.php");
    }
} else {
    ?>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email cím</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email cím" value="<?php echo $_SESSION["email"] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Régi Jelszó</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Jelszó" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Új Jelszó</label>
            <input type="password" class="form-control" name="passwordUj" id="passwordUj" placeholder="Jelszó" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jelszó megerősítése</label>
            <input type="password" class="form-control" name="passwordUj2" id="passwordUj2" placeholder="Jelszó" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Felhasználó név</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Felhasználó név" value="<?php echo$_SESSION['username'] ?>">
        </div>
        <button type="submit" class="btn btn-primary" value="1" name="modosit">GO</button>
    </form>
    <?php
}

