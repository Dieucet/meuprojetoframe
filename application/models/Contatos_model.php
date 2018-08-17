<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contatos_model extends CI_Model {

    function _construct() {
        parent::contruct();
    }

    function Listar() {
        $this->db->select('*');
        $this->db->from('contatos');
        $query = $this->db->get();
        return $query->result();
    }

    function inserir($c) {
        return $this->db->insert('contatos', $c);
    }

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contatos');
    }
    
    function editar($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('contatos');
        return $result->result();
    }
    
    function atualizar($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update('contatos');
    }

}
