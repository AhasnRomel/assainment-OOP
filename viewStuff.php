<?php 
	include_once "vendor/autoload.php";
	
	
    use App\Controlar\Staff;

    
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
    <?php 

   if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $da = $stuff -> singleStuff($id);

      $view = $da-> fetch_assoc();
   }

    ?>
	
		
	       <div class="card shadow">
            <div class="card-body">
                <h3>Profile</h3>
                <table class="table table-striped">
                    
                <tbody>
                   
                    <tr>
                        <td>Name</td>
                        <td><?php echo $view['name'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $view['email'];?></td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td><?php echo $view['cell'];?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?php echo $view['uname'];?></td>
                    </tr>
                        
                   </tbody>
                </table>
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