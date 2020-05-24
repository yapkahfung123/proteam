<?php
session_start();

function create_admin_session($user){
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['username'];
    $_SESSION['name'] = $user['name'];
}


function flash($name = '', $message = '', $class = 'alert alert-success'){
    if(!empty($name)){
        if(!empty($message) && empty($_SESSION['name'])){

            if(!empty($_SESSION[$name])){
                unset($_SESSION[$name]);
            }

            if(!empty($_SESSION[$name . '_class'])){
                unset($_SESSION[$name . '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name. '_class'] = $class;
        }elseif(empty($message) && !empty($_SESSION['name'])){
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name. '_class']);
        }
    }
}

function flash_template($session ,$class){
    echo '<div class="'. $class .'">'. $session . '</div>';
}

function redirect($page){
    header('location: ' . URLROOT . $page);
}

function check_adminSession(){
    if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_name']) && !isset($_SESSION['name'])){
        redirect('admins/login');
    }
}

