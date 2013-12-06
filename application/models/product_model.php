<?php

class Product_model extends Models {
    
    function __construct() {
        parent::__construct();
    }
    
    function get_by_tag($tags) { // on cherche les produit par rapport aux tags
        $this->db->select('id_product');
        switch ($tags['type']) {
            case "t-shirt": // si l'utilisateur cherche un t-shirt
                $tab = array( // on cree le tableau relatif au produit
                    'genre' => $tags['type'],
                    'couleur' => $tags['couleur'],
                    'manche' => $tags['manche'],
                    'taille' => $tags['taille'],
                    'col' => $tags['col'],
                    'motif' => $tags['motif'],
                    'marque' => $tags['marque']
                );
                foreach ($tab as $tag) { // on va chercher par rapport au tag donné
                    if($tag === "") { 
                        continue;
                    } else {
                        $this->db->where($tag, $tag);
                    }
                }
                break;
            case "pantalon": // si l'utilisateur cherche un pantalon
                $tab = array( // on cree le tableau relatif au produit
                    'genre' => $tags['type'],
                    'couleur' => $tags['couleur'],
                    'taille' => $tags['taille'],
                    'marque' => $tags['marque'],
                    'coupe' => $tags['coupe']
                );
                foreach ($tab as $tag) { // on va chercher par rapport au tag donné
                    if($tag === "") {
                        continue;
                    } else {
                        $this->db->where($tag, $tag);
                    }
                }
                break;
            case "chaussure": // si l'utilisateur cherche des chaussures
                $tab = array( // on cree le tableau relatif au produit
                    'genre' => $tags['type'],
                    'couleur' => $tags['couleur'],
                    'taille' => $tags['taille'],
                    'marque' => $tags['marque'],
                    'type' => $tags['type']
                );
                foreach ($tab as $tag) { // on va chercher par rapport au tag donné
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
        $query = $this->db->get('product'); // On applique la requete
        return $query->result(); // return -> tableau [ 'id_product' ]
    }
    
    function add($tags, $user) { // ajoute un produit
        $tab = array('id_user' => $user);
        foreach ($tags as $tag) {
            if($tag === "") {
                continue;
            } else {
                array_merge($tab, array("".$tag => $tag));
            }
        }
        $this->db->insert('product', $tab);
    }
    
    function get_by_user($user) { // Selectionne les produit d'un utilisateur
        $this->db->select('id_product');
        $this->db->where('id_user', $user);
        $query = $this->db->get('product');
        return $query->result(); // return -> tableau [ 'id_product' ]
    }
}