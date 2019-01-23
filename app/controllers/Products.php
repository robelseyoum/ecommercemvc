<?php 


    class Products extends Controller {

        public function __construct(){

            $this->productModel = $this->model('Product');

        }

        public function index(){

            //Get all Products

            $products = $this->productModel->get_products();

            $data = [
               // 'title' => 'Ecommerce without Framework'
                'products' => $products
            ];

            $this->view('products/index', $data);
        }


        public function details($id) {
            // //Get Product Details
            $products = $this->productModel->get_product_details($id);
            
            //Load View
            // $data['main_content'] = 'details';
            // $this->load->view('layouts/main', $data);

            $data = [
                'products' => $products
            ];

            $this->view('products/details', $data);


        }

      
    }


 ?>