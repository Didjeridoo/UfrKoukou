<?php

class Shouait_model extends Models {
    
    function __construct() {
        parent::__constuct();
    }
    
    function get($id_user) {
        $this->db->where('id_user', $id_user);
        $querry = $this->db->get('SOUHAIT');
        return $querry->result();
    }
    
    function add($tags, $id_user) {
        $tab = array('id_user' => $id_user);
        foreach ($tags as $tag) {
            if($tag === "") {
                continue;
            } else {
                array_merge($tab, array(""+$tag => $tag));
            }
        }
        $this->db->insert('SOUHAIT', $tab);
    }
}