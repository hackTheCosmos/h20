<div class="progression__bar__wrapper">
    <div class="stage">
        <p>2 / 3</p>
    </div>
    <div class="bar"></div>
    <i class="fa-solid fa-circle"></i>
</div>
<div class="element stage__wrapper second__stage__wrapper second__slide">
    <h2>Electroménager <i class="fa-solid fa-plug"></i></h2>
    <form method="post" novalidate id ="electro__form">
        <div class="item__wrapper">
            <h3>Vaisselle à la main</h3>
            <div class="input__wrapper">
                <label for="hand__washing">Nombre de lavages de la vaisselle à la main par semaine</label>
                <input type="number" name="hand__washing" id="hand__washing" min = "0" 
                    value="<?php if(isset($_SESSION['hand__washing'])) :
                                echo ($_SESSION['hand__washing']);
                                else : 
                                    echo "";
                                endif;
                                    ?>">
            </div>
        </div>
        <div class="item__wrapper">
            <h3>J'ai un lave-vaisselle</h3>
            <label class="switch">
                <span class ="yes__no"></span>
                <input type="checkbox" name = "dish__washer__checkbox" 
                    <?php if (!isset($_SESSION['dish__washer__check'])):
                                echo "checked = 'true'";

                            elseif($_SESSION['dish__washer__check'] === "on") :
                                echo "checked='true'";
                            else : echo "value='off'";
                            endif; ?>
                >
                <span class="slider round"></span>
            </label>
            <div class="input__wrapper">
                <label for="dish__washer">Nombre de cycles de lavage par semaine</label>
                <input type="number" name="dish__washer" id="dish__washer" min = "0" 
                value = "<?php if(isset($_SESSION['dish__washer'])) :
                                echo ($_SESSION['dish__washer']);
                                else : 
                                    echo "";
                                endif;
                        ?>">
            </div>
        </div>
        <div class="item__wrapper">
            <h3>J'ai un lave-linge</h3>
            <label class="switch">
                <span class ="yes__no"></span>
                <input type="checkbox" name = "clothes__washer__checkbox"
                    <?php if (!isset($_SESSION['clothes__washer__check'])):
                                echo "checked = 'true'";

                            elseif($_SESSION['clothes__washer__check'] === "on") :
                                echo "checked='true'";
                            else : echo "value='off'";
                            endif; ?>
                >
                    
                <span class="slider round"></span>
            </label>
            <div class="input__wrapper">
                <label for="clothes__washer">Nombre de cycles de lave-linge par semaine</label>
                <input type="number" name="clothes__washer" id="clothes__washer" min = "0" 
                    value = "<?php if(isset($_SESSION['clothes__washer'])) :
                                echo ($_SESSION['clothes__washer']);
                                else : 
                                    echo "";
                                endif;
                        ?>">
            </div>
        </div>
        <div class="nav__buttons__wrapper">
            <a class ="previous__link" title="étape précédente" href="index.php?page=calcul&etape=1"><i class="fa-solid fa-arrow-left-long"></i></a>
            <button class = "next__button" type="submit" name ="electro__submit"><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </form>
</div>

<!--lien pour le calcul-->
<script src="Public/script/calculStage2.js" defer></script>