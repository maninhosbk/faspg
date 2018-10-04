<?php



class Reviews_model extends CI_Model{
    
    
    public function __construct() {
        $this->load->database();

    }
    
    
    public function get_reviews($id){
        if ($id!=FALSE){
            $query = $this->db->get_where('reviews', array('id' => $id));
            return $query->row_array();
        }ELSE{
            return FALSE;
        }
    }
    
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>