<?php

include_once '../models/user_model.php';

class TestOfUser extends PHPUnit_Framework_TestCase 
{
    
    /**
     * Test de création d'un utilisateur puis verification dans la bdd qu'il est bien présent.
     */
    public function testOfCreateUser()
    {
        $newUser = new User_model();
        // Variables de test
        $pseudo = 'pseudoTest';
        $password = 'passwordTest';
        $mail = 'mailTest@gmail.com';
        // Verif que la bdd ne contient pas d'users.
        $this->assertEquals($newUser->count(), 0);
        $tableauUser = array('username' => $pseudo, 'password' => $password, 'email' => $mail);
        // Ajout de l'user de test avec les variables de tests définies précedemment.
        $newUser->add($tableauUser);
        // Verif que l'user est bien ajouté à la bdd.
        $this->assertEquals($newUser->count(), 1);
    }
    
    
}