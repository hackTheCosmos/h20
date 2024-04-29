<div class="progression__bar__wrapper">
    <div class="stage">
        <p>3 / 3</p>
    </div>
    <div class="bar"></div>
    <i class="fa-solid fa-circle"></i>
</div>
<div class="element stage__wrapper third__stage__wrapper third__slide">
    <h2>Hygiène <i class="fa-solid fa-shower"></i></h2>
    <form method="post" novalidate id ="hygiene__form">
        <div class="item__wrapper">
            <h3>Douches</h3>
            <div class="input__wrapper">
                <label for="shower">Nombre de douches par semaine par membre du foyer</label>
                <input type="number" name="shower" id="shower" min = "0" 
                    value="<?php if(isset($_SESSION['shower'])) :
                                echo ($_SESSION['shower']);
                                else : 
                                    echo "";
                                endif;
                                    ?>">
            </div>
        </div>
        <div class="item__wrapper">
            <h3>Bains</h3>
            <div class="input__wrapper">
                <label for="bath">Nombre de bains par personne et par semaine</label>
                <input type="number" name="bath" id="bath" min = "0" 
                value = "<?php if(isset($_SESSION['bath'])) :
                                echo ($_SESSION['bath']);
                                else : 
                                    echo "";
                                endif;
                        ?>">
            </div>
        </div>
        <div class="item__wrapper">
            <h3>WC</h3>
            <div class="input__wrapper">
                <label for="wc">Nombre d'usage de chasse d'eau par personne et par jour</label>
                <input type="number" name="wc" id="wc" min = "0" 
                    value = "<?php if(isset($_SESSION['wc'])) :
                                echo ($_SESSION['wc']);
                                else : 
                                    echo "";
                                endif;
                        ?>">
            </div>
        </div>
        <div class="nav__buttons__wrapper">
            <a class ="previous__link" title="étape précédente" href="index.php?page=calcul&etape=2"><i class="fa-solid fa-arrow-left-long"></i></a>
            <button class = "next__button" type="submit" name ="hygiene__submit"><i class="fa-solid fa-calculator"></i>Calculer</button>
        </div>
    </form>
</div>

<!--lien pour le calcul-->
<script src="Public/script/calculStage3.js" defer></script>