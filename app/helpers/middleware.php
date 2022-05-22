<?php 


function usersOnly($redirect = "/index.php"){
    if(empty($_SESSION['id'])){
        $_SESSION['error'] = "You must be logged in to view this page";
        $_SESSION['error_type'] = "error";
        header("Location:" . BASE_URL . $redirect);
        exit(0);
    }
    
}

function adminOnly($redirect = "/index.php"){
    if(empty($_SESSION['id'] || $_SESSION['admin'])){
        $_SESSION['error'] = "You must be logged in to view this page";
        $_SESSION['type'] = "error";
        header("Location:" . BASE_URL . $redirect);
        exit(0);
    }

}


function guestsOnly(){
    if(isset($_SESSION['id'])){
        header("Location:" . BASE_URL . "/index.php");
        exit(0);
    }
}