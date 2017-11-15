<?php
/**
 * Created by PhpStorm.
 * User: Raff_8
 * Date: 11/14/2017
 * Time: 10:45 PM
 */

class Database
{
    private static $dsn = 'mysql:host=sql1.njit.edu;dbname=erc7';
    private static $username = 'erc7';
    private static $password = '4g5cdCF9';
    private static $db;
    private function __construct() {}
    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                    self::$username,
                    self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;
                exit();
            }
        }
        return self::$db;
    }
}

?>