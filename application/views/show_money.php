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
        <center><img src="<?php echo base_url();?>img/ikunglogo-s.jpg"></center>
            <h4><b>สรุปข้อมูลการใช้จ่ายเงิน</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Welcome/back">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/Withdraw_Controller/save_withdraw">
                    <fieldset> 
                        
                            <div class="form-group">
                                    <label  class="col-sm-5 text-right">จำนวนเงินที่รับมาทั้งหมด</label>
                                    <label  class="col-sm-2 text-center"><font color="blue"><?php echo $receipt_money;?></font></label>
                                    <label  class="col-sm-5 text-left">บาท</label>
                            </div>
                            <hr width="100%">
                            <div class="form-group">
                                    <label  class="col-sm-5 text-right">จำนวนเงินที่จ่ายลูกน้องทั้งหมด</label>
                                    <label  class="col-sm-2 text-center"><?php echo $withdraw_money;?></label>
                                    <label  class="col-sm-5 text-left">บาท</label>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-5 text-right">จำนวนเงินที่จ่ายค่าวัสดุทั้งหมด</label>
                                    <label  class="col-sm-2 text-center"><?php echo $equip_money;?></label>
                                    <label  class="col-sm-5 text-left">บาท</label>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-5 text-right">รวมค่าใช้จ่ายทั้งหมด</label>
                                    <label  class="col-sm-2 text-center"><?php echo $sum_payment;?></label>
                                    <label  class="col-sm-5 text-left">บาท</label>
                            </div>
                            <hr width="100%">
                            <div class="form-group">
                                    <label  class="col-sm-5 text-right">**** สรุป เงินที่ยังเหลือทั้งหมด</label>
                                    <label  class="col-sm-2 text-center"><font color="red"><?php echo $money_balance;?></font></label>
                                    <label  class="col-sm-5 text-left">บาท</label>
                            </div>
                            <hr width="100%">
                            
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