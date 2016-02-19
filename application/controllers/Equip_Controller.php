<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equip_Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
       
    }
    public function show_equip(){
    	$data['equip'] = $this->DBHelper->get_equip();
		$this->load->view('equip_detail',$data);
        
	}
	public function show_addEquip(){
		$this->load->view('add_equip');
	}

	public function add_equip(){
		$equip_name = $this->input->post('equip_name');
		$equip_date = $this->input->post('equip_date');
		$equip_store = $this->input->post('equip_store');
		$store_phone = $this->input->post('store_phone');
		$equip_qty = $this->input->post('equip_qty');
		$equip_uom = $this->input->post('equip_uom');
		$price_uom = $this->input->post('price_uom');
		$sum_amount = $equip_qty*$price_uom;
		$result  = $this->DBHelper->add_equip($equip_name,$equip_date,$equip_store,$store_phone,$equip_qty,$equip_uom,$price_uom,$sum_amount);
		if ($result > 0) {
            echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        }else{
            echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
        }
        $data['equip'] = $this->DBHelper->get_equip();
		$this->load->view('equip_detail',$data);
	}
	public function delete_equip($id = ''){
		$result = $this->DBHelper->delete_equip($id);
		if ($result > 0) {
            echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
        }else{
            echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
        }
        $data['equip'] = $this->DBHelper->get_equip();
		$this->load->view('equip_detail',$data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */