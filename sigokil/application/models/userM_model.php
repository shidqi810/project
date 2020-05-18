<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userM_model extends CI_Model {
    private $_table = "user";
    
    public $id;
    public $name;
    public $email;
    public $role_id;
    public $is_active;

    public function rules() {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'role_id',
            'label' => 'Role_id',
            'rules' => 'required'],
        ];
    }

    public function jumlah()
    {   
        $query = $this->db->get($this->_table);
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function getAll() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id_user) {
        return $this->db->get_where($this->_table, ["id" => $id_user])->row();
    }

    public function update() {
        $post = $this->input->post();

        $this->id = $post["id_user"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->role_id = $post["role_id"];
        if(isset($_POST['is_active']) )
        {
            $this->is_active = $post["is_active"];
        }
        else
        {
            $this->is_active = 0;
        }

        $this->db->update($this->_table, $this, array('id' => $post['id_user']));
    }


    public function delete($id_user) {
        return $this->db->delete($this->_table, array("id" => $id_user));
    }
}