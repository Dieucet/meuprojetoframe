<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')){
            redirect('login');
        }
        $this->load->model('Contatos_model', 'contatos');
        //contatos é uma alias para o contatos_model
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Frame";
        $dados['contatos'] = $this->contatos->listar();
        $this->load->view('home', $dados);
        $this->load->view('template/footer');
    }

   
    
    

}
