<?php
//Вычислить маршрут из адресной строки
    $host = explode('?', $_SERVER['REQUEST_URI']) [0];
    $num = substr_count($host, '/');
    $path = explode('/', $host) [$num];


    if($path == '' OR $path == 'index' OR $path == 'index.php'){
        
        $pageBody = $view->ViewMainPage();
        // $pageFooter = $view->GetFooter();

        CController::SetMainPage();
    }
    else{
        
        CController::error404();

    }