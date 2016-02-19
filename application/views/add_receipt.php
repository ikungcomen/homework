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
            <h4><b>เพิ่มข้อมูลการเบิกเงินค่ารับเหมา</b>

            </h4>
            <a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Receipt_Controller/show_receiptDetail">ย้อนกลับ</a>
            <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <form method="post" action="<?php echo base_url(); ?>index.php/Receipt_Controller/save_receipt">
                    <fieldset> 
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">งวดที่ :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="number"    id="receipt_no" name="receipt_no"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">ชื่อผู้เบิกเงิน :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="receipt_name" name="receipt_name"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">ชื่อคนจ่ายเงิน :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="payment_name" name="payment_name"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">รายละเอียด :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="text" id="receipt_detail" name="receipt_detail"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">จำนวนเงินที่เบิก :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="number" id="receipt_amount" name="receipt_amount"    required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">วันที่เบิก :</label>
                            <div class="col-sm-8">
                                <input class="form-control selectValue" type="date" id="receipt_date" name="receipt_date"    required >
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