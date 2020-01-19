<?php
class Dbhelper{
    public static $db_host = "localhost";
    public static $db_user = "root";
    public static $db_password = "";
    public static $db_name = "htman";

    public static function create_db_connection(){
        $connection = mysqli_connect(
            Dbhelper::$db_host,
            Dbhelper::$db_user,
            Dbhelper::$db_password,
            Dbhelper::$db_name
        );
        return $connection;
    }

    public static function check_connection_status($con){
        if($con){
            echo "connected successfully";
        }else{
            echo "failed connecting to database";
        }
    }

    public static function destroy_db_connection($con){
        mysqli_close($con);
    }

}