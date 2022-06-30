<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Action extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_action');
    }

    // Dept 
    public function get_dept()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_dept($searchTerm);
        echo json_encode($response);
    }

    // Section
   

    public function get_sect()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_sect($searchTerm);
        echo json_encode($response);
    }


    public function get_pic($id_sect)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_pic($id_sect, $searchTerm);
        echo json_encode($response);
    }

// ------------------------------------------BATAS-------------------------------------

    public function get_sectdua()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_sectdua($searchTerm);
        echo json_encode($response);
    }

//    PIC 
    public function get_staff()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_staff( $searchTerm);
        echo json_encode($response);
    }


    public function get_depthead($id_depthead)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Mod_action->get_depthead($id_depthead, $searchTerm);
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

                'responsedone_section'            => $this->input->post('responsedone_section', TRUE),
                'responsedone_date'            => $this->input->post('responsedone_date', TRUE),
                'responsedone_pic'            => $this->input->post('responsedone_pic', TRUE),
                'responsedone_status'            => '1',

                'recommendation_section'            => $this->input->post('recommendation_section', TRUE),
                'recommendation_date'            => $this->input->post('recommendation_date', TRUE),
                'recommendation_staff'            => $this->input->post('recommendation_pic', TRUE),
                // 'recommendation_status'            => '1',

                'fieldvisitdone_section'            => $this->input->post('fieldvisitdone_section', TRUE),
                'fieldvisitdone_date'            => $this->input->post('fieldvisitdone_date', TRUE),
                'fieldvisitdone_staff'            => $this->input->post('fieldvisitdone_pic', TRUE),
                // 'fieldvisitdone_status'            => '1',

                

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


    //  ----------------------------------------- fieldvisitdone ------------------------------------------------

    function fieldvisitdone()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['fieldvisitdone_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_fieldvisitdone', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_fieldvisitdone_success');
        }
    }

    function fieldvisitdone_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_fieldvisitdone_success');
    }

    function fieldvisitdone_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(

                'fieldvisitdone_section'            => $this->input->post('fieldvisitdone_section', TRUE),
                'fieldvisitdone_date'            => $this->input->post('fieldvisitdone_date', TRUE),
                'fieldvisitdone_pic'            => $this->input->post('fieldvisitdone_pic', TRUE),
                'fieldvisitdone_status'            => '1',

            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/fieldvisitdone_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_fieldvisitdone', $data);
        }
    }


    //  ----------------------------------------- diagnostic ------------------------------------------------

    function diagnostic()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['diagnostic_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_diagnostic', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_diagnostic_success');
        }
    }

    function diagnostic_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_diagnostic_success');
    }

    function diagnostic_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(

                'diagnostic_pic'            => $this->input->post('diagnostic_pic', TRUE),
                'diagnostic_date'            => $this->input->post('diagnostic_date', TRUE),
                'diagnostic_location'            => $this->input->post('diagnostic_location', TRUE),
                'diagnostic_method'            => $this->input->post('diagnostic_method', TRUE),
                'diagnostic_issue'            => $this->input->post('diagnostic_issue', TRUE),
                'diagnostic_estimationimpact'            => $this->input->post('diagnostci_estimationimpat', TRUE),
                'diagnostic_nothingdone'            => $this->input->post('diagnostic_diagnostic_nothingdone', TRUE),
                'diagnostic_status'            => '1',

            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/diagnostic_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_diagnostic', $data);
        }
    }

    //  ----------------------------------------- actionplan ------------------------------------------------

    function actionplan()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['actionplan_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_actionplan', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_actionplan_success');
        }
    }

    function actionplan_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_actionplan_success');
    }

    function actionplan_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(

                'actionplan_preventiveaction'            => $this->input->post('actionplan_preventiveaction', TRUE),
                'actionplan_curativeplan'            => $this->input->post('actionplan_curativeplan', TRUE),
                'actionplan_approvedby'            => $this->input->post('actionplan_approvedby', TRUE),
                'actionplan_date'            => $this->input->post('actionplan_method', TRUE),

                'actionplan_status'            => '1',

            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/actionplan_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_actionplan', $data);
        }
    }

    //  ----------------------------------------- readiness ------------------------------------------------

    function readiness()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['readiness_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_readiness', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_readiness_success');
        }
    }

    function readiness_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_readiness_success');
    }

    function readiness_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(

                'readiness_obstacles'            => $this->input->post('readiness_obstacles', TRUE),
                'readiness_equipment'            => $this->input->post('readiness_equipment', TRUE),
                'readiness_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/readiness_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_readiness', $data);
        }
    }

    //  ----------------------------------------- followup ------------------------------------------------

    function followup()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['followup_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_followup', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_followup_success');
        }
    }

    function followup_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_followup_success');
    }

    function followup_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(

                'followup_location'            => $this->input->post('followup_location', TRUE),
                'followup_method'            => $this->input->post('followup_method', TRUE),
                'followup_researchprogram'            => $this->input->post('followup_researchprogram', TRUE),


                'followup_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/followup_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_followup', $data);
        }
    }

    //  ----------------------------------------- evaluation ------------------------------------------------

    function evaluation()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['evaluation_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_evaluation', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_evaluation_success');
        }
    }

    function evaluation_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_evaluation_success');
    }

    function evaluation_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(


                'evaluation_date'            => $this->input->post('evaluation_date', TRUE),
                'evaluation_feedbackestatecomments'            => $this->input->post('evaluation_feedbackestatecomments', TRUE),
                'evaluation_realization'            => $this->input->post('evaluation_realization', TRUE),
                'evaluation_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/evaluation_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_evaluation', $data);
        }
    }

    //  ----------------------------------------- evaluationsmartri ------------------------------------------------

    function evaluationsmartri()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['evaluationsmartri_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_evaluationsmartri', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_evaluationsmartri_success');
        }
    }

    function evaluationsmartri_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_evaluationsmartri_success');
    }

    function evaluationsmartri_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'evaluation_feedbacksmartri'            => $this->input->post('evaluation_feedbacksmartri', TRUE),
                'evaluationsmartri_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/evaluationsmartri_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_evaluationsmartri', $data);
        }
    }


    //  ----------------------------------------- verification ------------------------------------------------

    function verification()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['verificationem_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_verification', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_verification_success');
        }
    }

    function verification_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_verification_success');
    }

    function verification_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(


                'verification_status'            => $this->input->post('verification_status', TRUE),
                'verification_emdate'            => $this->input->post('verification_emdate', TRUE),
                'verificationem_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/verification_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_verification', $data);
        }
    }

    //  ----------------------------------------- verificationsmartri ------------------------------------------------

    function verificationsmartri()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['verificationsmartri_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_verificationsmartri', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_verificationsmartri_success');
        }
    }

    function verificationsmartri_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_verificationsmartri_success');
    }

    function verificationsmartri_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'verificationsmartri_remark'            => $this->input->post('verificationsmartri_remark', TRUE),
                'verification_smartridate'            => $this->input->post('verification_smartridate', TRUE),
                'verificationsmartri_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/verificationsmartri_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_verificationsmartri', $data);
        }
    }

    //  ----------------------------------------- verificationclosing ------------------------------------------------

    function verificationclosing()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['verificationclosing_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_verificationclosing', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_verificationclosing_success');
        }
    }

    function verificationclosing_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_verificationclosing_success');
    }

    function verificationclosing_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'verification_closing'            => $this->input->post('verification_closing', TRUE),
                'verification_closingdate'            => $this->input->post('verification_closingdate', TRUE),
                'verificationclosing_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/verificationclosing_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_verificationclosing', $data);
        }
    }

    //  ----------------------------------------- distribution ------------------------------------------------

    function distribution()
    {
        $id           = $this->uri->segment(3);

        $query = "SELECT * from tbl_data where ref_number = '$id'";
        $status = $this->db->query($query)->row_array();

        $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
        $data['dept'] = $this->Mod_action->get_dept();

        if ($status['distribution_status'] == 0) {
            $this->template->load('templates/layoutbackend2', 'action/action_distribution', $data);
        } else {
            $this->template->load('templates/layoutbackend2', 'action/action_distribution_success');
        }
    }

    function distribution_success()
    {
        $this->template->load('templates/layoutbackend2', 'action/action_distribution_success');
    }

    function distribution_save()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'verification_closing'            => $this->input->post('verification_closing', TRUE),
                'verification_closingdate'            => $this->input->post('verification_closingdate', TRUE),
                'distribution_status'            => '1',
            );

            $this->db->where('ref_number', $_POST['ref_number']);
            $this->db->update("tbl_data", $data);
            $this->session->set_flashdata('success', 'Telah diupdate!');
            redirect('action/distribution_success');
        } else {
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_data', array('ref_number' => $id))->row_array();
            $data['dept'] = $this->Mod_action->get_dept();
            $this->template->load('templates/layoutbackend2 ', 'action/action_distribution', $data);
        }
    }
}
