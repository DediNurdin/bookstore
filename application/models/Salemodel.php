<?php

class Salemodel extends CI_Model
{
    private $_table = "sale";

    public function viewSale()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahSale()
    {
        $data = array(
            'date' => $this->input->post('date', true),
            'book_id' => $this->input->post('book_id', true),
            'quantity' => $this->input->post('quantity', true),
            'price' => $this->input->post('price', true),
            'total_price' => $this->input->post('total_price', true)
        );

        $this->db->insert($this->_table, $data);
    }

    public function hapusSale($transaction_id)
    {
        $this->db->where('transaction_id', $transaction_id);
        $this->db->delete($this->_table);
    }

    public function getById($transaction_id)
    {
        return $this->db->get_where($this->_table, ['transaction_id' => $transaction_id])->row_array();
    }

    public function ubahSale()
    {
        $data = array(
            'date' => $this->input->post('date', true),
            'book_id' => $this->input->post('book_id', true),
            'quantity' => $this->input->post('quantity', true),
            'price' => $this->input->post('price', true),
            'total_price' => $this->input->post('total_price', true)
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('transaction_id', $this->input->post('transaction_id'));
        $this->db->update($this->_table, $data);

    } 
}
