<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('fungsi');
        // $this->load->library('user_agent');
        $this->load->model('Mod_action');
        // backButtonHandle();
    }
 
    public function get_dept()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_dept($searchTerm);
        echo json_encode($response);
    }
 
    // Kabupaten
    public function get_sect($id_dept)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_sect($id_dept, $searchTerm);
        echo json_encode($response);
    }
 
    // Kecamatan
    public function get_pic($id_sect)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_pic($id_sect, $searchTerm);
        echo json_encode($response);
    }

    function forward()
    {  
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
        	$this->template->load('templates/layoutbackend','action/action_forward', $data);   
    }

    function forward_save(){

        
    }
}