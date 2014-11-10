<?php

    class Super_User_Model extends CI_Model
    {
        //put your code here
        public function select_blog_by_blogger_id($blogger_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_blog');
            $this->db->where('blogger_id',$blogger_id);
            $this->db->where('publication_status',1);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
        public function select_blog_by_blog_id($blog_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_blog');
            $this->db->where('blog_id',$blog_id);
            $query_result=$this->db->get();
            $result=$query_result->row();
            return $result;
        }
        public function update_blog_info($data,$blog_id)
        {
            $this->db->where('blog_id',$blog_id);
            $this->db->update('tbl_blog',$data);
        }
        public function view_blogger_profile_info($blogger_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_blogger');
            $this->db->where('blogger_id',$blogger_id);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }
        public function update_blogger_profile_info($data,$blogger_id)
        {
            $this->db->where('blogger_id',$blogger_id);
            $this->db->update('tbl_blogger',$data);
        }
        public function select_all_comments()
        {
            $this->db->select('*');
            $this->db->from('tbl_comments');
            $this->db->where('publication_status',1);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
        public function check_blog_status($blog_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_blog');
            $this->db->where('blog_id',$blog_id);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }
        public function select_comments_by_blogger_id($blogger_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_comments');
            $this->db->where('blogger_id',$blogger_id);
            $this->db->where('publication_status',1);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
    }

?>
