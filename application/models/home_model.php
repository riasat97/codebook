<?php
class Home_Model extends CI_Model{
    //put your code here
    public function select_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_published_blog()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by("blog_id", "desc");
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_published_blog_by_blog_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    /*public function select_specific_blog($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('category_id',$category_id);
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }*/
   public function save_comments_info($data)
    {
        $this->db->insert('tbl_comments',$data);
    }
    public function select_published_comments($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('blog_id', $blog_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_recent_post()
    {
        $sql="SELECT *
            FROM tbl_blog
            WHERE publication_status=1
            ORDER BY blog_id DESC
            LIMIT 2";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function select_published_blog_by_category_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->order_by("blog_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function update_view_count_by_blog_id($view_count,$blog_id)
    {
        $this->db->set('view_count',$view_count);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
    }
    public function select_popular_post()
    {
        $sql="SELECT *
            FROM tbl_blog
            WHERE publication_status=1
            ORDER BY view_count DESC
            LIMIT 3";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
}

?>
