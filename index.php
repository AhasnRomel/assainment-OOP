<?php 
	include_once "vendor/autoload.php";
	use App\Suport\Auth;
	use App\Controlar\Student;
    use App\Controlar\Teacher;
    use App\Controlar\Staff;

    $auth = new Auth;
	$student = new Student;
    $teacher = new Teacher;
    $stuff = new Staff;
	
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>School Management System</title>
	
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/sstyle.css">
	 <link rel="stylesheet" href="assets/fonts/css/all.css">
 </head>
 <body>

 	
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-4">
	<?php 
 		if (isset($_POST['submit_1'])) {
 			$name = $_POST['name'];
 			$last_name = $_POST['last_name'];
 			$email = $_POST['email'];
 			$cell = $_POST['cell'];
 			$uname = $_POST['uname'];

 			if (empty($name) || empty($last_name) || empty($email) || empty($cell) || empty($uname)) {
 				$msg = $student -> msg('All Fields Are Required');
 			}elseif ($email) {
               $msg = $auth ->  emailValid($email);
            }else{
 				$msg = $student -> createStudentInfo($name, $last_name, $email, $cell, $uname);
 			}
 		}



 	 ?>
			
 	
 	
				
	<div class="card">
		<div class="modal-header"> <h3 class="text-primary">Student Profile Upload</h3></div>
             <a href="view.php"><input class="btn-primary" type="submit" value="View Student Data"></a>
        <div class="card-body col-form-label-sm">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php if (isset($msg)){echo $msg;}?>
                <div class="form-group">
                    <label class="" for="">First Name</label>
                    <input name="name" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input name="last_name" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input name="email" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Cell Number</label>
                    <input name="cell" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <input name="submit_1" class="btn-primary" type="submit" value="Add New Student">
                </div>            
            </form>
   		</div>
	</div>
</div>
	<div class="col-4">
	
	<?php 
 		if (isset($_POST['submit_2'])) {
 			$name = $_POST['name'];
 			$email = $_POST['email'];
 			$last_name = $_POST['last_name'];
 			$cell = $_POST['cell'];
 			$uname = $_POST['uname'];

 			if (empty($name) || empty($email) || empty($last_name) || empty($cell) || empty($uname)) {
 				$msg_2 = $teacher -> msg('All Fields Are Required');
 			}else{
                $msg_2 = $teacher -> createTeacherInfo($name, $last_name, $email, $cell, $uname);
            }
 		}



 	 ?>
			
 	
				
	<div class="card">
		<div class="modal-header"> <h3 class="text-primary">Teacher Profile Upload</h3></div>
             <a href="view.php"><input class="btn-primary" type="submit" value="View Teacher Data"></a>
        <div class="card-body col-form-label-sm">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php if (isset($msg_2)){echo $msg_2;}?>
                <div class="form-group">
                    <label class="" for="">First Name</label>
                    <input name="name" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input name="last_name" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input name="email" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Cell Number</label>
                    <input name="cell" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <input name="submit_2" class="btn-primary" type="submit" value="Add New Teacher">
                </div>            
            </form>
   		</div>
	</div>
	</div>

	<div class="col-4">
	
	<?php 
 		if (isset($_POST['submit_3'])) {
 			$name = $_POST['name'];
 			$email = $_POST['email'];
 			$last_name = $_POST['last_name'];
 			$cell = $_POST['cell'];
 			$uname = $_POST['uname'];

 			if (empty($name) || empty($email) || empty($last_name) || empty($cell) || empty($uname)) {
 				$msg_3 = $stuff -> msg('All Fields Are Required');
 			}else{
                $msg_3 = $stuff -> createStuffInfo($name, $last_name, $email, $cell, $uname);
            }
 		}



 	 ?>
			
 	
				
	<div class="card">
		<div class="modal-header"> <h3 class="text-primary">Staff Profile Upload</h3></div>
             <a href="view.php"><input class="btn-primary" type="submit" value="View Staff Data"></a>
        <div class="card-body col-form-label-sm">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php if (isset($msg_3)){echo $msg_3;}?>
                <div class="form-group">
                    <label class="" for="">First Name</label>
                    <input name="name" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input name="last_name" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input name="email" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Cell Number</label>
                    <input name="cell" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <input name="submit_3" class="btn-primary" type="submit" value="Add New Staff">
                </div>            
            </form>
   		</div>
	</div>
	</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

	<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
 </body>
 </html>