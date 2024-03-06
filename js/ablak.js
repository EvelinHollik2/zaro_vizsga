const macskaCards = document.querySelectorAll(".macskaCard");
macskaCards.addEventListener("click", kosarba);
let termekkateg = document.getElementById("termekkateg");
const uwu = document.getElementById("IDEE");
uwu.addEventListener("click", more);



function kosarba(){
    
    //-- az adatbázisba írjuk a választást
    alert("Kosárba helyezés");
    
    //-- 
}


function vendeg(){
    alert("Előbb jelentkezzen be!!");
}
function more()
{
    termekkateg.innerHTML += `

 <div class="row">
            <div class="col-sm-4 p-5 m-auto">
                <a class="nav-link" href="index.php?menu=Kutya"><img src="./Kepek/kut.png" alt="alt"/></a>
            </div>
            <div class="col-sm-4 p-5 m-auto">
                <a class="nav-link" href="index.php?menu=Macska"><img src="./Kepek/mac.png" alt="alt"/></a>
            </div>
            <div class="col-sm-4 p-5 m-auto">
                <a class="nav-link" href="index.php?menu=ossztermek"><img src="./Kepek/bu.png" alt="alt"/></a>
            </div>
        </div>
`;
}
