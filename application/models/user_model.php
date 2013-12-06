<?php

Class User_model extends CI_Model
{
    // Table name
    private $table = 'user';

    /**
     * Construct
     */
    function User_model()
    {
        //Call the Model constructor
        parent::__construct();
    }

    /**
     * Insert a new User in DB
     *
     * @param array $data Array that contains all user data
     */
    function insert($data)
    {
        $this->db->insert('user', $data);
        $data['password'] = hash('sha256', $data['password']);
        return $this->db->insert_id();
    }

    /**
     * Update a user, password will be hashed
     *
     * @param string $username Username
     * @param array $data Data for update
     */
    public function update($username, $data)
    {
        // Prevent overwriting with a blank password
        if (isset($data['password']) && $data['password']) {
            $data['password'] = hash('sha256', $data['password']);
        } else {
            unset($data['password']);
        }

        $this->db->where('username', $username)->update($this->table, $data);
    }


    /**
     * Delete a user
     *
     * @param string $where identification field
     * @param bool $value
     * @internal param \value $int
     */
    public function delete($where, $value = false)
    {
        if (!$value) {
            $value = $where;
            $where = 'username';
        }

        $this->db->where($where, $value)->delete($this->table);
    }

    function get($pseudo)
    {
        return $this->db->where("username", $pseudo)->get($this->table)->row_array();
    }

    /**
     * Count number of registered users
     * @return Number of registered users
     */
    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    /**
     * TODO
     *
     * @return mixed
     */
    function getAll()
    {
        return $this->db->get();
    }

}
