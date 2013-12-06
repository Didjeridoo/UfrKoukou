<?php

class Suit_model extends  Models {
    
    function __construct() {
        parent::__construct();
    }
    
    function suivre($user, $cible) {
        $this->bd->insert('suit', array("id_user" => $user, "id_cible" => $cible));
    }
    
    function get_suiveur($user) {
        $this->bd->select('id_user');
        $this->bd->where('id_cible', $user);
        $query = $this->bd->get('suit');
        return $query->result();
    }
    
    function get_suivit($user) {
        $this->bd->select('id_cible');
        $this->bd->where('id_user', $user);
        $query = $this->bd->get('suit');
        return $query->result();
    }
}