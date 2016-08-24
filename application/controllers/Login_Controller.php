<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Controller
 *
 * @author juan
 */
class Login_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['title'] = "Inicio de sesi&oacute;n";
        $data['error'] = "";

        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('footer');
    }
    
    
    public function login()
    {
        $user = $this->input->post('nombre_usuario');
        $password = $this->input->post('password_usuario');
        
        if($user && $password)
        {
            $data['title'] = "Inicio de sesi&oacute;n";
            
            redirect(site_url("User_Controller/index/".$user));
        }
        else
        {
            $data['title'] = "Inicio de sesi&oacute;n";
            $data['error'] = "El usuario o la contrase&ntilde;a son incorrectos";

            $this->load->view('header', $data);
            $this->load->view('login', $data);
            $this->load->view('footer');
        }
        
        /*$data = array();
        $this->load->model('User_Model');
        $user = $this->User_Model->get_by_id($id);
        $data['user'] = $user;
        
        $data['title'] = "Ver";
        
        $this->load->view('user/header', $data);
        $this->load->view('user/ver', $data);
        $this->load->view('user/footer');
        
        $user = $this->input->post('password_usuario');
        $password = $this->input->post('password_usuario');
        
        $this->load->model('Login_Model');

        if ($user == "admin" && $password == "admin")
        {
            $data['title'] = "Inicio de sesi&oacute;n";
            
            $this->load->view('header', $data);
            $this->load->view('login', $data);
            $this->load->view('footer');
        }
        else
        {
            $data['title'] = "Inicio de sesi&oacute;n";
            $data['error'] = "El usuario o la contrase&ntilde;a son incorrectos";

            $this->load->view('header', $data);
            $this->load->view('login', $data);
            $this->load->view('footer');
        }*/
    }
}
