<?php 


function usersOnly($redirect = "/index.php"){
    if(empty($_SESSION['id'])){
        $_SESSION['message'] = "You must be logged in to view this page";
        $_SESSION['type'] = "danger";
        header("Location:" . BASE_URL . $redirect);
        exit(0);
    }
    
}

function adminOnly($redirect = "/index.php"){
    if(empty($_SESSION['id'] || $_SESSION['admin'])){
        $_SESSION['message'] = "You must be logged in to view this page";
        $_SESSION['type'] = "danger";
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