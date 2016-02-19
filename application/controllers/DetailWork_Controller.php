<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetailWork_Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->Model('DBHelper');
       
    }
    public function get_employee(){
		$data['employee'] = $this->DBHelper->get_employee();
        $this->load->view('show_employee', $data);
        
	}
	public function show_detailwork()
	{
        $data['employee'] = $this->DBHelper->get_employee_working();
        $this->load->view('detail_work', $data);
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */