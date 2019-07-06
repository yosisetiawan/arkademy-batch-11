<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Crud extends CI_Controller{

        function __construct()
        {
            parent::__construct();
            $this->load->model('M_crud','crud');
        }

        function index()
        {
            $data = array(
                'kategori' => $this->crud->get_category(),
                'nama' => $this->crud->get_nama(),
                'hoby' => $this->crud->get_hoby()
            );
            $this->load->view('v_crud', $data);
        }

        function get_hobi()
        {
            $id = $this->input->post('id');
            $data = $this->crud->get_hobby($id);
            echo json_encode($data);
        }

        function simpan()
        {
            $data = array(
                'name' => $this->input->post('name'),
                'id_category' => $this->input->post('kategori'),
                'id_hobby' => $this->input->post('hoby')
            );
            $this->crud->save($data);
            redirect(base_url());
        }

        function update()
        {
            $id = $this->input->post('id');
            $data = array(
                'name' => $this->input->post('namaEdit'),
                'id_category' => $this->input->post('kategori'),
                'id_hobby' => $this->input->post('hoby')
            );
            $this->crud->update($data, $id);
            redirect();
        }

        function get_data()
        {
            $id = $this->input->get('id');
            $get = $this->crud->get_data($id);
            if(!empty($get)){
                foreach($get as $g){
                    $data = array(
                        'id' => $g->id,
                        'nama' => $g->name,
                        'id_category' => $g->id_category,
                        'id_hobby' => $g->id_hobby
                    );
                }
            }
            echo json_encode($data);
        }

        function delete_data()
        {
            $id = $this->input->post('id');
            $result = $this->crud->hapus($id);
            echo json_encode($result);
        }
    }
?>