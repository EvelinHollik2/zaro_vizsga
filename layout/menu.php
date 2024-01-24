<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=home">Főoldal</a>
                </li>
                <?php
                if ($_SESSION['login']) {
                    echo '<li class="nav-item">
                            <a class = "nav-link' . ($menu == 'kijelentkezes' ? ' active' : '') . '" href = "index.php?menu=kijelentkezes">Kilépés</a>
                        </li>
                        <li class = "nav-item">
                        <a class="nav-link' . ($menu == 'termekek' ? ' active' : '') . '" href="index.php?menu=termekek">Termékek</a>
                      </li>
                        <li class = "nav-item">
                            <a class = "nav-link' . ($menu == 'kosar' ? ' active' : '') . '" href = "index.php?menu=kosar">Kosár</a>
                        </li>';
                } else {
                    echo '<li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'termekvendeg' ? ' active' : '') . '" href = "index.php?menu=termekvendeg">Termékek</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'bejelentkezes' ? ' active' : '') . '" href = "index.php?menu=bejelentkezes">Belépés</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'regisztracio' ? ' active' : '') . '" href = "index.php?menu=regisztracio">Regisztráció</a>
                    </li>';
                }
                ?>
            </ul>
            <form class = "d-flex" role = "search">
                <input id="keres" class = "form-control me-2" type = "search" placeholder = "Search" aria-label = "Search">
                <button class = "btn btn-outline-success" type = "submit">Keresés</button>
            </form>
        </div>
    </div>
</nav>