<?php

 
class Branch extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Branch_model');
        $this->load->model('User_model');
    } 

    /*
     * Listing of branch
     */
    function index()
    {
        $data['branch'] = $this->Branch_model->get_all_branch();
        $data['users'] = $this->User_model->get_all();
        
        $data['_view'] = 'branch/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new branch
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('branch_name','Branch Name','required');
		$this->form_validation->set_rules('branch_location','Branch Location','required');
		$this->form_validation->set_rules('balance','Balance','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('user_id','User Id','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'branch_id' => $this->input->post('branch_id'),
				'branch_name' => $this->input->post('branch_name'),
				'branch_location' => $this->input->post('branch_location'),
				'balance' => $this->input->post('balance'),
				'city' => $this->input->post('city'),
				'assets' => $this->input->post('assets'),
            );
            
            $branch_id = $this->Branch_model->add_branch($params);
            redirect('index.php/branch/index');
        }
        else
        {       
            $data['users'] = $this->User_model->get_all();     
            $data['_view'] = 'branch/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a branch
     */
    function edit($branch_id)
    {   
        // check if the branch exists before trying to edit it
        $data['branch'] = $this->Branch_model->get_branch($branch_id);
        
        if(isset($data['branch']['branch_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('branch_name','Branch Name','required');
			$this->form_validation->set_rules('branch_location','Branch Location','required');
			$this->form_validation->set_rules('balance','Balance','required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('user_id','User Id','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'branch_id' => $this->input->post('branch_id'),
					'branch_name' => $this->input->post('branch_name'),
					'branch_location' => $this->input->post('branch_location'),
					'balance' => $this->input->post('balance'),
					'city' => $this->input->post('city'),
					'assets' => $this->input->post('assets'),
                );

                $this->Branch_model->update_branch($branch_id,$params);            
                redirect('index.php/branch/index');
            }
            else
            {
                $data['users'] = $this->User_model->get_all();
                $data['_view'] = 'branch/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The branch you are trying to edit does not exist.');
    } 

    /*
     * Deleting branch
     */
    function remove($branch_id)
    {
        $branch = $this->Branch_model->get_branch($branch_id);

        // check if the branch exists before trying to delete it
        if(isset($branch['branch_id']))
        {
            $this->Branch_model->delete_branch($branch_id);
            redirect('index.php/branch/index');
        }
        else
            show_error('The branch you are trying to delete does not exist.');
    }
    
}
