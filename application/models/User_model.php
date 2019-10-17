<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    // atributos
    public $id;
    public $nome;
    public $email;
    // public listar usuário
    public function getUsers($id = null)
    {
        if ($id === null) {
            // select * from usuário
            $query = $this->db->get('usuário');
        } else {
            $query = $this->db->get_where('usuário', ['id' => $id]);
        }   
        
        return $query->result();
    }
    public function getUserByNome($nome)
    {
       
        $query = $this->db->get_where('usuário', ['nome' => $nome]);
        
        return $query->result();
    }
    public function insere($data)
    {
        $this->db->insert('usuário', $data);
    }
    public function altera($data)
    {
        $this->db->replace('usuário', $data);
    }
    public function exclui($data)
    {
        $this->db->delete('usuário', $data);
    }
    
}