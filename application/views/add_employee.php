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
            <h4><b>เพิ่มลูกจ้าง</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/AddEmployee_controller/get_employee">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/AddEmployee_controller/add_employee">
                    <fieldset> 


                        <div class="form-group">
                            <label  class="col-sm-2 control-label">คำนำหน้า :</label>
                            <div class="col-sm-10">
                                <select class="form-control" required autofocus id="gen" name="gen">
                                    <option></option>
                                    <option value="นาย">นาย</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <option value="นาง">นาง</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">ชื่อ :</label>
                            <div class="col-sm-10">
                                <input class="form-control selectValue" type="text" id="name" name="name"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">นามสกุล :</label>
                            <div class="col-sm-10">
                                <input class="form-control selectValue" type="text" id="lastName" name="lastName"    required >
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-2 control-label">ค่าแรงต่อวัน :</label>
                            <div class="col-sm-10">
                                <select class="form-control" required id="amount" name="amount">
                                    <option></option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
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