<?php
/**
 * Created by PhpStorm.
 * User: mradi
 * Date: 8/5/2019
 * Time: 9:51 PM
 */

class User
{
    function insertUser($name, $surname, $email, $passwd, $token, $role, $connection){
        $active = 0;
        $isDeleted = false;
        $createdAt = time();

        $query = "INSERT INTO Users (Name, Surname, Email, Password, Token, Active, CreatedAt, IsDeleted, RoleId)
                      VALUES (:name, :surnmae, :email, :passwd, :token, :active, :createdAt, :isDeleted, :role)";
        $prepared = $connection->prepare($query);
        $prepared->bindParam(':name',$name);
        $prepared->bindParam(':surnmae',$surname);
        $prepared->bindParam(':email',$email);
        $prepared->bindParam(':passwd',$passwd);
        $prepared->bindParam(':token',$token);
        $prepared->bindParam(':active',$active);
        $prepared->bindParam(':createdAt',$createdAt);
        $prepared->bindParam(':role',$role);
        $prepared->bindParam(':isDeleted',$isDeleted);

        try{
            $prepared->execute();
            if($prepared->rowCount()){
                return 201;
            }else{
                return 500;
            }
        }catch (PDOException $e){
            return 409;
        }
    }
    function getUserLogin($email, $passwd, $connection){
        $sql = 'SELECT * FROM users u INNER JOIN roles r ON u.RoleId=r.Id WHERE u.Email=:email AND u.Password=:passwd';
        $stm = $connection->prepare($sql);
        $stm->bindParam(":email",$email);
        $stm->bindParam(":passwd", $passwd);
        try{
            $result = $stm->execute();
            if($result){
                $user = $stm->fetch();
                return $user;

            }else{
                return 500;
            }
        }catch (PDOException $e){
            return 409;
        }
    }
}