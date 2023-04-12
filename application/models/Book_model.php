<?php

class Book_model extends CI_Model
{
    private $_table = "book";

    public function viewBook()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahBuku()
    {
        $data = array(
            'book_title' => $this->input->post('book_title', true),
            'author' => $this->input->post('author', true),
            'publisher' => $this->input->post('publisher', true),
            'book_category' => $this->input->post('book_category', true),
            'price' => $this->input->post('price', true)
        );

        $this->db->insert($this->_table, $data);
    }

    public function hapus($book_id)
    {
        $this->db->where('book_id', $book_id);
        $this->db->delete($this->_table);
    }

    public function getById($book_id)
    {
        return $this->db->get_where($this->_table, ['book_id' => $book_id])->row_array();
    }

    public function ubahBook()
    {
        $data = array(
            'book_title' => $this->input->post('book_title'),
            'author' => $this->input->post('author'),
            'publisher' => $this->input->post('publisher'),
            'book_category' => $this->input->post('book_category'),
			'price' => $this->input->post('price')
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('book_id', $this->input->post('book_id'));
        $this->db->update($this->_table, $data);

    } 
}
