<?php

class Usuario_model extends CI_Model {

    public function get($id = null) {
        if (!$id) {
            $this->db->where('status', 2);
            $this->db->order_by('nome', 'ASC');
            $r = $this->db->get('usuario');
            $a = $r->result_array();
            $md = array();
            foreach ($a as $key => $value) {
                unset($value['senha']);
                $md[$value['id']] = $value;
            }
            $res = $md;
        } else {
            $q = $this->db->get_where('usuario', ['id' => $id]);
            $res = $q->row_array();
        }
        return $res;
    }

    public function getAllById() {
        $this->db->order_by('nome', 'ASC');
        $r = $this->db->get('usuario');
        $a = $r->result_array();
        $md = array();
        foreach ($a as $key => $value) {
            unset($value['senha']);
            $md[$value['id']] = $value;
        }
        return $md;
    }
    
    public function insert($data){
        $this->db->insert('usuario', $data);
        if($this->db->insert_id()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function update($data){
        $this->db->where(['id'=>$data['id']]);
        $this->db->update('usuario', $data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $this->db->delete('usuario', ['id'=>$id]);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    public function login($email, $senha){
        $sql = "select * from usuario where email=? and senha=md5(?)";
        $res = $this->db->query($sql, [$email, $senha]);
        if($res->num_rows()>0){
            return true;
        }else{
            return FALSE;
        }
    }
    
    public function get_by_email($email){
        $sql = "select * from usuario where email=?;";
        $res = $this->db->query($sql, [$email]);
        if($res->num_rows()>0){
            $user = $res->row_array();
            unset($user['senha']);
            return $user;
        }else{
            return NULL;
        }
    }

}
