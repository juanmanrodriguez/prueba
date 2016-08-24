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
class Login_Model
{

    public function get_by_id($id)
    {
        $this->db->select('id_usuario, nombre_usuario, password_usuario');
        $this->db->from('users');
        $this->db->where('id_usuario', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

}
