<?php

 
class Agent extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agent_model');
        $this->load->model('Branch_model');
        $this->load->model('User_model');
    } 

    /*
     * Listing of agents
     */
    function index()
    {

        $data['braches'] = $this->Branch_model->get_all();
        $data['agents'] = $this->Agent_model->get_all_agents();
        $data['users'] = $this->User_model->get_all();

        
        $data['_view'] = 'agent/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new agent
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('agent_name','Agent Name','required');
		$this->form_validation->set_rules('daily_transactions','Daily Transactions','required');
		$this->form_validation->set_rules('photo_internal_branding','Photo Internal Branding','required');
		$this->form_validation->set_rules('photo_external_branding','Photo External Branding','required');
		$this->form_validation->set_rules('photo_traffifs','Photo Traffifs','required');
		$this->form_validation->set_rules('branch_id','Branch Id','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'branch_id' => $this->input->post('branch_id'),
				'agent_name' => $this->input->post('agent_name'),
				'daily_transactions' => $this->input->post('daily_transactions'),
				'photo_internal_branding' => $this->input->post('photo_internal_branding'),
				'photo_external_branding' => $this->input->post('photo_external_branding'),
				'photo_traffifs' => $this->input->post('photo_traffifs'),
            );
            
            $agent_id = $this->Agent_model->add_agent($params);
            redirect('index.php/agent/index');
        }
        else
        {        

         $data['braches'] = $this->Branch_model->get_all();   
                 $data['users'] = $this->User_model->get_all();
 
            $data['_view'] = 'agent/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a agent
     */
    function edit($agent_id)
    {   
        // check if the agent exists before trying to edit it
        $data['agent'] = $this->Agent_model->get_agent($agent_id);
        
        if(isset($data['agent']['agent_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('agent_name','Agent Name','required');
			$this->form_validation->set_rules('daily_transactions','Daily Transactions','required');
			$this->form_validation->set_rules('photo_internal_branding','Photo Internal Branding','required');
			$this->form_validation->set_rules('photo_external_branding','Photo External Branding','required');
			$this->form_validation->set_rules('photo_traffifs','Photo Traffifs','required');
			$this->form_validation->set_rules('branch_id','Branch Id','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'branch_id' => $this->input->post('branch_id'),
					'agent_name' => $this->input->post('agent_name'),
					'daily_transactions' => $this->input->post('daily_transactions'),
					'photo_internal_branding' => $this->input->post('photo_internal_branding'),
					'photo_external_branding' => $this->input->post('photo_external_branding'),
					'photo_traffifs' => $this->input->post('photo_traffifs'),
                );

                $this->Agent_model->update_agent($agent_id,$params);            
                redirect('index.php/agent/index');
            }
            else
            {
                $data['braches'] = $this->Branch_model->get_all();
                        $data['users'] = $this->User_model->get_all();

                $data['_view'] = 'agent/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The agent you are trying to edit does not exist.');
    } 

    /*
     * Deleting agent
     */
    function remove($agent_id)
    {
        $agent = $this->Agent_model->get_agent($agent_id);

        // check if the agent exists before trying to delete it
        if(isset($agent['agent_id']))
        {
            $this->Agent_model->delete_agent($agent_id);
            redirect('index.php/agent/index');
        }
        else
            show_error('The agent you are trying to delete does not exist.');
    }
    
}
