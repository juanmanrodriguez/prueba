<?php

/**
 * @author Juan Manuel Rodriguez
 */
class Index_Controller extends CI_Controller
{

    /**
     * 
     * @param String $page nombre de la pagina
     * 
     * Inicia la vista default de la aplicacion
     */
    public function index()
    {
        $data['title'] = 'Inicio';
        $this->load->view('header', $data);
        $this->load->view('default', $data);
        $this->load->view('footer', $data);
    }

}
