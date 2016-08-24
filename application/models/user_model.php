<?php

class user_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add($id_usuario, $nombre_usuario, $password_usuario)
    {
        $data = array(
            'id_usuario' => $id_usuario,
            'nombre_usuario' => $nombre_usuario,
            'password_usuario' => $password_usuario
        );
        $this->db->insert('users', $data);
    }
    
    public function edit($id_usuario, $nombre_usuario, $password_usuario) {
        $data = array(
            'id_usuario' => $id_usuario,
            'nombre_usuario' => $nombre_usuario,
            'password_usuario' => $password_usuario
        );
        if ($id)
        {
            $this->db->where('id_usuario', $id);
            $this->db->update('users', $data);
        }
    }

    public function delete($id)
    {
        $this->db->where('id_usuario', $id);
        $this->db->delete('users');
    }

    public function get_by_id($id)
    {
        $this->db->select('id_usuario, nombre_usuario, password_usuario');
        $this->db->from('users');
        $this->db->where('id_usuario', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

    public function get_all()
    {
        $this->db->select('id, titulo, descripcion, prioridad');
        $this->db->from('informes');
        $this->db->order_by('prioridad, titulo', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
      return $resultado;
   }
}
