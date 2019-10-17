<?php
class Prod_model extends CI_Model
{
    public function listaProduto()
    {
        $objMysql = $this->db->get('produto');
        return $objMysql->result();
    }
    public function buscaProduto($id)
    {
        $objMysql = $this->db->get_where('produto', ['id' => $id]);
        return $objMysql->result();
    }
    public function salvaBanco($produto)
    {
        $this->db->insert('produto', $produto);
    }
    public function editaBanco($produto)
    {
        $this->db->replace('produto', $produto);
    }
    public function excluiBanco($produto)
    {
        $this->db->delete('produto', $produto);
    }
}