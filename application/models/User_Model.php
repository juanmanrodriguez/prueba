<?php

/**
 * @author Juan Manuel Rodriguez
 */
class User_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_user($documento, $nombre, $passw)
    {
        $datos = array(
            'id_usuario' => $documento,
            'nombre_usuario' => $nombre,
            'password_usuario' => $passw
        );
        return $this->db->insert('users', $datos);
    }

    public function update_user($documento, $nombre, $passw)
    {
        $datos = array(
            'id_usuario' => $documento,
            'nombre_usuario' => $nombre,
            'password_usuario' => $passw
        );
        $this->db->where('id_usuario', $documento);
        return $this->db->update('users', $datos);
    }

    public function delete_user($id_busqueda)
    {
        $this->db->where('id_usuario', $id_busqueda);
        return $this->db->delete('users');
    }

    public function search_user($data)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_usuario', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function list_users()
    {
        $query = $this->db->get('users');
        $query_result = $query->result();
        return $query_result;
    }

}
