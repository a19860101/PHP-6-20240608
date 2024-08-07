<?php
    namespace App\Web\Controller;
    use App\Web\Config\DB;
    // use PDO;
    class Post{
        static function index(){
            $sql = 'SELECT * FROM posts ORDER BY id DESC';
            $result = DB::db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,body,author,created_at,updated_at)VALUES(?,?,?,?,?)';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$title,$body,$author,DB::now(),DB::now()]);
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result;
        }
        static function delete($id){
            // extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$id]);
        }
        static function edit($id){
            // extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result;
        }
        static function update($request){
            extract($request);
            // $title = $request['title'];
            // $author = $request['author'];
            // $body = $request['body'];
            // $id = $request['id'];

            $sql = 'UPDATE posts SET title=?,author=?,body=?,updated_at=? WHERE id=?';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$title,$author,$body,DB::now() ,$id]);
            // $stmt->execute([$request['title'],$request['author'],$request['body'],DB::now() ,$request['id']]);
        }
        static function update2($title,$author,$body,$id){
            $sql = 'UPDATE posts SET title=?,author=?,body=?,updated_at=? WHERE id=?';
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$title,$author,$body,DB::now() ,$id]);
        }
    }
    // class Post extends DB{
    //     function index(){
    //         $sql = 'SELECT * FROM posts';
    //         $result = $this->db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    //         return $result;
    //     }
    // }