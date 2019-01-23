<?php 

class Product {


    private $db;


    public function __construct() {
        $this->db = new Database;
    }
    
    /*
     *  Get All Products
     */
     public function get_products(){

        $this->db->query("SELECT * FROM products");   
        $results = $this->db->resultSet();  

        return $results;
    }

    /*
    * Get Single Product
    */
    public function get_product_details($id) {

        $this->db->query("SELECT * FROM products WHERE id=$id "); 
         $query = $this->db->single();
        return $query;

    }

}



 ?>