<?php 
require_once '../models/User.php';
session_start();
if(isset($_POST["login"])){
    // var_dump($_POST);die;
    if(!empty($_POST['login']) && !empty($_POST['pass'])) {
        $login = ($_POST['login']);
        $pass = ($_POST['pass']);
        $user = User::getUserByLoginPass($login, $pass);
        if ($user == false) {
            header("Location: ../controllers/admin_aut.php?error=1");
        } else {
            $_SESSION['user_id'] = $user->id;
            header("Location: ../controllers/catalog.php");
        }
    }
}
?>



