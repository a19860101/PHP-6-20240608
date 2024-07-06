<?php
    namespace App\Web\Controller;
    use App\Web\Config\DB;
    // use PDO;
    class Post{
        static function index(){
            $sql = 'SELECT * FROM posts';
            $result = DB::db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
    // class Post extends DB{
    //     function index(){
    //         $sql = 'SELECT * FROM posts';
    //         $result = $this->db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    //         return $result;
    //     }
    // }