<?php
    class Super_Admin_Model extends CI_Model
    {
        //put your code here
        public function save_category_info($data)
        {
            $this->db->insert('tbl_category',$data);
        }
        public function select_all_category()
        {
            $this->db->select('*');
            $this->db->from('tbl_category');
            $query_result=$this->db->get();
            $result=$query_result->result();
            return $result;
        }
        public function delete_category_info($category_id)
        {
            $this->db->where('category_id',$category_id);
            $this->db->delete('tbl_category');
        }
        public function unpublish_category_info($category_id)
        {
            $this->db->set('publication_status',0);
            $this->db->where('category_id',$category_id);
            $this->db->update('tbl_category');
        }
        public function publish_category_info($category_id)
        {
            $this->db->set('publication_status',1);
            $this->db->where('category_id',$category_id);
            $this->db->update('tbl_category');
        }
        public function select_category_by_category_id($category_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_category');
            $this->db->where('category_id',$category_id);
            $query_result=$this->db->get();
            $result=$query_result->row();
            return $result;
        }
        public function update_category_info($data,$category_id)
        {
            $this->db->where('category_id',$category_id);
            $this->db->update('tbl_category',$data);
        }
        public function save_blog_info($data)
        {
            $this->db->insert('tbl_blog',$data);
        }
        public function select_all_comments(){
            $this->db->select('*');
            $this->db->from('tbl_comments');
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
        
        public function unpublish_comments_info($comments_id)
        {
            $this->db->set('publication_status',0);
            $this->db->where('comments_id',$comments_id);
            $this->db->update('tbl_comments');
        }
        public function publish_comments_info($comments_id)
        {
            $this->db->set('publication_status',1);
            $this->db->where('comments_id',$comments_id);
            $this->db->update('tbl_comments');
        }
        public function select_all_blog()
        {
            $this->db->select('*');
            $this->db->from('tbl_blog');
            //$this->db->where('publication_status',0);
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
        public function unpublish_blog_info($blog_id)
        {
            $this->db->set('publication_status',0);
            $this->db->where('blog_id',$blog_id);
            $this->db->update('tbl_blog');
        }
        public function publish_blog_info($blog_id)
        {
            $this->db->set('publication_status',1);
            $this->db->where('blog_id',$blog_id);
            $this->db->update('tbl_blog');
        }
        public function delete_blog_info($blog_id)
        {
            $this->db->where('blog_id',$blog_id);
            $this->db->delete('tbl_blog');
        }
    }
?>
