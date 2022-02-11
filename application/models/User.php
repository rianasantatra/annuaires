<?php

class User extends CI_Model {

	protected $users = 'users';
	
	public function get_user($param1, $param2)
    {
        return $this->db->select('*')
            ->from($this->users)
            ->where('email', $param1)
            ->where('password', $param2)
            ->limit(1)
            ->get()
            ->result();
    }

	public function insert_user($param)
    {
        $this->db->insert($this->users, $param);
        return $this->db->insert_id();
    }

	public function update_user($param1, $param2)
    {
        $this->db->where('id', $param1);
        $this->db->update('users', $param2);
    }

    public function delete_user($id)
    {
        return $this->db->delete($this->users, array('id' => $id));
    }
}
