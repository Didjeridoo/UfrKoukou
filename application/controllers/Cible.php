<?php

$key = "abcdefghijklmnoprstuvwxyz";

$array[26][] = $tabl;

array_push($array[0],new Element("arbre",1));
array_push($array[2],new Element("chaussure",0));
        

function makeList($liste){
    $arg[5];
    for($i=0;i<sizeof($liste);$i++){
        $id = research($liste[$i]);
        if ($id<0){
            $arg[$id]=$liste[$i];
        }
    }
}

function research(String $k){
    $key;
    for ($i=0;i< sizeof($key);$i++){
        if($key[$i]==$k{0}){
            $key=$i;
        }
    }
    for($i=0;i< sizeof($array[$k]);$i++){
        if ($array[$key][$i].nom == $k){
        }
    }
            return $array[$key][$i].id;
    return -1;
}


Class Element{
    var $nom;
    var $id;
    
    function Element($nom,$id){
        this.$nom=$nom;
        this.$id=id; 
    }
} 