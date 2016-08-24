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

        /*if ($usuario === "admin" && $password === "admin")
        {
            $data = array();
            $this->load->model('Login_Model');
            $data['login'] = $this->Login_Model->login();
        
            $data['title'] = "Inicio de sesi&oacute;n";
            
            $this->load->view('user/header', $data);
            $this->load->view('user/index', $data);
            $this->load->view('user/footer');
        }
        else
        {
            $data['title'] = "Inicio de sesi&oacute;n";
            $data['error'] = "El usuario o la contrase&ntilde;a son incorrectos";
        
            $this->load->view('header', $data);
            $this->load->view('login', $data);
            $this->load->view('footer');
         * 
         * 
         * 
         * 
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('documento', 'documento', 'required|numeric');
            $this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[3]');
            $this->form_validation->set_rules('passw', 'passw', 'required|min_length[3]');

            if ($this->form_validation->run() === true)
            {
                $documento = $this->input->post('documento');
                $nombre = $this->input->post('nombre');
                $passw = $this->input->post('passw');

                $this->load->model('User_Model');
                if ($this->User_Model->insert_user($documento, $nombre, $passw))
                {
                    $data['title'] = 'A&ntilde;adir usuario';

                    $this->load->view('header', $data);
                    $this->load->view('user/add_user');
                    echo "El usuario fue a&ntilde;adido con &eacute;xito";
                    $this->load->view('footer');
                }
                else
                {
                    $data['title'] = 'A&ntilde;adir usuario';
                    
                    $this->load->view('header', $data);
                    $this->load->view('user/add_user');
                    echo "Ha ocurrido un error";
                    $this->load->view('footer');
                }
            }
        */
    }
    
    
    public function login()
    {
        $user = $this->input->post('password_usuario');
        $password = $this->input->post('password_usuario');

        if ($user == "admin" && $password == "admin")
        {
            $data['title'] = "Inicio de sesi&oacute;n";
            $data['error'] = "No hay error";

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
        }
    }
}
