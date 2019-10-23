<?php
 
class Login extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('login_model');
        $this->load->library('session');
 
}
 
public function index()
{
$this->load->view("login.php");

}
 
public function register_user(){
 
      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'account_number'=>$this->input->post('account_number'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);
 
$email_check=$this->login_model->email_check($user['user_email']);
 
if($email_check){
  $this->login_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('index.php/login/login_view');
 
}
else{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('login');
 
 
}
 
}
 
public function register_view(){
 
$this->load->view("register.php");
 
}
 
function login_user(){ 
  $user_login=array(
 
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))
 
    ); 
//$user_login['user_email'],$user_login['user_password']
    $data['users']=$this->login_model->login_user();
    //  if($data)
      //{
		  
        $this->session->set_userdata('user_id',$data['users'][0]['user_id']);
        $this->session->set_userdata('user_email',$data['users'][0]['user_email']);
        $this->session->set_userdata('user_name',$data['users'][0]['user_name']);
        $this->session->set_userdata('account_number',$data['users'][0]['account_number']);
        $this->session->set_userdata('user_mobile',$data['users'][0]['user_mobile']);
		echo $this->session->set_userdata('user_id'); 

    $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
        // $this->load->view('dashboard.php',$data);
 
    //  }
    //  else{
     //   $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
     //   $this->load->view("login.php");
 
     // }

 
 
}
 
function user_profile(){
 
$this->load->view('dashboard.php');
 
}
public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('index.php/login/index', 'refresh');
}
 
}
 
