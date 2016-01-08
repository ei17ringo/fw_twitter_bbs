<?php
    class Post {
        // プロパティ
        private $hoge = '';
        private $fuga = '';

        // コンストラクタ
        public function __construct () {
          // 初期化処理
        }

        /** Controllerのアクションメソッドから呼び出される */
        public function view($value) {
            // DBアクセス処理
            echo 'modelのviewだよ';
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