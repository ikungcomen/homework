<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>บริหารงานก่อสร้าง</title>
	

	<link  href="<?php echo base_url();?>css/mynavbar.css" rel="stylesheet">

    <link  href="<?php echo base_url();?>css/form_login.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/myjquery.min.js"></script>
    <script src="<?php echo base_url();?>js/mybootstrap.min.js"></script>
	<script type="text/javascript">
            function noBack(){
                window.history.forward()
            }
             
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }
    </script>
    
</head>
<body >
    <br><br><br>
	<div class="container">
        <center>
            <div class="row">
                <div class="col-md-offset-5 col-md-3">
                    <form method="post" action="<?php echo base_url(); ?>index.php/Welcome/login">
                        <div class="form-login">
                            <h4>ยินดีต้อนรับ</h4>
                            <input type="text" id="username"  name="username" class="form-control input-sm chat-input" placeholder="username" />
                            </br>
                            <input type="password"    id="password" name="password"  class="form-control input-sm chat-input" placeholder="password" />
                            </br>
                            <div class="wrapper">
                                <span class="group-btn">     
                                    <button type="submit"  id="btn_login" value="Login" name="btn_login" class="btn btn-primary btn-md">เข้าสู่ระบบ</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
</body>
</html>