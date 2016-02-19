<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>บริหารงานก่อสร้าง</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/mycsslogin.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main_menu.css">
    <link  href="<?php echo base_url();?>css/mynavbar.css" rel="stylesheet">
    <link  href="<?php echo base_url();?>css/my_button.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/myjquery.min.js"></script>
    <script src="<?php echo base_url();?>js/mybootstrap.min.js"></script>
    <script type="text/javascript">
            function noBack(){
                window.history.forward()
            }
             
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }
    </script>
</head>
<body >
    <br><br><br>
	   <div class="container" style="background-color: #585858;">
            <div class="row">
                <div class="col-lg-12">
                    <center><br>
                    <p><img src="<?php echo base_url();?>img/ikunglogo-s.jpg" ><br></p>
                        
                       <p>
                          <marquee  behavior="alternate"><font color="#FFFFFF">สวัสดี&nbsp;<?php echo $this->session->userdata('name')." ".$this->session->userdata('lastname');?>&nbsp;สถานะ&nbsp;<?php echo $this->session->userdata('role');?></font></marquee>
                        <hr>
                      </p>
                      <p>
                        <a href="<?php echo base_url(); ?>index.php/Receipt_Controller/show_receiptDetail" class="btn btn-sq-lg btn-primary">
                            <i class="fa fa-user fa-5x"></i><br/>
                            เบิกเงินรับเหมา <br>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/AddEmployee_controller/get_employee"  class="btn btn-sq-lg btn-success">
                          <i class="fa fa-user fa-5x"></i><br/>
                          ข้อมูลลูกจ้าง <br>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/SaveWork_Controller/show_employee" class="btn btn-sq-lg btn-info">
                          <i class="fa fa-user fa-5x"></i><br/>
                          บันทึกการทำงาน <br>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/Withdraw_Controller/show_withdraw" class="btn btn-sq-lg btn-warning">
                          <i class="fa fa-user fa-5x"></i><br/>
                          บันทึกการเบิกค่าแรง <br>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/DetailWork_Controller/show_detailwork" class="btn btn-sq-lg btn-danger">
                          <i class="fa fa-user fa-5x"></i><br/>
                          ข้อมูลสรุปการทำงาน <br>
                        </a>
                      </p>
                      <p>
                        <a href="<?php echo base_url(); ?>index.php/Equip_Controller/show_equip" class="btn btn-sq-lg btn-danger">
                            <i class="fa fa-user fa-5x"></i><br/>
                            บันทึกการสั่งซื้อวัสดุ <br>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/Money_Controller/show_money" class="btn btn-sq-lg btn-warning">
                          <i class="fa fa-user fa-5x"></i><br/>
                          สรุปการใช้จ่ายเงิน <br>
                        </a>
                        <a href="#" class="btn btn-sq-lg btn-info">
                          <i class="fa fa-user fa-5x"></i><br/>
                          Demo Info <br>
                        </a>
                        <a href="#" class="btn btn-sq-lg btn-success">
                          <i class="fa fa-user fa-5x"></i><br/>
                          Demo Warning <br>
                        </a>
                        <a href="#" class="btn btn-sq-lg btn-primary">
                          <i class="fa fa-user fa-5x"></i><br/>
                          Demo Danger <br>
                        </a>
                      </p>
                      <p><div  align="right"><a  href="<?php echo base_url(); ?>index.php/Welcome/logout"><font color="#FFFFFF" size="3px">ออกจากระบบ</font></a></div></p>
                      <hr>
                    </center>
                </div>
            </div>
        </div><!-- /container -->
</body>
</html>