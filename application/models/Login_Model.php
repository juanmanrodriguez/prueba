<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Model
 *
 * @author juan
 */
class Login_Model extends CI_Model
{

    function ValidarUsuario($id, $password_usuario)
    {
        $this->db->select('id_usuario, nombre_usuario, password_usuario');
        $this->db->from('users');
        $this->db->where('id_usuario', $id);
        $this->db->where('password_usuario', $password_usuario);
        $consulta = $this->db->get();
        //echo $this->db->last_query();
        //print_r($consulta);
        $resultado = $consulta->row();
        //print_r($resultado);
        return $resultado;
    }

}
