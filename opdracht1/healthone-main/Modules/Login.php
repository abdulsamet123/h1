<?php
function checkLogin():string
{
    global $pdo;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    if ($email !== null && $email !== false && !empty($password)) {
        $sql = 'SELECT *FROM  user WHERE email =:e AND password=:p';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e', $email);
        $sth->bindParam(':p', $password);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'user');
        $sth->execute();
        $user = $sth->fetch();

    if ($user!==false){
    $_SESSION['user']=$user;
    if ($_SESSION['user']->role=="admin"){
        return 'ADMIN';
    }
    else{
        return 'MEMBER';
    }
    }
    return 'FALLURE';
}
    return 'INCOMPLRTR';
}

function isAdmin():bool{
    if (isset($_SESSION['user'])&&!empty($_SESSION['user'])){
        $user=$_SESSION['user'];
        if ($user->role=="admin")
        {
            return true;
        }
        else{
            return false;
        }
    }
    return false;

}
function makeRegistration():string
{
    global $pdo;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    if ($email !== null && $email !== false && !empty($password) && !empty($firstName) && !empty($lastName)) {
        $sth=$pdo->prepare('INSERT INTO user (email,password,first_name,last_name,role ) VALUES (?,?,?,?,"member")');

        $sth->bindParam(1, $email);
        $sth->bindParam(2, $password);
        $sth->bindParam(3, $firstName);
        $sth->bindParam(4, $lastName);
        $sth->execute();
        return "SUCCESS";

        }


return"INCOMPLETE";
    }
function isMember():bool{
    if (isset($_SESSION['user'])&&!empty($_SESSION['user'])){
        $user=$_SESSION['user'];
        if ($user->role=="member")
        {
            return true;
        }
        else{
            return false;
        }
    }
    return false;

}

function logout(){
    session_destroy();
    $_SESSION = [];
}
function changeProfile():bool
{
    global $pdo;
    $email=$_SESSION['user']->email;
    $firstName=filter_input(INPUT_POST,"firstName",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastName=filter_input(INPUT_POST,"lastName",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!empty($firstName) && !empty($lastName)){
        $sth=$pdo->prepare('UPDATE `user` SET `first_name`=:f,`last_name`=:l WHERE `email`=:e');
        $sth->bindValue(":f",$firstName);
        $sth->bindValue(":l",$lastName);
        $sth->bindValue(":e",$email);
        $sth->execute();
        $_SESSION['user']->first_name=$firstName;
        $_SESSION['user']->last_name=$lastName;
        return true;
    }else{
        return false;
    }
}
function changePassword():bool
{
    global $pdo;
    $email=$_SESSION['user']->email;
    $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!empty($password)){
        $sth=$pdo->prepare('UPDATE `user` SET `password`=:f WHERE `email`=:e');
        $sth->bindValue(":f",$password);
        $sth->bindValue(":e",$email);
        $sth->execute();
        $_SESSION['user']->password=$password;

        return true;
    }else{
        return false;
    }
}