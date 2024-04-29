<?php

class Router {
    
    public static function route(): void {

        if (isset($_GET['page'])) {
            $pageName = $_GET['page'];
            if([$_GET['page'] === $pageName]) {
                $controllerName = $pageName."Controller";
                $controller = new $controllerName;
                $functionStaticName = "get".ucfirst($pageName);
             
                $controller::$functionStaticName();
            }

            

           
            
        } else {
            if(isset($_GET['legal'])) {

                if($_GET['legal'] ==="confidentiality") {
                    indexController::getConfidentiality();
                }
                if($_GET['legal'] ==="cgu") {
                    indexController::getCGU();
                }
            }
            // Défaut
            indexController::getIndex();
        }
    }
}
