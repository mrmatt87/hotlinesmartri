<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Submenu extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mod_submenu','Mod_menu'));
        $this->load->model(array('Mod_userlevel'));
    }

    public function index()
    {
        $this->load->helper('url');
        // $data['menu'] = $this->Mod_menu->getAll()->result();
        $this->template->load('templates/layoutbackend','admin/submenu_data');
    }

    public function ajax_list()
    {
        $list = $this->Mod_submenu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $submenu) {
            $no++;
            $row = array();
            $row[] = $submenu->nama_submenu;
            $row[] = $submenu->link;
            $row[] = $submenu->icon;
            $row[] = $submenu->nama_menu;
            $row[] = $submenu->is_active;
            $row[] = $submenu->id_submenu;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Mod_submenu->count_all(),
            "recordsFiltered" => $this->Mod_submenu->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }



 
}