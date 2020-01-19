<?php
    session_start();
    require_once("../db/base.php");
    require_once("../controller/AccountController.php");
    require_once("../controller/Setup.php");

    $con = Dbhelper::create_db_connection();
    AccountController::logout($_SESSION['site_token'], $con);
    