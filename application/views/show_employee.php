
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
             <h4><b>ข้อมูลลูกจ้าง</b>
             </h4><a class="btn btn-success " href="<?php echo base_url(); ?>index.php/Welcome/back">ย้อนกลับ</a>
             <a class="btn btn-primary " href="<?php echo base_url(); ?>index.php/AddEmployee_controller/show_addemployee">เพิ่มลูกจ้าง</a>
             <hr width="100%">
            <br><br>
            <div class="panel-body form-horizontal payment-form">
                <table class="table table-hover">
                    <thead>
                      <tr style="background-color: #585858;">
                          <th class="text-center"><font color="#FFFFFF">ลำดับ</font></th>
                          <th class="text-center"><font color="#FFFFFF">รหัสพนักงาน</font></th>
                          <th class="text-center"><font color="#FFFFFF">ชื่อ - นามสกุล</font></th>
                          <th class="text-center"><font color="#FFFFFF">ค่าจ้างต่อวัน</font></th>
                          <th class="text-center"><font color="#FFFFFF">รายละเอียด</font></th>
                          <th class="text-center"><font color="#FFFFFF">ปรับปรุง</font></th>
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
                        <td class="text-center"><?php echo $row['employee_id']; ?></td>
                        <td class="text-center"><?php echo $row['employee_gen']." ".$row['employee_name']."   ".$row['employee_lastname'];?></td>
                        <td class="text-center"><?php echo $row['employee_amont']; ?></td>
                        <td class="text-center"><a class=" btn btn-warning " id="" href="<?php echo base_url(); ?>index.php/AddEmployee_controller/showworking/<?php echo $row['employee_id']; ?>" >การทำงาน</a>&nbsp;<a class="btn btn-success " href="<?php echo base_url(); ?>index.php/AddEmployee_controller/showwithdraw/<?php echo $row['employee_id']; ?>">การเบิกเงิน</a></td>
                        <td class="text-center"><a class=" btn btn-danger " id="" href="<?php echo base_url(); ?>index.php/AddEmployee_controller/delete_employee/<?php echo $row['employee_id']; ?>" >ลบ</a>&nbsp;<a class="btn btn-info ">แก้ไข</a></td>
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