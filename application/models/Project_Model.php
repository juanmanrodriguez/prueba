<?php

class Project_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add($nombre_proyecto, $descripcion_proyecto)
    {
        $data = array(
            'nombre_proyecto' => $nombre_proyecto,
            'descripcion_proyecto' => $descripcion_proyecto,
        );
        $this->db->insert('Proyecto', $data);
    }
    
    public function edit($id_usuario, $nombre_usuario, $password_usuario) {
        $data = array(
            'id_usuario' => $id_usuario,
            'nombre_usuario' => $nombre_usuario,
            'password_usuario' => $password_usuario
        );
        if ($id_usuario)
        {
            $this->db->where('id_usuario', $id_usuario);
            $this->db->update('users', $data);
        }
    }

    public function delete($id)
    {
        $this->db->where('nombre_proyecto', $id);
        $this->db->delete('Proyecto');
    }

    public function get_by_id($id)
    {
        $this->db->select('nombre_proyecto, descripcion_proyecto');
        $this->db->from('Proyecto');
        $this->db->where('nombre_proyecto', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

    public function get_all()
    {
        $this->db->select('nombre_proyecto, descripcion_proyecto');
        $this->db->from('Proyecto');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
      return $resultado;
   }
}
