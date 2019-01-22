<?php 


    class Products extends Controller {

        public function __construct(){

            $this->productModel = $this->model('Product');

        }

        public function index(){

            $products = $this->productModel->get_products();

            $data = [
               // 'title' => 'Ecommerce without Framework'
                'products' => $products
            ];

            $this->view('products/index', $data);
        }

      
    }


 ?>