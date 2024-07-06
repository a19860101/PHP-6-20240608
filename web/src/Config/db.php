<?php
    namespace App\Web\Config;
    use PDO;
    class DB {
        static function db(){
            $db_host = 'localhost';
            $db_user = 'admin';
            $db_pw = 'admin';
            $db_name = 'php-6-20240608';
            $db_charset = 'utf8mb4';
        
            // data source name
            $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        
            try{
                $pdo = new PDO($dsn,$db_user,$db_pw);
                return $pdo;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        static function now(){
            date_default_timezone_set('Asia/Taipei');
            $now = date('Y-m-d H:i:s');
            return $now;
        }
    }
