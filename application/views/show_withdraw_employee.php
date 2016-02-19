
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
             <h4><b>ข้อมูลลูกจ้าง</b>
             </h4><a class="btn btn-success " href="<?php echo base_url(); ?>index.php/AddEmployee_controller/get_employee">ย้อนกลับ</a>
             
             <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <table class="table table-hover">
                    <thead>
                      <tr style="background-color: #585858;">
                          <th class="text-center"><font color="#FFFFFF">ลำดับ</font></th>
                          <th class="text-center"><font color="#FFFFFF">รหัสพนักงาน</font></th>
                          <th class="text-center"><font color="#FFFFFF">ชื่อ - นามสกุล</font></th>
                          <th class="text-center"><font color="#FFFFFF">จำนวนวันที่เบิกเงิน</font></th>
                          <th class="text-center"><font color="#FFFFFF">จำนวนเงินที่เบิก</font></th>
                          <th class="text-center"><font color="#FFFFFF">เบิกเงินวันที่</font></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $count = 0;
                        foreach ($withdraw as $row ){
                          $count++;
                          $date = explode("/",$row['withdraw_date']);
                          $mont = "";
                          switch ($date[0]) {
                              case 1:
                                $mont = "มกราคม";
                                break;
                              case 2:
                                $mont = "กุมภาพันธ์";
                                break;
                              case 3:
                                $mont = "มีนาคม";
                                break;
                              case 4:
                                $mont = "เมษายน";
                                break;
                              case 5:
                                $mont = "พฤษภาคม";
                                break;
                              case 6:
                                $mont = "มิถุนายน";
                                break;
                              case 7:
                                $mont = "กรกฎาคม";
                                break;
                              case 8:
                                $mont = "สิงหาคม";
                                break;
                              case 9:
                                $mont = "กันยายน";
                                break;
                              case 10:
                                $mont = "ตุลาคม";
                                break;
                              case 11:
                                $mont = "พฤศจิกายน";
                                break;
                              case 12:
                                $mont = "ธันวาคม";
                                break;
                              
                            
                          }
                          $receiptDate = $date[1]." ".$mont." ".$date[2];
                        ?>
                      <tr>
                        <td class="text-center"><?php echo $count;?></td>
                        <td class="text-center"><?php echo $row['employee_id']; ?></td>
                        <td class="text-center"><?php echo $row['employee_name']." ".$row['employee_lastname'];?></td>
                        <td class="text-center"><?php echo $row['withdraw_day']; ?></td>
                        <td class="text-center"><?php echo $row['withdraw_amount']; ?></td>
                        <td class="text-center"><?php echo $receiptDate; ?></td>
                        
                    <?php }?>
                      </tr>
                      
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>