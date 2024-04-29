<?php

class successController {

    public static function getSuccess() {
        header("Refresh: 5; url=index.php");

        $pageTitle = "Message envoyé - H20";
        Renderer::render("Views/success.php", [
            "pageTitle" => $pageTitle
        ]);
    }
}