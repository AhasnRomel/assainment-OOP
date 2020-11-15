<?php 
	include_once "vendor/autoload.php";
	
	use App\Controlar\Staff;
   	$stuff = new Staff;
   ?>

   <?php 

   if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $da = $stuff ->singleStuff($id);

      $data = $da-> fetch_assoc();
   }

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
	
	<?php 
 		if (isset($_POST['submit_3'])) {
 			$name = $_POST['name'];
 			$last_name = $_POST['last_name'];
 			$email = $_POST['email'];
 			$cell = $_POST['cell'];
 			$uname = $_POST['uname'];

 			if (empty($name) || empty($last_name) || empty($email) || empty($cell) || empty($uname)) {
 				$msg = $student -> msg('All Fields Are Required');
 			}else{
 				$stuff -> updateStuffInfo($name, $last_name, $email, $cell, $uname, $id );
 			}
 		}



 	 ?>
			
 	
 	
				
	<div class="card">
		<div class="modal-header"> <h3 class="text-primary">Update Stuff</h3></div>
             <a href="view.php"><input class="btn-primary" type="submit" value="View Stuff Data"></a>
        <div class="card-body col-form-label-sm">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php if (isset($msg)){echo $msg;}?>
                <div class="form-group">
                    <label class="" for="">First Name</label>
                    <input name="name" value="<?php echo $data['name'];?>" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input name="last_name" value="<?php echo $data['last_name'];?>" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input name="email" value="<?php echo $data['email'];?>" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Cell Number</label>
                    <input name="cell" value="<?php echo $data['cell'];?>" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" value="<?php echo $data['uname'];?>" class="form-control" type="text" value="">
                </div>
                <div class="form-group">
                    <input name="submit_3" class="btn-primary" type="submit" value="Update Stuff">
                </div>            
            </form>
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