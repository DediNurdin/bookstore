<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
    
    private $_table = "user";

    public function viewUser()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function add()
    {
    
        $password = $this->input->post('password');
        $data = array(
            'username' => $this->input->post('username', true),
            'password' => md5($password),
            'nama' => $this->input->post('nama', true),
            'role' => $this->input->post('role', true)
        );

        $this->db->insert($this->_table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function edit()
    {
        $password = $this->input->post('password');
        $data = array(
            'username' => $this->input->post('username', true),
            'password' => md5($password),
            'nama' => $this->input->post('nama', true),
            'role' => $this->input->post('role', true)            
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    } 
}
