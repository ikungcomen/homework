
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
             <h4><b>ข้อมูลการเบิกเงินค่ารับเหมา</b>
             </h4><a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Welcome/back">ย้อนกลับ</a>
             <a class="btn btn-primary " href="<?php echo base_url(); ?>index.php/Receipt_Controller/add_equip">เพิ่มข้อมูลการเบิกเงินค่ารับเหมา</a>
             <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <table class="table table-hover">
                    <thead>
                      <tr style="background-color: #585858;">
                          <th class="text-center"><font color="#FFFFFF">ลำดับ</font></th>
                          <th class="text-center"><font color="#FFFFFF">งวดที่</font></th>
                          <th ><font color="#FFFFFF">ชื่อผู้เบิกเงิน</font></th>
                          <th ><font color="#FFFFFF">ชื่อคนจ่ายเงิน</font></th>
                          <th ><font color="#FFFFFF">รายละเอียด</font></th>
                          <th class="text-center"><font color="#FFFFFF">จำนวนเงินที่เบิก</font></th>
                          <th class="text-center"><font color="#FFFFFF">วันที่เบิก</font></th>
                          <th class="text-center"><font color="#FFFFFF">ปรับปรุง</font></th>
                          
                          
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $count = 0;
                        $sum_amount = 0;
                        foreach ($result as $row) { 
                          $count++;
                          $sum_amount = $sum_amount+$row['receipt_money'];

                          $date = explode("/",$row['receipt_date']);
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
                       <td class="text-center"><?php echo $row['receipt_no'];?></td>
                       <td><?php echo $row['receipt_name'];?></td>
                       <td><?php echo $row['payment_name'];?></td>
                       <td><?php echo $row['receipt_detail'];?></td>
                       <td class="text-center"><?php echo $row['receipt_money'];?></td>
                       <td class="text-center"><?php echo $receiptDate;?></td>
                       <td class="text-center"><a class=" btn btn-danger " id="" href="<?php echo base_url(); ?>index.php/Receipt_Controller/delete_receipt/<?php echo $row['id']; ?>" >ลบ</a></td>
                      </tr>
                    <?php }?>
                    <tr>
                    <td colspan="7" class="text-right"><font style="font-style: blod;font-size:20px;">รวมเป็นเงินทั้งสิ้น</font></td>
                    <td ><font color="red" style="font-style: blod;font-size:20px;"><?php echo $sum_amount;?></font>&nbsp;&nbsp;<font style="font-style: blod;font-size:20px;">บาท</font></td>
                    
                    </tr>
                      
                    </tbody>

                  </table>
                  <hr style=" border-style: inset;"  align="right" width="40%" >
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>