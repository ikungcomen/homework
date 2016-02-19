<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SaveWork_Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
       
    }
    public function show_employee()
	{
        $data['employee'] = $this->DBHelper->get_employee();
        $this->load->view('save_work', $data);
	}
	public function savework_detail($id = '')
	{
        $data['employee'] = $this->DBHelper->get_employee_byId($id);
        $this->load->view('savework_detail',$data);//, $data
	}
	public function save(){
		$employee_id   = $this->input->post("employee_id");
		$employee_gen   = $this->input->post("employee_gen");
		$employee_name   = $this->input->post("employee_name");
		$employee_lastname   = $this->input->post("employee_lastname");
		$work_qty   = $this->input->post("work_qty");
		$employee_amount   = $this->input->post("employee_amount");
		$working_date   = $this->input->post("working_date");
		$all_amount = $work_qty * $employee_amount;
		$result   = $this->DBHelper->save_work($employee_id, $employee_gen, $employee_name, $employee_lastname,$work_qty,$all_amount,$working_date);
		if ($result > 0) {
			$data['result'] = $this->DBHelper->get_sumWork_tb_working($employee_id);
			$working_day = 0;
			$working_amount = 0;
			foreach ($data['result'] as $row ) {
				$working_amount =   $row['all_mont'];
				$working_day   =   $row['all_workingday'];
			}
			$withdraw_amount = 0;
			$withdraw_day = 0;
            $withdraw['result'] = $this->DBHelper->get_sumWork_tb_withdraw($employee_id);
			foreach ($withdraw['result'] as $row ) {
				$withdraw_amount = $row['withdraw_amount'];
				$withdraw_day = $row['withdraw_day'];
			}
			$balance_day = 0;
			$balance_amount = 0;
			$balance_day = $working_day-$withdraw_day;
			$balance_amount = $working_amount-$withdraw_amount;

			$result_count   = $this->DBHelper->select_check_tb_workingbalance($employee_id);
			if($result_count > 0){
				$result_update   = $this->DBHelper->update_workingbalance($employee_id, $working_amount, $working_day, $balance_day, $balance_amount, $withdraw_amount, $withdraw_day);
			}else{
				$result_insert   = $this->DBHelper->insert_workingbalance($employee_id, $working_amount,$working_day, $balance_day, $balance_amount, $withdraw_amount, $withdraw_day);
			}
			
			
			
		} else {
			
		}
		

		$this->show_employee();

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */