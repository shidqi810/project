<?php
class UserM_model extends CI_Model {
    private $_table = "user";
    
    public $id, $name, $email, $alamat_user, $telepon, $catatan, $role_id, $is_active;

    public function rules() {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'alamat_user',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'required'],

            ['field' => 'catatan',
            'label' => 'Catatan',
            'rules' => 'required'],

            ['field' => 'role_id',
            'label' => 'Role_id',
            'rules' => 'required']
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
        $this->alamat_user = $post["alamat_user"];
        $this->telepon = $post["telepon"];
        $this->catatan = $post["catatan"];
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