<?php

 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        $data['users'] = $this->User_model->get_all();

        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }


    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('user_password','User Password','required');
		$this->form_validation->set_rules('account_name','Account Name','required');
		$this->form_validation->set_rules('user_mobile','User Mobile','required');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('user_email','User Email','required');
		$this->form_validation->set_rules('account_number','Account Number','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_password' => $this->input->post('user_password'),
				'account_name' => $this->input->post('account_name'),
				'user_mobile' => $this->input->post('user_mobile'),
				'user_id' => $this->input->post('user_id'),
				'user_name' => $this->input->post('user_name'),
				'user_email' => $this->input->post('user_email'),
				'account_number' => $this->input->post('account_number'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('index.php/user/index');
        }
        else
        {      
        $data['users'] = $this->User_model->get_all();      
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($user_id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($user_id);
        
        if(isset($data['user']['user_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('user_password','User Password','required');
			$this->form_validation->set_rules('account_name','Account Name','required');
			$this->form_validation->set_rules('user_mobile','User Mobile','required');
			$this->form_validation->set_rules('user_name','User Name','required');
			$this->form_validation->set_rules('user_email','User Email','required');
			$this->form_validation->set_rules('account_number','Account Number','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_password' => $this->input->post('user_password'),
					'account_name' => $this->input->post('account_name'),
					'user_mobile' => $this->input->post('user_mobile'),
					'user_id' => $this->input->post('user_id'),
					'user_name' => $this->input->post('user_name'),
					'user_email' => $this->input->post('user_email'),
					'account_number' => $this->input->post('account_number'),
                );

                $this->User_model->update_user($user_id,$params);            
                redirect('index.php/user/index');
            }
            else
            {
                $data['users'] = $this->User_model->get_all();
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($user_id)
    {
        $user = $this->User_model->get_user($user_id);

        // check if the user exists before trying to delete it
        if(isset($user['user_id']))
        {
            $this->User_model->delete_user($user_id);
            redirect('index.php/user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
