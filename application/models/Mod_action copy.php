
<?php

class Mod_action extends CI_Model
{
    var $table = 'tbl_data';
    var $column_order = array(null, 'ref_number', 'full_name'); //set column field database for datatable orderable
    var $column_search = array('ref_number', 'full_name'); //set column field database for datatable searchable 
    var $order = array('ref_number' => 'asc'); // default order

    function get_dept($searchTerm = "")
    {
        $this->db->select('id_dept, dept_name');
        $this->db->where("dept_name like '%" . $searchTerm . "%' ");
        $this->db->order_by('dept_name', 'asc');
        $fetched_records = $this->db->get('tbl_listdept');
        $datadept = $fetched_records->result_array();

        $data = array();
        foreach ($datadept as $dept) {
            $data[] = array("id" => $dept['dept_name'], "text" => $dept['dept_name']);
        }
        return $data;
    }

    function get_sect($id_dept, $searchTerm = "")
    {
        $this->db->select('id_sect, section_name');
        $this->db->where('id_dept', $id_dept);
        $this->db->where("section_name like '%" . $searchTerm . "%' ");
        $this->db->order_by('section_name', 'asc');
        $fetched_records = $this->db->get('tbl_listsection');
        $datasect = $fetched_records->result_array();

        $data = array();
        foreach ($datasect as $sect) {
            $data[] = array("id" => $sect['id_sect'], "text" => $sect['section_name']);
        }
        return $data;
    }

    function get_pic($id_sect, $searchTerm = "")
    {
        $this->db->select('id, pic_name');
        $this->db->where('id_sect', $id_sect);
        $this->db->where("pic_name like '%" . $searchTerm . "%' ");
        $this->db->order_by('pic_name', 'asc');
        $fetched_records = $this->db->get('tbl_listpic');
        $datapic = $fetched_records->result_array();

        $data = array();
        foreach ($datapic as $pic) {
            $data[] = array("id" => $pic['id'], "text" => $pic['pic_name']);
        }
        return $data;
    }
}
