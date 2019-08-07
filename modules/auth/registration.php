<?php
header("Content-Type: application/json");
$code = 404;
$data = null;
if(isset($_POST['send']) && $_POST['send']==true){
    $errors = [];
    //regex check
    //regexs
    $reNameSurname = "/^[A-ZŠĐĆŽČ][a-zšđčćž]{2,13}(\s[A-ZŠĐĆŽČ][a-zšđčćž]{2,13})?$/";

    //data values
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $role = 2;

//check values

    if(!preg_match($reNameSurname,$name))
        array_push($errors,"Ime nije u dobrom formatu");
    if(!preg_match($reNameSurname, $surname))
        array_push($errors,"Prezime nije u dobrom formatu");
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($errors,"Email nije u dobrom formatu");
    if(strlen($passwd)<6){
        array_push($errors,"Lozinka mora biti duza od 5 karaktera");
    }

    if(count($errors)==0){
        include "../database/connection.php";
        include "../../models/User.php";
        $token = time().md5($email);
        $passwd = md5($passwd);
        $u = new User();
        $result = $u->insertUser($name, $surname, $email, $passwd, $token, $role, $connection);
        if($result == 201){
            $data = "Uspesno kreiran korisnik";
            $code = 201;
        }elseif($result == 500){
            $data = "Serverska greška prilikom unosa korisnika";
            $code = 500;
        }elseif ($result == 409){
            $data = "Korisnik sa tim e-mailom već postoji";
            $code = 409;
        }
    }else{
        $data = $errors;
        $code = 422;
    }
}

http_response_code($code);
echo json_encode($data);