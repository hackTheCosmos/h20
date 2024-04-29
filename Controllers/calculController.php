<?php

class calculController {
    public static function getCalcul() {

        if(isset($_GET['page']) && $_GET['page'] === "calcul") {

            if(isset($_GET['etape'])) {

                if(isset($_POST['refresh'])) {
                    session_destroy();
                    header("Location:index.php?page=calcul&etape=1");
                    die;
                }
            
                if($_GET['etape'] === "1") {
                        if(isset($_POST['foyer__submit'])) {
                            

                            if(isset($_POST['foyer']) && !empty($_POST['foyer']) && intval($_POST['foyer'] > 0)) {
                                
                                $_SESSION['foyer'] = Form::sanitize(intval($_POST['foyer']));
                                sleep(1);
                                header("Location:index.php?page=calcul&etape=2");
                                die;
                            }
                        }

                    $pageTitle = "Calcul - H20";
                    Renderer::render("Views/calcul/stage1.php", [
                        "pageTitle" => $pageTitle
                    ]);
                }

                if($_GET['etape'] == "2") {
                    $scoreStage2 = 0;
                    if(isset($_POST['electro__submit'])) {

                        if(isset($_POST['hand__washing']) && $_POST['hand__washing'] !== "" && intval($_POST['hand__washing'] >= 0)) {
                            $_SESSION['hand__washing'] = Form::sanitize(intval($_POST['hand__washing']));
                            $scoreStage2 ++; 
                        } 

                        if(isset($_POST['dish__washer__checkbox']) && $_POST['dish__washer__checkbox'] === "on") {
                            $_SESSION['dish__washer__check'] = $_POST['dish__washer__checkbox'];
                            if(isset($_POST['dish__washer']) && $_POST['dish__washer'] !== "" && intval($_POST['dish__washer']) > 0) {
                                $scoreStage2 ++;
                                $_SESSION['dish__washer'] = Form::sanitize(intval($_POST['dish__washer']));
                            }
                        } else {
                            $_SESSION['dish__washer__check'] = "off";
                            $_SESSION['dish__washer'] = 0;
                            $scoreStage2 ++;
                        }

                        if(isset($_POST['clothes__washer__checkbox']) && $_POST['clothes__washer__checkbox'] === "on") {
                            $_SESSION['clothes__washer__check'] = $_POST['clothes__washer__checkbox'];
                            if(isset($_POST['clothes__washer']) && $_POST['clothes__washer'] !== "" && intval($_POST['clothes__washer']) > 0) {
                                $scoreStage2 ++;
                                $_SESSION['clothes__washer'] = Form::sanitize(intval($_POST['clothes__washer']));
                            }
                        } else {
                            $_SESSION['clothes__washer__check'] = "off";
                            $_SESSION['clothes__washer'] = 0;
                            $scoreStage2 ++;
                        }

                        if($scoreStage2 >= 3 ) {
                            sleep(1);
                            header("Location:index.php?page=calcul&etape=3");
                            die;
                        }
                    }

                    $pageTitle = "Calcul - H20";
                    Renderer::render("Views/calcul/stage2.php", [
                        "pageTitle" => $pageTitle
                    ]);
                }

                if($_GET['etape'] === "3") {

                    
                    if(isset($_POST['hygiene__submit'])) {
                        $scoreStage3 = 0;
                        if((isset($_POST['shower']) && !empty($_POST['shower']) && intval($_POST['shower']) > 0) || intval($_POST['shower'] == 0) ) {
                            $_SESSION['shower'] = Form::sanitize($_POST['shower']);
                            $scoreStage3 ++;
                        }

                        if((isset($_POST['bath']) && !empty($_POST['bath']) && intval($_POST['bath']) > 0) || intval($_POST['bath'] == 0)) {
                            $_SESSION['bath'] = Form::sanitize($_POST['bath']);
                            $scoreStage3 ++;
                        }

                        if((isset($_POST['wc']) && !empty($_POST['wc']) && intval($_POST['wc']) > 0) || intval($_POST['wc'] == 0)) {
                            $_SESSION['wc'] = Form::sanitize($_POST['wc']);
                            $scoreStage3 ++;
                        }

                        if($scoreStage3 = 3) {
                            sleep(1);
                            header("Location:index.php?page=result");
                            die;
                        }
                    }


                    $pageTitle = "Calcul - H20";
                    Renderer::render("Views/calcul/stage3.php", [
                    "pageTitle" => $pageTitle
            ]);
                }
            }
            $pageTitle = "Calcul - H20";
            Renderer::render("Views/calcul.php", [
                "pageTitle" => $pageTitle
            ]);
        }
       
        // if(isset($_GET['nb__persons__submit'])) {
        //     var_dump("ok");
        // die;
        //     if(isset($_GET['nb__persons']) && $_GET['nb__persons'] > 0) {
               
        //         $_SESSION['calcul']['nb__persons'] = intval($_GET['nb__persons']);
                
        //         header("Location: http://localhost/h20/index.php?page=calcul&etape=2");
        //         die;
                
                
        //     }

        // }
    }
}