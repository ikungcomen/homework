<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AddEmployee_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
    }

    public function get_employee() {
        $data['employee'] = $this->DBHelper->get_employee();
        $this->load->view('show_employee', $data);
    }

    public function show_addemployee() {
        $this->load->view('add_employee');
    }

    public function add_employee() {
        $gen = $this->input->post("gen");
        $name = $this->input->post("name");
        $lastName = $this->input->post("lastName");
        $amount = $this->input->post("amount");
        $result = $this->DBHelper->add_employee($gen, $name, $lastName, $amount);
        if ($result > 0) {
            echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        } else {
            echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
        }
        $this->load->view('add_employee');
    }

    public function delete_employee($id = '') {
        $result = $this->DBHelper->delete_employee($id);
        if ($result > 0) {
            echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
        } else {
            echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
        }
        $data['employee'] = $this->DBHelper->get_employee();
        $this->load->view('show_employee', $data);
    }

    public function showworking($id) {
        $data['working'] = $this->DBHelper->get_working_employee($id);
        $this->load->view('show_working_employee', $data);
    }

    public function showwithdraw($id) {
        $data['withdraw'] = $this->DBHelper->get_withdraw_employee($id);
        $this->load->view('show_withdraw_employee', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */