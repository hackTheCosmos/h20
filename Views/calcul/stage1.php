<div class="progression__bar__wrapper">
    <div class="stage">
        <p>1 / 3</p>
    </div>
    <div class="bar"></div>
    <i class="fa-solid fa-circle"></i>
</div>

<div class="element stage__wrapper first__stage__wrapper first__slide active">
    <h2>Foyer <i class="fa-solid fa-house"></i></h2>
    <form method = "post" id="refresh__form">
        <button type="submit" name ="refresh"><i class="fa-solid fa-arrows-rotate"></i>Réinitialiser le calculateur</button>
    </form>
    <form id= "foyer__form" method="POST" novalidate>
        <div class="item__wrapper">
            <div class="input__wrapper">
                <label for="foyer">Nombre de personnes composant le foyer</label>
                <input type="number" name="foyer" id="foyer" min = "1" 
                value ="<?php if(isset($_SESSION['foyer'])) :
                                echo ($_SESSION['foyer']);
                                else : 
                                    echo "";
                                endif;
                                    ?>">
            </div>
        </div>
        <div class="nav__buttons__wrapper">
            <button type="submit" value = "true" name ="foyer__submit" id="foyer__submit"><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </form>
</div>

<!--lien pour le calcul-->
<script src="Public/script/calculStage1.js" defer></script>