<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Money_Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
       
    }
    public function show_money(){
    	$receipt_Arr  = $this->DBHelper->get_money_receipt();
    	$withdraw_Arr = $this->DBHelper->get_money_withdraw();
    	$equip_Arr    = $this->DBHelper->get_money_equip();
    	$receipt_money = 0;
    	$withdraw_money = 0;
    	$equip_money = 0;

    	foreach ($receipt_Arr->result() as $row){
            $receipt_money = $row->receipt_money;
        }
        foreach ($withdraw_Arr->result() as $row){
            $withdraw_money = $row->withdraw_amount;
        }
        foreach ($equip_Arr->result() as $row){
            $equip_money = $row->sum_amount;
        }
        $sum_payment = 0;
        $money_balance = 0;
        $sum_payment = $withdraw_money+$equip_money;
        $money_balance = $receipt_money - $sum_payment;
        $dataArr= array(
            'receipt_money'  => $receipt_money,
            'withdraw_money' => $withdraw_money,
            'equip_money'    => $equip_money,
            'money_balance'  => $money_balance,
            'sum_payment'    => $sum_payment

        );

		$this->load->view('show_money',$dataArr);
        
	}
	

	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */