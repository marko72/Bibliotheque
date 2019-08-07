<?php
if(isset($_POST['btnLogin'])){
    $errors = [];
    //odraditi patern za sifru
    $rePasswd = "/^[\W]{6,30}/";
    $email =  $_POST['tbEmail'];
    $passwd = $_POST['tbPasswd'];
    echo $passwd;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($passwd,"Email nije u dobrom formatu");
    }
    if(strlen($passwd)<6){
        array_push($passwd,"Sifra mora biti duza od 6 karaktera");
    }
    if(count($errors)==0){
        require_once "../database/connection.php";
        require_once "../../models/User.php";
        $u = new User();
        $passwd = md5($passwd);
        $user = $u->getUserLogin($email,$passwd,$connection);
        switch ($user){
            case 500:
                $_SESSION['errors'] = "Serverska greška";
                break;
            case 409:
                $_SESSION['errors'] = "Greška prilikom dohvatanja korisnika";
                break;
            case is_object($user):
                $_SESSION['user'] = $user;
                break;
        }
    }else{
        $_SESSION['errors'] == $errors;
    }
    header("Location: ../../index.php?page=home");
}else{
    header("Location: ../../index.php?page=home");
}