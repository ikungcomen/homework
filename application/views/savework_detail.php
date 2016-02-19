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
            <h4><b>ลงค่าแรง</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/SaveWork_Controller/show_employee">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/SaveWork_Controller/save">
                    <fieldset> 

                        <div class="form-group">
                            <?php foreach ($employee as $row) {?>
                                <label  class="col-sm-2 control-label">รหัสพนักงาน :</label>
                                <div class="col-sm-1">
                                     <input readonly  class="form-control selectValue" type="text" id="employee_id" name="employee_id" value="<?php echo $row['employee_id'];?>">
                                </div>
                                <label  class="col-sm-1 control-label">ชื่อ :</label>
                                <div class="col-sm-1">
                                     <label  class="control-label">
                                        <input readonly  class="form-control selectValue" type="text" id="employee_gen" name="employee_gen" value="<?php echo $row['employee_gen']; ?>">
                                        
                                     </label>
                                </div>
                                <div class="col-sm-2">
                                     <label  class="control-label">
                                       <input readonly  class="form-control selectValue" type="text" id="employee_name" name="employee_name" value="<?php echo $row['employee_name']; ?>">
                                     </label>
                                </div>
                                
                                <div class="col-sm-2">
                                     <label  class="control-label">
                                        <input readonly  class="form-control selectValue" type="text" id="employee_lastname" name="employee_lastname" value="<?php echo $row['employee_lastname']; ?>">
                                     </label>
                                </div>
                                
                            
                        </div>
                        <div class="form-group">
                                <label  class="col-sm-2 control-label">แรงทั้งหมด :</label>
                                <div class="col-sm-3">
                                    
                                </div>
                                <label  class="col-sm-3 control-label">ค่าแรง/วัน</label>
                                <div class="col-sm-2">
                                    <input readonly  class="form-control selectValue" type="text" id="employee_amount" name="employee_amount" value="<?php echo $row['employee_amont'];?>">
                                </div>
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">ทำงานวันที่ :</label>
                            <div class="col-sm-10">
                                <input   class="form-control selectValue" type="date" id="working_date" name="working_date"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">จำนวนแรง :</label>
                            <div class="col-sm-10">
                                <select class="form-control" required autofocus id="work_qty" name="work_qty">
                                    <option value="1">1</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group text-right">
                            <div class="col-sm-12">
                                <button id="" type="submit"class="btn btn-info btn-lg">บันทึกข้อมูล</button>
                                <button  type="reset" class="btn btn-danger btn-lg">ยกเลิก</button>
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