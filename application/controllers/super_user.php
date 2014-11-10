<?php

session_start();

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_User extends CI_Controller
{   
    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('super_admin_model');
        $this->load->model('super_user_model');
        $user_id=$this->session->userdata('user_id');
        if($user_id ==NULL)
        {
           redirect("blogger_login","refresh"); 
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
        $data['user_maincontent']=$this->load->view('user/user_dashboard','',true);
        $this->load->view('user/user_master',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('login_status');
        session_destroy();
        $sdata=array();
        $sdata['message']="You Are Successfully Logged Out !";
        $this->session->set_userdata($sdata);
        redirect("blogger_login");
    }
    public function post_blog()
    {
        $data=array();
        $data['editor']=$this->data;
        $data['editor1']=$this->data1;
        $data['all_category']=$this->home_model->select_published_category();
        $data['blogger_id']=$this->session->userdata('user_id');
        $data['user_maincontent']=$this->load->view('user/user_blog_post_form',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function save_blog()
    {
        $data=array();
        $data['blogger_id'] = $this->input->post('blogger_id',true);
        $data['blog_title']=$this->input->post('blog_title',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['author_name']=$this->input->post('author_name',true);
        $data['blog_short_description']=$this->input->post('blog_short_description',true);
        $data['blog_long_description']=$this->input->post('blog_long_description',true);
        $data['publication_status']=0;
        $this->super_admin_model->save_blog_info($data);
        $sdata=array();
        $sdata['message']="Blog info saved successfuly ! Please wait for review";
        $this->session->set_userdata($sdata);
        redirect("super_user/post_blog");
    }
    public function view_blog()
    {
        
        $data=array();
        $blogger_id=$this->session->userdata('user_id');
        $data['all_blog']=$this->super_user_model->select_blog_by_blogger_id($blogger_id);
        $data['user_maincontent']=$this->load->view('user/view_blog',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function edit_blog($blog_id)
    {
        $data=array();
        $data['editor']=$this->data;
        $data['editor1']=$this->data1;
        $data['all_category']=$this->home_model->select_published_category();
        $data['blog_info']=$this->super_user_model->select_blog_by_blog_id($blog_id);
        $data['user_maincontent']=$this->load->view('user/edit_blog_form',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function update_blog($blog_id)
    {
        $data=array();
        $data['blog_title']=$this->input->post('blog_title',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['author_name']=$this->input->post('author_name',true);
        $data['blog_short_description']=$this->input->post('blog_short_description',true);
        $data['blog_long_description']=$this->input->post('blog_long_description',true);
        $data['publication_status']=0;
        $this->super_user_model->update_blog_info($data,$blog_id);
        $sdata=array();
        $sdata['message']="Blog info updated successfuly ! Please wait for review";
        $this->session->set_userdata($sdata);
        redirect("super_user/edit_blog/$blog_id");
    }
    public function view_blogger_profile()
    {
        $data=array();
        $blogger_id=$this->session->userdata('user_id');
        $data['blogger_info']=$this->super_user_model->view_blogger_profile_info($blogger_id);
        $data['user_maincontent']=$this->load->view('user/edit_profile_form',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function update_blogger_profile($blogger_id)
    {
        $data=array();
        $data['first_name']=$this->input->post('first_name',true);
        $data['last_name']=$this->input->post('last_name',true);
        $data['email_address']=$this->input->post('email_address',true);
        $data['password']=md5($this->input->post('password',true));
        $data['mobile_no']=$this->input->post('mobile_no',true);
        $data['address']=$this->input->post('address',true);
        $data['gender']=$this->input->post('gender',true);
        $data['city']=$this->input->post('city',true);
        $data['country']=$this->input->post('country',true);
        $data['zip_code']=$this->input->post('zip_code',true);
        $this->super_user_model->update_blogger_profile_info($data,$blogger_id);
        $sdata=array();
        $sdata['message']="User information updated successfully!";
        $this->session->set_userdata($sdata);
        redirect("super_user/view_blogger_profile");
    }
    public function view_all_comments()
    {
        
        $data=array();
        $data['all_comments']=$this->super_user_model->select_all_comments();
        $data['user_maincontent']=$this->load->view('user/view_all_comments',$data,true);
        $this->load->view('user/user_master',$data);
    }
    public function check_blog_status($blog_id)
    {
        $data=array();
        $data['publication_status']=$this->super_user_model->check_blog_status($blog_id);
        if($data['publication_status']->publication_status==1)
        {
            redirect("home/blog_details/$blog_id");
        }
        else
        {
            $sdata=array();
            $sdata['message']="Your Requested Blog Has Been Removed!";
            $this->session->set_userdata($sdata);
            redirect("super_user/view_all_comments");
        }
    }
    public function view_specific_comments()
    {
        
        $data=array();
        $blogger_id=$this->session->userdata('user_id');
        $data['all_comments']=$this->super_user_model->select_comments_by_blogger_id($blogger_id);
        $data['user_maincontent']=$this->load->view('user/view_specific_comments',$data,true);
        $this->load->view('user/user_master',$data);
    }
}

?>
