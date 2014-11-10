<?php

session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_Admin extends CI_Controller
{   
    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model');
        $this->load->model('home_model');
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
           redirect("admin_login","refresh"); 
        }
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
        $this->data1['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor1',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
    }
    
    public function index()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/dashboard','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('login_status');
        session_destroy();
        $sdata=array();
        $sdata['message']="You Are Successfully Logged Out !";
        $this->session->set_userdata($sdata);
        redirect("admin_login");
    }
    public function add_category()
    {
        $data=array();
        $data['admin_maincontent']=$this->load->view('admin/add_category_form','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_category()
    {
        $data=array();
        $data['category_name']=$this->input->post('category_name',true);
        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_category_info($data);
        $sdata=array();
        $sdata['message']="Category info saved successfully !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/add_category");
    }
    public function view_category()
    {
        $data=array();
        $data['all_category']=$this->super_admin_model->select_all_category();
        $data['admin_maincontent']=$this->load->view('admin/view_category',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function delete_category($category_id)
    {
        $this->super_admin_model->delete_category_info($category_id);
        redirect("super_admin/view_category");
    }
    public function unpublish_category($category_id)
    {
        $this->super_admin_model->unpublish_category_info($category_id);
        redirect("super_admin/view_category");
    }
    public function publish_category($category_id)
    {
        $this->super_admin_model->publish_category_info($category_id);
        redirect("super_admin/view_category");
    } 
    public function edit_category($category_id)
    {
        $data=array();
        $data['category_info']=$this->super_admin_model->select_category_by_category_id($category_id);
        $data['admin_maincontent']=$this->load->view('admin/edit_category_form',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_category()
    {
        $data=array();
        $category_id=$this->input->post('category_id',true);
        $data['category_name']=$this->input->post('category_name',true);
        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->update_category_info($data,$category_id);
        $sdata=array();
        $sdata['message']="Category info updated successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/edit_category/$category_id");
    }
    public function post_blog()
    {
        $data=array();
        
        $data['all_category']=$this->home_model->select_published_category();
        $data['editor']=$this->data;
        $data['editor1']=$this->data1;
        $data['admin_maincontent']=$this->load->view('admin/blog_post_form',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_blog()
    {
        $data=array();
        $data['blog_title']=$this->input->post('blog_title',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['author_name']=$this->input->post('author_name',true);
        $data['blog_short_description']=$this->input->post('blog_short_description',true);
        $data['blog_long_description']=$this->input->post('blog_long_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_blog_info($data);
        $sdata=array();
        $sdata['message']="Blog info saved successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/post_blog");
    }
    public function manage_comments ()
    {
        $data=array();
        $data['all_comments']=$this->super_admin_model->select_all_comments();
        //$blog_id=$all_comments->blog_id;
        //$data['blog_info']=$this->super_admin_model->select_blog_by_blog_id($blog_id);
        $data['admin_maincontent']=$this->load->view('admin/view_comments',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublish_comments ($comments_id)
    {
        $this->super_admin_model->unpublish_comments_info($comments_id);
        redirect("super_admin/manage_comments");
    }
    public function publish_comments($comments_id)
    {
          $this->super_admin_model->publish_comments_info($comments_id);
        redirect("super_admin/manage_comments");
    }
    public function manage_blog ()
    {
        $data=array();
        $data['all_blog']=$this->super_admin_model->select_all_blog();
        $data['admin_maincontent']=$this->load->view('admin/view_all_blog',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function view_blog($blog_id)
    {
        $data=array();
        $data['editor']=$this->data;
        $data['editor1']=$this->data1;
        $data['all_category']=$this->home_model->select_published_category();
        $data['blog_info']=$this->super_admin_model->select_blog_by_blog_id($blog_id);
        $data['admin_maincontent']=$this->load->view('admin/view_specific_blog',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublish_blog ($blog_id)
    {
        $this->super_admin_model->unpublish_blog_info($blog_id);
        redirect("super_admin/manage_blog");
    }
    public function publish_blog ($blog_id)
    {
        $this->super_admin_model->publish_blog_info($blog_id);
        redirect("super_admin/manage_blog");
    }
    public function delete_blog($blog_id)
    {
        $this->super_admin_model->delete_blog_info($blog_id);
        redirect("super_admin/manage_blog");
    }
}
?>
