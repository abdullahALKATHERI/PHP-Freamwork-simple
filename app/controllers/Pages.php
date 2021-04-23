<?php
    class Pages extends Controller {
        public function __construct()
        {
           $this->userModel = $this->model('User');
        }
        public  function index(){
            $users = $this->userModel->getUser();

            $data = [
                'title' => 'Home',
                'name' => $users
            ];
            $this->view('pages/index',$data);
        }

        public function shop(){
            $this->view('pages/shop');
        }
    }
