<?php

    require('models/'.changesingular($resource).'.php');

    //$post = new Post();
    $posts = new PostsController();
    

    switch ($action) {
        case 'index':
            $posts->index();
            break;
        case 'show':
            $posts->show(1);
            break;
        case 'edit':
            $posts->edit(1);
            break;
        case 'destroy':
            $posts->destroy(1);
            break;
        case 'view':
            $post->view(1);
            break;
        case 'update':
            $post->update(1);
            break;
        case 'delete':
            $post->delete(1);
        default:
            # code...
            break;
    }




    function changesingular($value){
        //複数形から単数形へ変換
        if ($value == 'posts'){
            return 'post';
        }
    }




    /**
    * Controllerのクラス
    */
    class PostsController {
        // プロパティ
        private $resource = '';
        private $action = '';
        private $view_options = '';
        private $Post = '';

        // コンストラクタ
        public function __construct () {
          // 初期化処理
            $post = new Post();
            $this->resource = 'posts';
            $this->action = 'index';
            $this->view_options = array();
            $this->Post = $post;
        }

        /** 一覧ページを表示 */
        public function index() {
            // echo 'indexが呼ばれました';
            // $message = 'test';
            // $nickname = 'Eriko';

            // $row = array('name' => 'Eriko','message' => 'test');
            // $user_posts[] = $row;
            // $row = array('name' => 'Shinya','message' => 'おっす');
            // $user_posts[] = $row;
            // $row = array('name' => 'Maiko','message' => 'Hello');
            // $user_posts[] = $row;

            $user_posts = $this->Post->findAll();

            $this->view_options= compact('user_posts');

            //上の処理と同じこと
            $this->view_options['message'] = $message;
            $this->view_options['nickname'] = $nickname;


            $this->display();
        }

        /** 詳細ページを表示 */
        public function show($id) {
            $this->action='show';
            
            $this->display();
          // 処理
            echo 'showが呼ばれました';
        }

        /** 編集ページを表示 */
        public function edit($id) {
          // 処理
            echo 'editが呼ばれました';
        }

        /** 削除 */
        public function destroy($id) {
          // 処理
            echo 'destroyが呼ばれました';
        }

        private function display(){


            require('/var/www/html/fw_twitter_bbs/views/layout/application.php');


        }
    }
?>