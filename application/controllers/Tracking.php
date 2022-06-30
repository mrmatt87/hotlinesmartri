<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('fungsi');
        $this->load->library('user_agent');
      
        $this->load->model('Mod_tracking');
        // backButtonHandle();
    }

    function index()
    {
        	$this->template->load('templates/layoutbackend','tracking/tracking_view');  
    }


    public function ajax_list()
    {
        $list = $this->Mod_tracking->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $db) {
   
            $evaluasi =  '<a href="tracking/detail/'. $db->ref_number.'" class="btn btn-sm btn-outline-primary"><i class="fa fa-info-circle" ></i> </a>';
            $aksi =  '<a href="tracking/aksi/'. $db->ref_number.'" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" ></i> </a>';
 
            $no++;
            $row = array();
            $row[] = $db->ref_number;
            $row[] = $db->intervention;
            $row[] = $db->full_name;
            $row[] = nl2br($db->description);
            $row[] = $evaluasi;
            // $row[] = $aksi;
            
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Mod_tracking->count_all(),
            "recordsFiltered" => $this->Mod_tracking->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function detail()
    {  
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        	$this->template->load('templates/layoutbackend','tracking/tracking_detail', $data);   
    }

    function  aksi()
    {  
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        	$this->template->load('templates/layoutbackend','tracking/tracking_edit', $data);   
    }
}
/* End of file Controllername.php */
 