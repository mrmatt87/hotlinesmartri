<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class tracking_user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('fungsi');
        // $this->load->library('user_agent');
        // $this->load->helper('myfunction_helper');
        $this->load->model('Mod_tracking_user');
        // backButtonHandle();
    }

    function index()
    {
        	$this->template->load('templates/layoutbackend2','tracking_user/tracking_user_view');  
    }


    public function ajax_list()
    {
        $list = $this->Mod_tracking_user->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $db) {
   
            $evaluasi =  '<a href="tracking_user/detail/'. $db->ref_number.'" class="btn btn-sm btn-outline-primary"><i class="fa fa-info-circle" ></i> </a>';

            
            $no++;
            $row = array();
            $row[] = $db->ref_number;
            $row[] = $db->intervention;
            $row[] = $db->full_name;
            $row[] = nl2br($db->description);
            $row[] = $evaluasi;
            
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Mod_tracking_user->count_all(),
            "recordsFiltered" => $this->Mod_tracking_user->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    function detail()
    {  
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        	$this->template->load('templates/layoutbackend2','tracking_user/tracking_detail', $data);   
    }


}
/* End of file Controllername.php */
 