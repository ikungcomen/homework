<?php 


class DBHelper extends CI_Model {

    public function login($username, $password){
        $sql = "select * from tb_user where user_username = '" . $username . "' and user_password = '" . $password. "'";
        $query = $this->db->query($sql);
        return $query;
    }

	public function add_employee($gen,$name,$lastName,$amount){
		$this->db->set('employee_gen',$gen);
        $this->db->set('employee_name',$name);
        $this->db->set('employee_lastname',$lastName);
        $this->db->set('employee_amont',$amount);
		$this->db->insert('add_employee');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
	}

	public function get_employee(){
		$sql = "select * from add_employee";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
	}
	public function delete_employee($id = ''){
        $this->db->where('employee_id', $id);
        $this->db->delete('add_employee'); 
        if ($this->db->affected_rows() > 0){
            return 1;
        }else{
            return 0;
        }
    }

    public function get_employee_working(){
		$sql = "select te.employee_id       as employee_id"
		     ."       ,te.employee_amont    as employee_amont "
		     ."       ,te.employee_gen      as employee_gen"
		     ."       ,te.employee_name     as employee_name  "
		     ."       ,te.employee_lastname as employee_lastname "


		     ."       ,case when twb.working_day     is null then 0 else  twb.working_day     end as working_day"
             ."       ,case when twb.working_amount  is null then 0 else  twb.working_amount  end as working_amont "
             ."       ,case when twb.withdraw_day    is null then 0 else  twb.withdraw_day    end as withdraw_day"
             ."       ,case when twb.withdraw_amount is null then 0 else  twb.withdraw_amount end as withdraw_amount"
             ."       ,case when twb.balance_day     is null then 0 else  twb.balance_day     end as  balance_day"
             ."       ,case when twb.balance_amount  is null then 0 else  twb.balance_amount  end as balance_amount"
             ." from add_employee te "
             ." left join tb_working_balance twb on te.employee_id = twb.employee_id";
             


        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
	}
    public function get_sumWork_tb_working($employee_id){
        $sql = "select employee_id ,sum(all_workingday) as all_workingday, sum(all_mont) as all_mont from tb_working  where employee_id = '".$employee_id."'group by employee_id";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
	public function get_employee_byId($id){
		$sql = "select * from add_employee where  employee_id = ".$id;
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
	}

    public function show_withdraw(){
        $sql = "select * from add_employee ";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }

    public function get_equip(){
        $sql = "select  equip_name"
            ." ,equip_store "
            ." ,store_phone "
            ." ,equip_qty"
            ." ,equip_uom"
            ." ,price_uom"
            ." ,sum_amount"
            ." ,equip_id"
            ." ,DATE_FORMAT(date_add(equip_date  , interval +543 year),'%m/%d/%Y') as equip_date"
            ." from TB_EQUIP ";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function add_equip($equip_name, $equip_date, $equip_store, $store_phone, $equip_qty, $equip_uom, $price_uom, $sum_amount){
        $this->db->set('equip_name',$equip_name);
        $this->db->set('equip_date',$equip_date);
        $this->db->set('equip_store',$equip_store);
        $this->db->set('store_phone',$store_phone);
        $this->db->set('equip_qty',$equip_qty);
        $this->db->set('equip_uom',$equip_uom);
        $this->db->set('price_uom',$price_uom);
        $this->db->set('sum_amount',$sum_amount);
        $this->db->insert('TB_EQUIP');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function delete_equip($id){
        $this->db->where('equip_id', $id);
        $this->db->delete('TB_EQUIP'); 
        if ($this->db->affected_rows() > 0){
            return 1;
        }else{
            return 0;
        }
    }

    public function save_work($employee_id, $employee_gen, $employee_name, $employee_lastname,$work_qty,$all_amount,$working_date){
        $this->db->set('employee_id',$employee_id);
        $this->db->set('employee_name',$employee_gen." ".$employee_name);
        $this->db->set('employee_lastname   ',$employee_lastname);
        $this->db->set('all_workingday',$work_qty);
        $this->db->set('all_mont',$all_amount);
        $this->db->set('working_date',$working_date);
        $this->db->insert('TB_WORKING');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function select_check_tb_workingbalance($employee_id){
        $sql = "select  *  from tb_working_balance where employee_id = ".$employee_id;
        $result = $this->db->query($sql);
        if($result->num_rows() > 0){
            return 1;
        }else{
            return 0;
        }
        

    }


    public function update_workingbalance($employee_id, $working_amount,$working_day , $balance_day, $balance_amount, $withdraw_amount, $withdraw_day){
        $this->db->set('working_amount',$working_amount);
        $this->db->set('working_day',$working_day);

        $this->db->set('balance_day   ',$balance_day);
        $this->db->set('balance_amount   ',$balance_amount);
        $this->db->set('withdraw_day   ',$withdraw_day);
        $this->db->set('withdraw_amount   ',$withdraw_amount);

        $this->db->where('employee_id', $employee_id);
        $this->db->update('tb_working_balance'); 
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insert_workingbalance($employee_id, $working_amount,$working_day, $balance_day, $balance_amount, $withdraw_amount, $withdraw_day ){
        $this->db->set('employee_id',$employee_id);
        $this->db->set('working_amount',$working_amount);
        $this->db->set('working_day   ',$working_day);
        $this->db->set('balance_day   ',$balance_day);
        $this->db->set('balance_amount   ',$balance_amount);
        $this->db->set('withdraw_day   ',$withdraw_day);
        $this->db->set('withdraw_amount   ',$withdraw_amount);
        $this->db->insert('tb_working_balance');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function get_sumWork_tb_withdraw($employee_id){
        $sql = "select * from tb_withdraw where employee_id = ".$employee_id;
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }

    public function getCount_withdraw($employee_id){
        $sql =   " select em.employee_id  as employee_id "
                ."      ,case when twb.balance_day is null then 0 else twb.balance_day end as balance_day"
                ."      ,case when twb.balance_amount is null then 0 else twb.balance_amount end as balance_amount "
                ."      ,em.employee_gen as employee_gen"
                ."      ,em.employee_name as employee_name"
                ."      ,em.employee_lastname as employee_lastname "
                ."      ,em.employee_amont as employee_amont "
                ." from add_employee em  "
                ." left join tb_working_balance twb on twb.employee_id = em.employee_id where em.employee_id = ".$employee_id;
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }

    public function save_withdraw($employee_id, $withdraw_day, $withdraw_amount, $withdraw_date){
        $this->db->set('employee_id',$employee_id);
        $this->db->set('withdraw_day',$withdraw_day);
        $this->db->set('withdraw_amount ',$withdraw_amount);
        $this->db->set('withdraw_date   ',$withdraw_date);
        $this->db->insert('tb_withdraw');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function get_sum_withdraw($employee_id){
        $sql = "select employee_id as employee_id ,sum(withdraw_day) as withdraw_day,sum(withdraw_amount) as withdraw_amount    from tb_withdraw where employee_id = ".$employee_id." group by employee_id ";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function get_tb_workingbalance($employee_id){
        $sql = "select * from tb_working_balance where employee_id = ".$employee_id;
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function update_workingbalance_withdraw($employee_id, $balance_day, $balance_amount, $withdraw_day, $withdraw_amount){
        $this->db->set('balance_day   ',$balance_day);
        $this->db->set('balance_amount   ',$balance_amount);
        $this->db->set('withdraw_day   ',$withdraw_day);
        $this->db->set('withdraw_amount   ',$withdraw_amount);
        $this->db->where('employee_id', $employee_id);
        $this->db->update('tb_working_balance'); 
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function get_withdraw($employee_id){
        $sql = "select em.employee_id"
              ."      ,em.employee_gen"
              ."      ,em.employee_name"
              ."      ,em.employee_lastname"
              ."      ,tw.withdraw_day"
              ."      ,tw.withdraw_amount"
              ."      ,tw.withdraw_date"
              ."      ,tw.withdraw_id"
              ." from add_employee em "
              ." left join tb_withdraw tw on tw.employee_id = em.employee_id "
              ." where em.employee_id = ".$employee_id
              ." order by tw.withdraw_id desc  limit 1";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function get_receiptmoney(){
        $sql = "select receipt_no,receipt_detail,receipt_money"
        
        ." ,DATE_FORMAT(date_add(receipt_date , interval +543 year),'%m/%d/%Y') as receipt_date"
        ." ,receipt_name "
        ." ,payment_name "
        ." ,id "
        ."from tb_receiptmoney";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function save_receipt($receipt_no, $receipt_name, $payment_name, $receipt_detail, $receipt_amount, $receipt_date){
        $this->db->set('receipt_no',$receipt_no);
        $this->db->set('receipt_detail',$receipt_detail);
        $this->db->set('receipt_money',$receipt_amount);
        $this->db->set('receipt_date ',$receipt_date);
        $this->db->set('receipt_name',$receipt_name);
        $this->db->set('payment_name',$payment_name);
        $this->db->insert('tb_receiptmoney');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function delete_receipt($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_receiptmoney'); 
        if ($this->db->affected_rows() > 0){
            return 1;
        }else{
            return 0;
        }
    }

    public function get_working_employee($id){
        $sql = "select  "
        ." employee_id"
        ." ,employee_name"
        ." ,employee_lastname"
        ." ,all_workingday"
        ." ,all_mont"
        ." ,DATE_FORMAT(date_add(working_date  , interval +543 year),'%m/%d/%Y') as working_date"
        ." from tb_working where employee_id = ".$id." order by working_date desc";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function get_withdraw_employee($id){
        $sql = "select em.employee_gen     as employee_gen"
                ." ,em.employee_name       as employee_name"
                ." ,em.employee_lastname   as employee_lastname "
                ." ,tw.employee_id         as employee_id"
                ." ,tw.withdraw_day        as withdraw_day"
                ." ,tw.withdraw_amount     as withdraw_amount"
                ." ,DATE_FORMAT(date_add(tw. withdraw_date  , interval +543 year),'%m/%d/%Y')     as withdraw_date"
                ." from  add_employee em "
                ." inner join tb_withdraw tw on tw.employee_id = em.employee_id"
                ." where em.employee_id = ".$id." order by tw. withdraw_date desc";

        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }

    public function get_money_receipt(){
        $sql = "select sum(receipt_money) as receipt_money from tb_receiptmoney ";
        $result = $this->db->query($sql);
        return $result;
    }
    public function get_money_withdraw(){
        $sql = "select sum(withdraw_amount) as withdraw_amount from tb_withdraw";
        $result = $this->db->query($sql);
        return $result;
    }
    public function get_money_equip(){
        $sql = "select sum(sum_amount) as sum_amount from tb_equip ";
        $result = $this->db->query($sql);
        return $result;
    }

}

?>