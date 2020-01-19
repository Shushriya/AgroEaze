<?php
    session_start();
    require_once("../../db/base.php");
    require_once("../../controller/AccountController.php");
    require_once("../../controller/Setup.php");

    $con = Dbhelper::create_db_connection();
    $logout_url = Setup::$site_root.Setup::$logout_url;

    AccountController::verify_user($con, "admin");
    //$user =  AccountController::get_user($con);
    //print_r($user);
    
?>
<a href="<?php echo $logout_url ?>">logout</a>