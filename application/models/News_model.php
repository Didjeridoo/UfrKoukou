<?php

class News_model extends Models {
    
    function __construct() {
        parent::__construct();
    }
    
    function get_by_particulier($user) {
        $this->bd->select('id_user');
        $this->bd->where('id_user')
    }
}