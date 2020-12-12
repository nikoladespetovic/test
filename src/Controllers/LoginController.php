<?php

namespace App\Controllers;

use App\Helpers;
use App\Logic\View;
use App\Models\Users;

class LoginController {
    public function index() {
        new View('loginLayout', 'panel/login');
    }

    public function login() {
        if(isset($_POST['username']) and isset($_POST['password'])){
            $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
            $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
            if(!empty($username) and !empty($password)){
                $user = Users::find(['username' => $username]);
                if(!empty($user)){
                    if(password_verify($password, $user->password)){
                        Helpers::setSession($user->id, $user->username, $user->roles_id);
                        if(isset($_POST['remember'])){
                            Helpers::rememberLogin($user->id, $user->username);
                        }
                        if($_SESSION['role_id'] == 1){
                            Helpers::redirect('/dashboard');
                            $_SESSION['success'] = 'Successful login!';
                        }
                        elseif($_SESSION['role_id'] == 2) {
                            Helpers::redirect('/moderatorpanel');
                            $_SESSION['success'] = 'Successful login!';
                        }
                        else {
                            Helpers::redirect('/userpanel');
                            $_SESSION['success'] = 'Successful login!';
                        }
                    }
                    else {
                        $_SESSION['error'] = "Incorrect password!";
                        Helpers::redirect('/login');
                    }
                }
                else {
                    $_SESSION['error'] = "Non-existent user!";
                    Helpers::redirect('/login');
                }
            }
            else {
                $_SESSION['error'] = "You have entered an empty field!";
                Helpers::redirect('/login');
            }
        }
    }
}