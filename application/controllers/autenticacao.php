<?php

class Autenticacao extends CI_Controller{
    
    
    public function index(){
        $toView = [];
        try{
            if($this->session->userdata("usuario")){
                redirect(site_url());
            }
            
        } catch (Exception $ex) {
            $this->msg->erro($ex->getMessage());
        } finally {
            //carrega as views
            $this->load->view('inc/header_view');
            $this->load->view('usuario/login_view');
            $this->load->view('inc/footer_view');
        }
    }
    
    public function login(){
        
    }
}