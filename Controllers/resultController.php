<?php

class resultController {
    public static function getResult() {
  
        if(!empty($_SESSION)) {

            $foyer = $_SESSION['foyer'];

            $handWashing = $_SESSION['hand__washing'];
            $dishWasher = $_SESSION['dish__washer'];
            $clothesWasher = $_SESSION['clothes__washer'];

            $shower = $_SESSION['shower'];
            $bath = $_SESSION['bath'];
            $wc = $_SESSION['wc'];

            $usersLitersYearResult = $handWashing*40*52 + $dishWasher*15*52 + $clothesWasher*50*52 + $shower*60*52*$foyer + $bath*250*52*$foyer + $wc*9*365*$foyer;

            $m3Result = ceil($usersLitersYearResult / 1000);

            $userLitersDayResult = ceil(($usersLitersYearResult / $foyer) / 365);

            $pageTitle = "Résultat - H20";
            
            Renderer::render("Views/calcul/result.php", [
                "pageTitle" => $pageTitle, 'usersLitersYearResult' => $usersLitersYearResult, 'm3Result' => $m3Result, 'userLitersDayResult' => $userLitersDayResult
            ]);
        }
    }
}