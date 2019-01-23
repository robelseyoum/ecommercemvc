<?php 

class Category {


    private $db;


    public function __construct() {
        $this->db = new Database;
    }

    /*
    * Get categories 
    */
    
    public function get_categories(){

        $this->db->query("SELECT * FROM  categories");   
        $results = $this->db->resultSet();  

        return $results;

    }

}


 ?>