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
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,body,author,created_at,updated_at)VALUES(?,?,?,?,?)';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$title,$body,$author,DB::now(),DB::now()]);
        }
    }
    // class Post extends DB{
    //     function index(){
    //         $sql = 'SELECT * FROM posts';
    //         $result = $this->db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    //         return $result;
    //     }
    // }