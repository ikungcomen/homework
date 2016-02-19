<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receipt_Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
       
    }
    public function show_receiptDetail(){
    	$data['result'] = $this->DBHelper->get_receiptmoney();
		$this->load->view('receipt_detail',$data);
        
	}
	public function add_equip(){
		$this->load->view('add_receipt');
	}

	public function save_receipt(){
		$receipt_no = $this->input->post('receipt_no');
		$receipt_name = $this->input->post('receipt_name');
		$payment_name = $this->input->post('payment_name');
		$receipt_detail = $this->input->post('receipt_detail');
		$receipt_amount = $this->input->post('receipt_amount');
		$receipt_date = $this->input->post('receipt_date');
		$result_insert = $this->DBHelper->save_receipt($receipt_no, $receipt_name, $payment_name, $receipt_detail, $receipt_amount, $receipt_date);
		$this->show_receiptDetail();

	}
	public function delete_receipt($id){
		$result_delete = $this->DBHelper->delete_receipt($id);
		$this->show_receiptDetail();
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */