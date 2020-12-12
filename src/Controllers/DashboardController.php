<?php

namespace App\Controllers;

use App\Helpers;
use App\Logic\View;
use App\Models\Users;

class DashboardController {
    public function index() {
        if(!Helpers::CheckLoggedIn()){
            Helpers::redirect('/prijava');
        }
        if($_SESSION['role_id'] != 1){
            echo $_SESSION['role_id'];
            //Helpers::redirect('/');
        }
        if(isset($_GET['logout'])){
            Helpers::logout();
        }

        $user = Users::find(['id' => $_SESSION['id']]);
        $view = new View('panelLayout', 'panel/dashboard');
        $view->assignVariable('user', $user);
    }
}