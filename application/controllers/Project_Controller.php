<?php

class Project_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if ($this->session->userdata('logueado'))
        {
            $data = array();
            $this->load->model('Project_Model');
            $data['projects'] = $this->User_Model->get_all();

            $data['title'] = "Inicio";

            $this->load->view('project/header', $data);
            $this->load->view('project/index', $data);
            $this->load->view('project/footer');
        }
        else
        {
            redirect(base_url());
        }
    }

    public function ver($id)
    {
        $data = array();
        $this->load->model('Project_Model');
        $user = $this->User_Model->get_by_id($id);
        $data['projects'] = $user;

        $data['title'] = "Ver";

        $this->load->view('project/header', $data);
        $this->load->view('project/ver', $data);
        $this->load->view('project/footer');
    }

    public function guardar($id = null)
    {
        $data = array();
        $this->load->model('User_Model');
        if ($id)
        {
            $user = $this->User_Model->get_by_id($id);
            $data['nombre_proyecto'] = $user->nombre_usuario;
            $data['descripcion_proyecto'] = $user->password_usuario;
        }
        else
        {
            $data['nombre_proyecto'] = null;
            $data['descripcion_proyecto'] = null;
        }
        $data['title'] = "Guardar";

        $this->load->view('project/header', $data);
        $this->load->view('project/guardar', $data);
        $this->load->view('project/footer');
    }

    public function guardar_usuario()
    {
        if ($this->input->post())
        {
            $id_usuario = $this->input->post('documento');
            $nombre_usuario = $this->input->post('nombre');
            $password_usuario = $this->input->post('pass');
            $this->load->model('User_Model');
            $this->User_Model->add($id_usuario, $nombre_usuario, $password_usuario);
            redirect(base_url());
        }
    }

    public function edit($id = null)
    {
        $data = array();
        $this->load->model('User_Model');
        if ($id)
        {
            $user = $this->User_Model->get_by_id($id);
            $data['id_usuario'] = $user->id_usuario;
            $data['nombre_usuario'] = $user->nombre_usuario;
            $data['password_usuario'] = $user->password_usuario;
        }
        else
        {
            $data['id_usuario'] = null;
            $data['nombre_usuario'] = null;
            $data['password_usuario'] = null;
        }
        $data['title'] = "Guardar";

        $this->load->view('user/header', $data);
        $this->load->view('user/editar', $data);
        $this->load->view('user/footer');
    }

    public function edit_user()
    {
        if ($this->input->post())
        {
            $id_usuario = $this->input->post('documento');
            $nombre_usuario = $this->input->post('nombre');
            $password_usuario = $this->input->post('pass');
            $this->load->model('User_Model');
            $this->User_Model->edit($id_usuario, $nombre_usuario, $password_usuario);
            redirect(base_url());
        }
    }

    public function delete($id)
    {
        $this->load->model('User_Model');
        $this->User_Model->delete($id);
        redirect(base_url());
    }
}
