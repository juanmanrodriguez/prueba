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
            $data['projects'] = $this->Project_Model->get_all();

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
        $projects = $this->Project_Model->get_by_id($id);
        $data['projects'] = $projects;

        $data['title'] = "Ver";

        $this->load->view('project/header', $data);
        $this->load->view('project/ver', $data);
        $this->load->view('project/footer');
    }

    public function guardar($id = null)
    {
        $data = array();
        $this->load->model('Project_Model');
        if ($id)
        {
            $user = $this->Project_Model->get_by_id($id);
            $data['nombre_proyecto'] = $user->nombre_proyecto;
            $data['descripcion_proyecto'] = $user->descripcion_proyecto;
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

    public function guardar_proyecto()
    {
        if ($this->input->post())
        {
            $nombre_proyecto = $this->input->post('nombre_proyecto');
            $descripcion_proyecto = $this->input->post('descripcion_proyecto');
            $this->load->model('Project_Model');
            $this->Project_Model->add($nombre_proyecto, $descripcion_proyecto);
            redirect(base_url());
        }
    }

    public function edit($id = null)
    {
        $data = array();
        $this->load->model('Project_Model');
        if ($id)
        {
            $user = $this->Project_Model->get_by_id($id);
            $data['nombre_proyecto'] = $user->nombre_proyecto;
            $data['descripcion_proyecto'] = $user->descripcion_proyecto;
        }
        else
        {
            $data['nombre_proyecto'] = null;
            $data['descripcion_proyecto'] = null;
        }
        $data['title'] = "Guardar";

        $this->load->view('project/header', $data);
        $this->load->view('project/editar', $data);
        $this->load->view('project/footer');
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
        $this->load->model('Project_Model');
        $this->Project_Model->delete($id);
        redirect(base_url());
    }
}
