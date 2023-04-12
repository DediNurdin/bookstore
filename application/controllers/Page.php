<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
		$this->load->model('Usermodel');
		$this->load->model('Salemodel');
    }

	public function home(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('home'); // load view home.php
	}


//BOOK
	public function book()
    {
		$data['book'] = $this->Book_model->viewBook();
        $this->render_backend('book', $data);
    }

	public function tambah()
    {
        
        $validation = $this->form_validation; //untuk menghemat penulisan kode

		$validation->set_rules('book_title', 'Book Title', 'required');
        $validation->set_rules('author', 'Author', 'required');
        $validation->set_rules('publisher', 'Publisher', 'required');
        $validation->set_rules('book_category', 'Book Category', 'required');
        $validation->set_rules('price', 'Price', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah');
        } else {
        $this->Book_model->tambahBuku();
        redirect('page/book');
        }
	}

	public function hapus($book_id)
    {
        $this->Book_model->hapus($book_id);
        redirect('page/book');
    }

	public function ubah($book_id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['book'] = $this->Book_model->getById($book_id);

        $validation->set_rules('book_title', 'Book Title', 'required');
        $validation->set_rules('author', 'Author', 'required');
        $validation->set_rules('publisher', 'Publisher', 'required');
        $validation->set_rules('book_category', 'Book Category', 'required');
        $validation->set_rules('price', 'Price', 'required');
 
        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->Book_model->ubahBook();
            redirect('page/book');
        }
	}




//USER
	public function pengguna(){
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
			show_404(); // Redirect ke halaman 404 Not found

		// function render_backend tersebut dari file core/MY_Controller.php
		$data['user'] = $this->Usermodel->viewUser();
		$this->render_backend('pengguna', $data); // load view pengguna.php
	}

	public function add()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

		$validation->set_rules('username', 'Username', 'required');
        $validation->set_rules('password', 'Password', 'required');
        $validation->set_rules('nama', 'Name', 'required');
        $validation->set_rules('role', 'Role', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('add_user');
        } else {
        $this->Usermodel->add();
        redirect('page/pengguna');
        }
	}

	public function delete($id)
    {
        $this->Usermodel->delete($id);
        redirect('page/pengguna');
    }

	public function edit($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['user'] = $this->Usermodel->getById($id);
        
        $validation->set_rules('username', 'Username');
        $validation->set_rules('password', 'Password');
        $validation->set_rules('nama', 'Name', 'required');
        $validation->set_rules('role', 'Role', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('edit_user', $data);
        } else {
            $this->Usermodel->edit();
            redirect('page/pengguna');
        }
	}



//SALE
public function sale()
    {
		$data['sale'] = $this->Salemodel->viewSale();
        $this->render_backend('sale', $data);
    }

	public function tambahSale()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('date', 'Date', 'required');
        $validation->set_rules('book_id', 'Book id', 'required');
        $validation->set_rules('quantity', 'Quantity', 'required');
        $validation->set_rules('price', 'Price', 'required');
		$validation->set_rules('total_price', 'Total Price', 'required');
        
        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah_sale');
        } else {
        $this->Salemodel->tambahSale();
        redirect('page/sale');
        }
	}

	public function hapusSale($transaction_id)
    {
        $this->Salemodel->hapusSale($transaction_id);
        redirect('page/sale');
    }

	public function ubahSale($transaction_id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['sale'] = $this->Salemodel->getById($transaction_id);

		$validation->set_rules('date', 'Date', 'required');
        $validation->set_rules('book_id', 'Book id', 'required');
        $validation->set_rules('quantity', 'Quantity', 'required');
        $validation->set_rules('price', 'Price', 'required');
		$validation->set_rules('total_price', 'Total Price', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah_sale', $data);
        } else {
            $this->Salemodel->ubahSale();
            redirect('page/sale');
        }
	}


	public function kontak(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('kontak'); // load view kontak.php
	}
}
