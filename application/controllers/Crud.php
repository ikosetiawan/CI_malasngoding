<?php

class Crud extends CI_COntroller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud');
        $this->load->helper('url');
    }

    function index()
    {
        $data['user'] = $this->M_crud->tampil_data()->result();
        $this->load->view('V_crud', $data);
    }

    function tambah()
    {
        $this->load->view('V_input');
    }

    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
        $this->M_crud->input_data('tb_user',$data);
        redirect('crud/index');
    }

    function hapus($id)
    {
        $id = array('id' => $id);
        $this->M_crud->hapus_data($id,'tb_user');
        redirect('crud/index');
    }

    function edit($id) //disini hanya untuk menangkap data id yang akan ditampilkan pada form edit 
    {
        $where = array('id' => $id);
        $data['tb_user'] = $this->M_crud->edit_data($where, 'tb_user')->result();
        $this->load->view('V_crud_edit',$data);
    }

    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $where = array(
            'id' => $id
        );

        $this->M_crud->update_data($where, $data, 'tb_user');
        redirect('crud/index');
    }

}