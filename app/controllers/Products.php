<?php 


    class Products extends Controller {

        // public function __construct(){

        //     //$this->postModel = $this->model('Post');

        // }

        public function index(){

            //$posts = $this->postModel->getPosts();

            $data = [
                'title' => 'Ecommerce without Framework'
                //'posts' => $posts
            ];

            $this->view('products/index', $data);
        }

      
    }


 ?>