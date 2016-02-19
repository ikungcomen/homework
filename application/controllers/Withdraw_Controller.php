<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Withdraw_Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
       
    }

    public function show_withdraw(){
        $data['result'] = $this->DBHelper->show_withdraw();
        $this->load->view('show_withdraw',$data);
    }
    public function withdrwa($employee_id){
        $data['employee'] = $this->DBHelper->getCount_withdraw($employee_id);
        $this->load->view('withdraw',$data);
    }

    public function save_withdraw(){
        $employee_id = $this->input->post('employee_id');
        $withdraw_qty_day = $this->input->post('withdraw_qty_day');
		$employee_amont = $this->input->post('employee_amont');
		$withdraw_amount = $employee_amont*$withdraw_qty_day;
        $withdraw_date = $this->input->post('withdraw_date');//date("Y-m-d");
        $result = $this->DBHelper->save_withdraw($employee_id, $withdraw_qty_day, $withdraw_amount, $withdraw_date);
        if($result > 0){
        	$sum_withdraw['withdraw'] = $this->DBHelper->get_sum_withdraw($employee_id);
        	$withdraw_day = 0;
        	$withdraw_amount = 0;
        	foreach ($sum_withdraw['withdraw'] as $row) {
        		$withdraw_day = $row['withdraw_day'];
        		$withdraw_amount = $row['withdraw_amount'];
        	}
        	$data['result'] = $this->DBHelper->get_tb_workingbalance($employee_id);
        	$working_amount = 0;
        	$working_day = 0;
        	foreach ($data['result'] as $row) {
        		$working_day    = $row['working_day'];
        		$working_amount = $row['working_amount'];
        	}
        	$balance_day = 0;
        	$balance_amount = 0;
        	$balance_day = $working_day-$withdraw_day;
        	$balance_amount = $working_amount-$withdraw_amount;
        	$resilt_update = $this->DBHelper->update_workingbalance_withdraw($employee_id, $balance_day, $balance_amount, $withdraw_day, $withdraw_amount);

        	$data['result'] = $this->DBHelper->get_withdraw($employee_id);
        	$this->load->view('show_withdraw_complete',$data);

        }

        
        
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */