<?php


class indexController {
    public static function getIndex() {
        // affiche la page "Accueil"
        $pageTitle = "Accueil - H20";
        
        Renderer::render("Views/home.php", [
            "pageTitle" => $pageTitle
        ]);
    }

    public static function getConfidentiality() {
        $pageTitle = "Confidentialité - H20";
        
        Renderer::render("Views/legal/confidentiality.php", [
            "pageTitle" => $pageTitle
        ]);
    }

    public static function getCGU() {
        $pageTitle = "CGU - H20";
        
        Renderer::render("Views/legal/cgu.php", [
            "pageTitle" => $pageTitle
        ]);
    }
}