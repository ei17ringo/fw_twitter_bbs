<?php
    
    class Post {
        // プロパティ
        private $dbconnect = '';

        // コンストラクタ
        public function __construct () {
            //// +++ DB接続 +++ ////
            require('/var/www/html/fw_twitter_bbs/dbconnect.php');

          // 初期化処理
            $this->dbconnect = $db;
        }

        //追加
        public function findAll(){
            $return = array();
            $sql = 'select * from `posts`;';
            $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
        
             while ($row = mysqli_fetch_assoc($results)) {

                $return[] = $row;
             }

             return $return;
        }

        /** Controllerのアクションメソッドから呼び出される */
        public function view($value) {
            // DBアクセス処理
            $return = array();
            $sql = 'select * from `posts` where　`id` = '.$value.' ;';
            $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
        
             while ($row = mysqli_fetch_assoc($results)) {

                $return[] = $row;
             }

             return $return;
        }

        /** Controllerのアクションメソッドから呼び出される */
        public function insert($value){

            //posts テーブルにデータを追加するinsert文を記述し
            //実行 member_id = 1 を指定して下さい

            $sql = "INSERT INTO `posts`(`id`, `message`, `member_id`, `reply_post_id`, `created`, `modified`) ";
            $sql .= "VALUES (null,'".$value['message']."',1,null,now(),now());";

            $results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

        }

        /** Controllerのアクションメソッドから呼び出される */
        public function update($value) {
            // DBアクセス処理
        }

        /** Controllerのアクションメソッドから呼び出される */
        public function delete($value) {
            // DBアクセス処理
        }
    }
?>