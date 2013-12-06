<?php

class Shouait_model extends Models {
    
    function __construct() {
        parent::__constuct();
    }
    
    function get_by_user($id_user) { // selectionne tout les souhaits d'un utilisateur 
        $this->db->select('id_product');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('SOUHAIT');
        return $query->result(); // return -> tableau [ 'id_product' ]
    }
    
    function get__by_tag($tags) { // va chercher les user qui on le souhait qui correspond au tag
        $this->db->select('id_product, id_user');
        foreach ($tags as $tag) {
            if($tag === "") {
                continue;
            } else {
                $this->db->where(''.$tag, $tag);
            }
        }
        $query = $this->db->get('SOUHAIT');
        return $query->result(); // return -> tableau [ 'id_product', 'id_user' ]
    }
    
    function add($tags, $id_user) { // ajouter un souhait a la liste de l'utilisateur
        $tab = array('id_user' => $id_user);
        foreach ($tags as $tag) {
            if($tag === "") {
                continue;
            } else {
                array_merge($tab, array("".$tag => $tag));
            }
        }
        $this->db->insert('SOUHAIT', $tab);
    }
}