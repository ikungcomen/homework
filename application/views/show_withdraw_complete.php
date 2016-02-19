<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>บริหารงานก่อสร้าง</title>
	
	<link  href="<?php echo base_url();?>css/mynavbar.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/myjquery.min.js"></script>
    <script src="<?php echo base_url();?>js/mybootstrap.min.js"></script>
	<style type="text/css">

	</style>
    
</head>
<body >
    <br><br><br>
	<div class="container">
        <div class="row">
            <div class="col-md-12 ">
    <div class="row">
        <div class="col-sm-12">
            <h4><b>สรุปการเบิกค่าแรง</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Withdraw_Controller/show_withdraw">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/Withdraw_Controller/save_withdraw">
                    <fieldset> 
                        <?php  foreach ($result as $row) {?>
                            <div class="form-group">
                                <label  class="col-sm-2 text-right">รหัสพนักงาน :</label>
                                <label  class="col-sm-10 text-left"><?php echo $row['employee_id'];?></label>
                               
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 text-right">ชื่อ :</label>
                                <label  class="col-sm-2 text-left"><?php echo $row['employee_gen'].$row['employee_name'].$row['employee_lastname'];?></label>
                                <label  class="col-sm-2 text-right">เบิกเงิน</label>
                                <label  class="col-sm-1 text-left"><?php echo $row['withdraw_amount'];?></label>
                                <label  class="col-sm-2 text-right">เบิกเงินวันที่</label>
                                <label  class="col-sm-3 text-left"><?php echo $row['withdraw_date'];?></label>
                            </div>
                        <?php }?>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
        </div>
    </div><!-- /container -->
</body>
</html>