<?php

class conseilsController {
    public static function getConseils() {

        $pageTitle = "Conseils pratiques - H20";
        
        Renderer::render("Views/conseils.php", [
            "pageTitle" => $pageTitle
        ]);
    }
}