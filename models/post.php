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
            echo 'modelのviewだよ';
        }

        /** Controllerのアクションメソッドから呼び出される */
        public function insert(){

            //posts テーブルにデータを追加するinsert文を記述し
            //実行 member_id = 1 を指定して下さい
            

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