<?php 


    class Products extends Controller {

        public function __construct(){

            $this->productModel = $this->model('Product');
            $this->categoryModel = $this->model('Category');

        }

        public function index(){

            //Get all Products

            $products = $this->productModel->get_products();
            $categories = $this->categoryModel->get_categories();
            $populars = $this->productModel->get_popular();

            $data = [
               // 'title' => 'Ecommerce without Framework'
                'products' => $products,
                'categories' => $categories,
                'populars' => $populars 
            ];

            $this->view('products/index', $data);
        }


        public function details($id) {
            // //Get Product Details
            $products = $this->productModel->get_product_details($id);
            $categories = $this->categoryModel->get_categories();
            $populars = $this->productModel->get_popular();
            
            //Load View
            // $data['main_content'] = 'details';
            // $this->load->view('layouts/main', $data);

            $data = [
                'products' => $products,
                'categories' => $categories,
                'populars' => $populars 
            ];

            $this->view('products/details', $data);


        }

      
    }


 ?>