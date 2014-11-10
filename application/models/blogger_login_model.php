<?php

class Blogger_Login_Model extends CI_Model {
    //put your code here
    public function save_blogger_info($data)
    {
        $this->db->insert('tbl_blogger',$data);
    }
    public function check_login_info($user_email_address,$user_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_blogger');
        $this->db->where('email_address',$user_email_address);
        $this->db->where('password',md5($user_password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}

?>
