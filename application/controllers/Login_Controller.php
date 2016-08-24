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

    function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $nombre_usuario = $this->input->post('nombre_usuario');
        $password_usuario = $this->input->post('password_usuario');

        if (!$nombre_usuario || !$password_usuario)
        {
            $data['error'] = "1";
            $this->load->view('login', $data);
        }
        else
        {
            //echo $nombre_usuario." ".$password_usuario;
            $this->load->model('Login_Model');
            $usuario = $this->Login_Model->ValidarUsuario($nombre_usuario, $password_usuario);
            //print_r($usuario);
            if ($password_usuario === $usuario->password_usuario)
            {
                redirect(site_url("User_Controller"));
            }
            else
            {
                $data['error'] = "Usuario o contrase&ntilde; incorrectos, por favor vuelva a intentar";
                $this->load->view('login', $data);
            }
        }
    }

}
