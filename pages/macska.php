<div class="row">
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/cica kék szoknya.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">cica kék szoknya</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 10000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/mikulás jelmez.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">mikulás jelmez</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 12000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/pizzas macska pulover.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">pizzas macska pulover</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/macska kendo.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">macska kendo</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 2000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/macska hám.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">macska hám</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/fekete sárga macska pulóver.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">fekete sárga macska pulóver</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/lila macska pulóver.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">lila macska pulóver</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/barna macska pulóver.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">barna macska pulóver</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/rózsaszín macska pulóver.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">rózsaszín macska pulóver</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>
    <div class="card col-lg-3" style="width: 18rem;">
        <img src="./Kepek/a_vasarlas/c/kék rózsaszín macska pulóver.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">kék rózsaszín macska pulóver</h5><p class="card-text">Darabszám: 10</p><p class="card-text">Termék ára: 5000</p>                
            <p><button class="btn" onclick="showCustomAlert()">Kosár</button></p>
        </div>
    </div>

</div>

<div id="custom-alert">
    <p>Rendelés a kosárhoz adva</p>
    <button onclick="closeCustomAlert()">Bezárás</button>
    <button onclick="kosar()">Kosár</button>
</div>

<style>
    #custom-alert{
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #f8d7da;
        z-index: 1000;
    }
</style>
<script>
    function showCustomAlert(){
        document.getElementById('custom-alert').style.display='block';
    }
    function closeCustomAlert(){
        document.getElementById('custom-alert').style.display='none';
    }
       function kosar() {
        // Ide írd be az átdobandó oldal URL-jét
        window.location.href = "index.php?menu=kosar";
    }
    //showCustomAlert();
</script>