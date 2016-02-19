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
            <h4><b>เพิ่มข้อมูลการสั่งซื้อวัสดุ</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Equip_Controller/show_equip">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/Equip_Controller/add_equip">
                    <fieldset> 
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">ชื่อวัสดุ :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="equip_name" name="equip_name"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">สั่งซื้อวันที่ :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="date" id="equip_date" name="equip_date"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">ร้านวัสดุชื่อ :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="equip_store" name="equip_store"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">เบอร์ติดต่อร้านวัสดุ :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="store_phone" name="store_phone"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">จำนวนสั่ง :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="equip_qty" name="equip_qty"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">หน่วย :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="equip_uom" name="equip_uom"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">ราคาต่อหน่วย :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="price_uom" name="price_uom"    required >
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