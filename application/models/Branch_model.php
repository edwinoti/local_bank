<?php

 
class Branch_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get branch by 
     */
    function get_branch($branch_id)
    {
        return $this->db->get_where('branch',array('branch_id'=>$branch_id))->row_array();
    }
        
    /*
     * Get all branch
     */
    function get_all_branch()
    {
        $this->db->order_by('branch_id', 'desc');
        return $this->db->get('branch')->result_array();
    }

    public function get_all() {
        
        if($braches = $this->db->get('branch')) {
            
            
            return $braches->result();
        }
        return FALSE;
    }
        
    /*
     * function to add new branch
     */
    function add_branch($params)
    {
        $this->db->insert('branch',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update branch
     */
    function update_branch($branch_id,$params)
    {
        $this->db->where('branch_id',$branch_id);
        return $this->db->update('branch',$params);
    }
    
    /*
     * function to delete branch
     */
    function delete_branch($branch_id)
    {
        return $this->db->delete('branch',array('branch_id'=>$branch_id));
    }
}
