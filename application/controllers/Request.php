<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mod_request'));
        $this->load->library('user_agent');
        $this->load->helper('string');
    }

    public function index()
    {

        $aplikasi['aplikasi'] = $this->Mod_request->Aplikasi()->row();
        $aplikasi['koderef'] = $this->Mod_request->generate_kode();
        $this->template->load('templates/layoutbackend2', 'request/request_view', $aplikasi);

        // $this->load->view('request/request_view', $aplikasi);
    } //end function index

    public function success()
    {

       
        $this->template->load('templates/layoutbackend2', 'request/request_success');

        // $this->load->view('request/request_view', $aplikasi);
    } //end function index


    function add()
    {

        if (isset($_POST['simpan'])) {

            if ($_FILES['userfiles']['name'] != "" && $_FILES['supporting_document']['name'] != "") {

                $config['upload_path']   = './uploads/photo/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
                $config['file_name']     = $this->upload->data("file_name");
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('userfiles')) {
                    echo $this->upload->display_errors();
                    exit();
                }

                $upload = $this->upload->data();
                $filename = $upload['file_name'];

                $namadokumen = $this->input->post('supporting_document', true);
                $config2['allowed_types'] = 'xlxs|xls|pdf';
                $config2['upload_path']   = './uploads/supporting_document/';
                $config2['file_name']     = $namadokumen;
                $this->upload->initialize($config2);

                if (!$this->upload->do_upload('supporting_document')) {
                    echo $this->upload->display_errors();
                    exit();
                }

                
                $upload = $this->upload->data();
                $filename2 = $upload['file_name'];

                $data = array(
                    'ref_number'              => $this->input->post('ref_number', TRUE),
                    'tanggal'              => $this->input->post('tanggal', TRUE),
                    'intervention'            => $this->input->post('intervention', TRUE),
                    'full_name'            => $this->input->post('full_name', TRUE),
                    'position'            => $this->input->post('position', TRUE),
                    'unit'            => $this->input->post('unit', TRUE),
                    'company_email'            => $this->input->post('company_email', TRUE),
                    'phone_requestor'            => $this->input->post('phone_requestor', TRUE),
                    'phone_manager'            => $this->input->post('phone_manager', TRUE),
                    'date_request'            => $this->input->post('date_request', TRUE),
                    'description'            => $this->input->post('description', TRUE),
                    'photo'            =>  $filename,
                    'supporting_document'            => $filename2,
                    'tahun'  => date('Y'),
                );
                $this->db->insert("tbl_data", $data);
                redirect('request/success');
            } else if ($_FILES['userfiles']['name'] != "" && $_FILES['supporting_document']['name'] == "") {

                $config['upload_path']   = './uploads/photo/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
                $config['file_name']     = $this->upload->data("file_name");
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('userfiles')) {
                    echo $this->upload->display_errors();
                    exit();
                }

                $upload = $this->upload->data();
                $filename = $upload['file_name'];

                $data = array(
                    'ref_number'              => $this->input->post('ref_number', TRUE),
                    'tanggal'              => $this->input->post('tanggal', TRUE),
                    'intervention'            => $this->input->post('intervention', TRUE),
                    'full_name'            => $this->input->post('full_name', TRUE),
                    'position'            => $this->input->post('position', TRUE),
                    'unit'            => $this->input->post('unit', TRUE),
                    'company_email'            => $this->input->post('company_email', TRUE),
                    'phone_requestor'            => $this->input->post('phone_requestor', TRUE),
                    'phone_manager'            => $this->input->post('phone_manager', TRUE),
                    'date_request'            => $this->input->post('date_request', TRUE),
                    'description'            => $this->input->post('description', TRUE),
                    'photo'            =>  $filename,
                    'supporting_document'            => "",
                    'tahun'  => date('Y'),
                );
                $this->db->insert("tbl_data", $data);
                redirect('request/success');
            } else if ($_FILES['userfiles']['name'] == "" && $_FILES['supporting_document']['name'] != "") {


                $namadokumen = $this->input->post('supporting_document', true);
                $config2['allowed_types'] = 'xlxs|xls|pdf';
                $config2['upload_path']   = './uploads/supporting_document/';
                $config2['file_name']     = $namadokumen;
                $this->upload->initialize($config2);

                if (!$this->upload->do_upload('supporting_document')) {
                    echo $this->upload->display_errors();
                    exit();
                }

                $upload = $this->upload->data();
                $filename2 = $upload['file_name'];

                $data = array(
                    'ref_number'              => $this->input->post('ref_number', TRUE),
                    'tanggal'              => $this->input->post('tanggal', TRUE),
                    'intervention'            => $this->input->post('intervention', TRUE),
                    'full_name'            => $this->input->post('full_name', TRUE),
                    'position'            => $this->input->post('position', TRUE),
                    'unit'            => $this->input->post('unit', TRUE),
                    'company_email'            => $this->input->post('company_email', TRUE),
                    'phone_requestor'            => $this->input->post('phone_requestor', TRUE),
                    'phone_manager'            => $this->input->post('phone_manager', TRUE),
                    'date_request'            => $this->input->post('date_request', TRUE),
                    'description'            => $this->input->post('description', TRUE),
                    'photo'            =>  "",
                    'supporting_document'            => $filename2,
                    'tahun'  => date('Y'),
                );
                $this->db->insert("tbl_data", $data);
                redirect('request/success');
            } else if ($_FILES['userfiles']['name'] == "" && $_FILES['supporting_document']['name'] == "") {

                $data = array(
                    'ref_number'              => $this->input->post('ref_number', TRUE),
                    'tanggal'              => $this->input->post('tanggal', TRUE),
                    'intervention'            => $this->input->post('intervention', TRUE),
                    'full_name'            => $this->input->post('full_name', TRUE),
                    'position'            => $this->input->post('position', TRUE),
                    'unit'            => $this->input->post('unit', TRUE),
                    'company_email'            => $this->input->post('company_email', TRUE),
                    'phone_requestor'            => $this->input->post('phone_requestor', TRUE),
                    'phone_manager'            => $this->input->post('phone_manager', TRUE),
                    'date_request'            => $this->input->post('date_request', TRUE),
                    'description'            => $this->input->post('description', TRUE),
                    'photo'            => '',
                    'supporting_document'            => '',
                    'tahun'  => date('Y'),
                );
                $this->db->insert("tbl_data", $data);
                redirect('request/success');
            }
        } else {
            $aplikasi['aplikasi'] = $this->Mod_request->Aplikasi()->row();
            $aplikasi['koderef'] = $this->Mod_request->generate_kode();
            $this->template->load('templates/layoutbackend2', 'request/request_view', $aplikasi);
        }
    }
}
