<?php

    require('models/'.changesingular($resource).'.php');

    $members = new MembersController();
    

    switch ($action) {
        case 'index':
            $members->index();
            break;
        case 'show':
            $members->show($id);
            break;
        case 'create':
            $members->create();
            break;
        case 'edit':
            $members->edit(1);
            break;
        case 'destroy':
            $members->destroy(1);
            break;
        default:
            # code...
            break;
    }




    function changesingular($value){
        //複数形から単数形へ変換
        if ($value == 'members'){
            return 'member';
        }
    }




    /**
    * Controllerのクラス
    */
    class MembersController {
        // プロパティ
        private $resource = '';
        private $action = '';
        private $view_options = '';
       
        // コンストラクタ
        public function __construct () {
          // 初期化処理
            $this->resource = 'members';
            $this->action = 'index';
            $this->view_options = array();
           
        }

        /** 一覧ページを表示 */
        public function index() {

        }

        /** 確認ページを表示 */
        public function check() {

        }

        /** 編集ページを表示 */
        public function thanks() {

        }

    }
?>