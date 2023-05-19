<?php

require_once ('./controllers/CController.php');

class CView {
    public function ViewMainPage(){
        $controller = new CController();
        $arrayAll = $controller->SetMainPage();
        include 'views/view_mainPage.php';
        return $arrayAll;
    }

    // public function ViewAirForce(){
    //     $controller = new CController();
    //     $arrayAll = $controller->SetAirForce();
    //     include 'views/view_airforce.php';
    //     return $arrayAll;
    // }

    // public function ViewError404(){
    //     $controller = new CController();
    //     $arrayAll = $controller->SetError404();
    //     include 'views/view_error404.php';
    //     return $arrayAll;
    // }


    // public function GetFooter(){
    //     return 'views/footer.php';
    // }

}