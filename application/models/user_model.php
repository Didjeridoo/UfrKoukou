<?php

Class User_model extends CI_Model
{

    function User_model()
    {
        //Call the Model constructor
        parent::__construct();
    }

    function add($data)
    {
        $this->db->insert('user', $data);
    }

    function update($data, $pseudo)
    {
        $this->db->where('pseudo', $pseudo);
        $this->db->update('user', $data);
    }

    function delete($pseudo)
    {
        $this->db->where('pseudo', $pseudo);
        $this->db->delete('user');
    }

    function get($pseudo)
    {
        $this->db->where('pseudo', $pseudo);
        $query = $this->db->select('user');
        return $query;
    }

    function count()
    {
        return $this->db->count_all('user');
    }

    function getAll()
    {
        return $this->db->get();
    }
}