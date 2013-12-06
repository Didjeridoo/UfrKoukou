<?php

class Product_model extends Models {
    
    function __construct() {
        parent::__construct();
    }
    
    function get_by_tag($tags) {
        $this->db->select('id_product');
        switch ($tags['type']) {
            case "t-shirt":
                $tab = array(
                    'genre' => $tags['type'],
                    'couleur' => $tags['couleur'],
                    'manche' => $tags['manche'],
                    'taille' => $tags['taille'],
                    'col' => $tags['col'],
                    'motif' => $tags['motif'],
                    'marque' => $tags['marque']
                );
                foreach ($tab as $tag) {
                    if($tag === "") {
                        continue;
                    } else {
                        $this->db->where($tag, $tag);
                    }
                }
                break;
            case "pantalon":
                $tab = array(
                    'genre' => $tags['type'],
                    'couleur' => $tags['couleur'],
                    'taille' => $tags['taille'],
                    'marque' => $tags['marque'],
                    'coupe' => $tags['coupe']
                );
                foreach ($tab as $tag) {
                    if($tag === "") {
                        continue;
                    } else {
                        $this->db->where($tag, $tag);
                    }
                }
                break;
            case "chaussure":
                $tab = array(
                    'genre' => $tags['type'],
                    'couleur' => $tags['couleur'],
                    'taille' => $tags['taille'],
                    'marque' => $tags['marque'],
                    'type' => $tags['type']
                );
                foreach ($tab as $tag) {
                    if($tag === "") {
                        continue;
                    } else {
                        $this->db->where($tag, $tag);
                    }
                }
                break;
            default:
                break;
        }
        $querry = $this->db->get('PRODUCT');
        return $querry->result();
    }
    
    function add_by_tag($tags) {
        $tab = array();
        foreach ($tags as $tag) {
            if($tag === "") {
                continue;
            } else {
                array_merge($tab, array(""+$tag => $tag));
            }
        }
        $this->db->insert('PRODUCT', $tab);
    }
}