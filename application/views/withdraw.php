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
            <h4><b>เบิกค่าแรง</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Withdraw_Controller/show_withdraw">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/Withdraw_Controller/save_withdraw">
                    <fieldset> 
                        <?php foreach ($employee as $row) {?>
                            <div class="form-group">
                               
                                    <label  class="col-sm-2 text-right">รหัสพนักงาน :</label>
                                    <div class="col-sm-1">
                                         <input readonly  class="form-control selectValue" type="text" id="employee_id" name="employee_id" value="<?php echo $row['employee_id'];?>">
                                    </div>
                                    <label  class="col-sm-2 text-right">ชื่อ :</label>
                                    <label  class="col-sm-2 text-left"><?php echo $row['employee_gen'].$row['employee_name'].$row['employee_lastname'];?></label>
                                    <label  class="col-sm-2 text-right">ค่าแรง :</label>
                                    <div class="col-sm-2 ">
                                         <input readonly  class="form-control selectValue" type="text" id="employee_amont" name="employee_amont" value="<?php echo $row['employee_amont'];?>">
                                    </div>

                                    
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-2 text-right">วันที่เบิกได้ :</label>
                                    <label  class="col-sm-1  text-left"><font color="red"><?php echo $row['balance_day'];?></font>&nbsp;&nbsp;วัน</label>
                                    <label  class="col-sm-2 text-right">เงินที่สามารถเบิกได้ :</label>
                                    <label  class="col-sm-1 "><font color="red"><?php echo $row['balance_amount'];?></font>&nbsp;&nbsp;บาท</label>
                                    <?php if($row['balance_day'] == 0){?>
                                        <label  class="col-sm-6 "><font color="red">**ไม่สามารถเบิกเงินได้ เนื่องจากไม่มีจำนวนแรงที่ทำงาน</font></label>
                                        <?php }?>

                            </div>
                          <?php  $count = $row['balance_day']; ?>

                        <?php }?>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">เบิกเงินวันที่</label>
                            <div class="col-sm-10">
                            <input   class="form-control selectValue" type="date" id="withdraw_date" name="withdraw_date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">เบิกค่าแรงจำนวนวัน</label>
                            <div class="col-sm-10">
                                <?php if($count == 0){?>
                                        <select class="form-control" required autofocus  readonly>
                                        </select>
                                <?php }else{?>
                                    <select class="form-control" required autofocus id="withdraw_qty_day" name="withdraw_qty_day">
                                       <?php for ($i=1; $i <= $count; $i++) { ?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                       <?php }?>
                                    </select>
                                <?php }?>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group text-right">
                            <div class="col-sm-12">
                            <?php if($count == 0){?>
                                <button  disabled class="btn btn-info btn-lg">บันทึกข้อมูล</button>
                                <button  disabled class="btn btn-danger btn-lg">ยกเลิก</button>
                            <?php }else{?>
                                <button id="" type="submit"class="btn btn-info btn-lg">บันทึกข้อมูล</button>
                                <button  type="reset" class="btn btn-danger btn-lg">ยกเลิก</button>
                            <?php }?>
                                
                            </div>
                        </div>
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