<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_crud extends CI_Model{

        function get_nama()
        {
            $this->db->select('nama.*,category.name AS category,hobby.name as hobby');
            $this->db->from('nama');
            $this->db->join('category', 'nama.id_category=category.id', 'inner');
            $this->db->join('hobby', 'nama.id_hobby=hobby.id', 'inner');
            $this->db->order_by('id', 'ASC');
            return $this->db->get()->result();
        }

        function get_category()
        {
            return $this->db->get('category')->result();
        }

        function get_hoby()
        {
            return $this->db->get('hobby')->result();
        }


        function get_hobby($id)
        {
            $this->db->where('id_category', $id);
            return $this->db->get('hobby')->result();
        }

        function save($data)
        {
            $this->db->insert('nama', $data);
        }

        function update($data,$id)
        {
            $this->db->where('id', $id);
            $this->db->update('nama', $data);
        }

        function get_data($id)
        {
          $this->db->where('id', $id);
          return $this->db->get('nama')->result();
        }

        function hapus($id)
        {
            $this->db->where('id', $id);
            return $this->db->delete('nama');
        }
    }
?>