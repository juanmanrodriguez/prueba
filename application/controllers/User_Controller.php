<?php

/**
 * @author Juan Manuel Rodriguez
 */
class User_Controller extends CI_Controller
{

    public function contrstruct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'A&ntilde;adir usuario';

        $this->load->view('header', $data);
        $this->load->view('user/add_user');
        $this->load->view('footer');
    }

    public function update()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modificar un usuario';

        $this->load->model('User_Model');
        $data['users'] = $this->User_Model->list_users();

        $this->load->view('header', $data);
        $this->load->view('user/update_user', $data);
        $this->load->view('footer');
    }

    public function delete()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modificar un usuario';

        $this->load->model('User_Model');
        $data['users'] = $this->User_Model->list_users();

        $this->load->view('header', $data);
        $this->load->view('user/delete_user', $data);
        $this->load->view('footer');
    }

    public function list_users()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Listado de usuarios';

        $this->load->model('User_Model');
        $data['users'] = $this->User_Model->list_users();

        $this->load->view('header', $data);
        $this->load->view('user/list_user', $data);
        $this->load->view('footer');
    }

    public function add_user()
    {
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
        else
        {
            $data['title'] = 'A&ntilde;adir usuario';

            $this->load->view('header', $data);
            $this->load->view('user/add_user');
            $this->load->view('footer');
        }
    }

    public function update_user()
    {
        /*$id = $this->uri->segment(3);
        $data['users'] = $this->update_model->show_students();
        $data['single_user'] = $this->update_model->show_student_id($id);
        $this->load->view('update_user', $data);*/

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
            if ($this->User_Model->update_user($documento, $nombre, $passw))
            {
                $data['title'] = 'Modificar usuario';

                $this->load->view('header', $data);
                $this->load->view('user/search_user');
                echo "El usuario fue modificado con &eacute;xito";
                $this->load->view('footer');
            }
            else
            {
                $data['title'] = 'Modificar usuario';

                $this->load->view('header', $data);
                $this->load->view('user/update_user');
                echo "Ha ocurrido un error";
                $this->load->view('footer');
            }
        }
        else
        {
            $data['title'] = 'A&ntilde;adir usuario';

            $this->load->view('header', $data);
            $this->load->view('user/update_user');
            $this->load->view('footer');
        }
    }

    public function delete_user()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('documento', 'documento', 'required|numeric');

        if ($this->form_validation->run() === true)
        {
            $documento = $this->input->post('documento');

            $this->load->model('User_Model');

            $users = $this->User_Model->search_user($documento);

            if ($users)
            {
                $users = $this->User_Model->delete_user($documento);
                $data['title'] = 'Modificar un usuario';
                
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Modificar un usuario';

                $this->load->model('User_Model');
                $data['users'] = $this->User_Model->list_users();

                $this->load->view('header', $data);
                $this->load->view('user/delete_user', $data);
                echo "El usuario fue eliminado con &eacute;xito";
                $this->load->view('footer');
            }
            else
            {
                $data['title'] = 'Modificar un usuario';

                $usuario['id'] = $users->id_usuario;
                
                $this->load->view('header', $data);
                $this->load->view('user/delete_user', $usuario);
                echo "Ha ocurrido un error";
                $this->load->view('footer');
            }
        }
    }

}
