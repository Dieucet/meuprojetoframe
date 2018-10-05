<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcao_model extends CI_Model {

    function _construct() {
        parent::contruct();
    }

    function Listar() {
        $this->db->select('*');
        $this->db->from('funcao');
        $this->db->order_by('nomefuncao','ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function inserir($c) {
        return $this->db->insert('funcao', $c);
    }

    function deletar($id) {
        $this->db->where('idfuncao', $id);
        return $this->db->delete('funcao');
    }
    
    function editar($id) {
        $this->db->where('idfuncao', $id);
        $result = $this->db->get('funcao');
        return $result->result();
    }
    
    function atualizar($data) {
        $this->db->where('idfuncao', $data['idfuncao']);
        $this->db->set($data);
        return $this->db->update('funcao');
    }

}
