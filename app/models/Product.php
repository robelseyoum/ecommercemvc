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


        

    public function get_popular(){

        $this->db->query("SELECT P.*, 
                          COUNT(O.product_id) as total 
                          FROM orders AS O 
                          INNER JOIN products AS P
                          on O.product_id = P.id
                          GROUP BY O.product_id
                          ORDER BY total DESC
                          ");   
        
        $results = $this->db->resultSet();  
        return $results;
    }





















}



 ?>