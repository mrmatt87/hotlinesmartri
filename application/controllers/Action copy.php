<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Action extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_action');
    }

    public function get_dept()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_dept($searchTerm);
        echo json_encode($response);
    }

    // Kabupaten
    public function get_sect()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_sect( $searchTerm);
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
        $id = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['forward_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_forward', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_forward_success');
        }
    }

    function forward_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_forward_success');
    }

    function forward_save()
    {
        $id           = $this->uri->segment(3);

        if (isset($_POST['simpan'])) {
            $data = array(
                'received_by'            => 'Admin',
                'received_date'            => $this->input->post('received_date', TRUE),
                'forward_depthead'            => $this->input->post('forward_depthead', TRUE),
                'forward_date'            => $this->input->post('forward_date', TRUE),
                'forward_status'            => '1',
            );

            $ref = $this->input->post('ref_number', TRUE);
            $this->db->where("ref_number", $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/forward_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_forward', $data);
        }
    }

    //  ----------------------------------------- responsedone ------------------------------------------------

    function responsedone()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['responsedone_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_responsedone', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_responsedone_success');
        }
    }

    function responsedone_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_responsedone_success');
    }

    function responsedone_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'received_by'            => 'Admin',
                'received_date'            => $this->input->post('received_date', TRUE),
                'responsedone_depthead'            => $this->input->post('responsedone_depthead', TRUE),
                'responsedone_date'            => $this->input->post('responsedone_date', TRUE),
                'responsedone_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/responsedone_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_responsedone', $data);
        }
    }
    
}
