
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>รายละเอียดการทำงาน</title>
  
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
             <h4><b>รายละเอียดการทำงาน</b>
             </h4><a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Welcome/back">ย้อนกลับ</a>
             
             <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <table class="table table-hover">
                    <thead>
                      <tr style="background-color: #585858;">
                          <th class="text-center"><font color="#FFFFFF">ลำดับ</font></th>
                          <th ><font color="#FFFFFF">ชื่อ - นามสกุล</font></th>
                          <th class="text-center"><font color="#FFFFFF">ค่าแรงต่อวัน</font></th>
                          <th class="text-center"><font color="#FFFFFF">ทำงานทั้งหมด</font></th>
                          <th class="text-center"><font color="#FFFFFF">ค่าแรงที่ได้ทั้งหมด</font></th>
                          <th class="text-center"><font color="#FFFFFF">เบิกไปแล้ว</font></th>
                          <th class="text-center"><font color="#FFFFFF">เบิกเงินไปแล้ว</font></th>
                          <th class="text-center"><font color="#FFFFFF">วันที่ยังเบิกได้</font></th>
                          <th class="text-center"><font color="#FFFFFF">เงินที่ยังเบิกได้</font></th>
                          
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $count = 0;
                        foreach ($employee as $row ){
                            $count++;
                        ?>
                      <tr>
                        <td class="text-center"><?php echo $count;?></td>
                        <td ><?php echo $row['employee_gen']." ".$row['employee_name']."   ".$row['employee_lastname'];?></td>
                        <td class="text-center"><?php echo $row['employee_amont']; ?></td>
                        <td class="text-center"><font color="blue"><?php echo $row['working_day']."     วัน"; ?></font></td>
                        <td class="text-center"><font color="blue"><?php echo $row['working_amont']."     บาท"; ?></font></td>
                        <td class="text-center"><font color="red"><?php echo $row['withdraw_day']."     วัน"; ?></font></td>
                        <td class="text-center"><font color="red"><?php echo $row['withdraw_amount']."     บาท"; ?></font></td>
                        <td class="text-center"><font color="green"><?php echo $row['balance_day']."     วัน"; ?></font></td>
                        <td class="text-center"><font color="green"><?php echo $row['balance_amount']."     บาท"; ?></font></td>
                        
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