<?php 
	include_once "vendor/autoload.php";
	
	use App\Controlar\Student;
    use App\Controlar\Teacher;
    use App\Controlar\Staff;

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
<div class="container">
	<?php 

 	if (isset($_GET['stu_id'])) {
 		$id = $_GET['stu_id'];

 		$msg = $student->deleteStudent($id);
 		
 	}


  ?>
	
	<div class="wrap-table">
		<div class="card shadow">
			<div class="card-body">
				<h3>Students Data</h3>
				<?php if (isset($msg)) {echo $msg;} ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
					<?php 
						$data = $student -> allStudentInfo();
						$i=1;
						while($all_stu = $data ->fetch_assoc()):
					 ?>
					
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td><?php echo $all_stu['name'] .' '. $all_stu['last_name']; ?></td>
						<td><?php echo $all_stu['email']; ?></td>
						<td><?php echo $all_stu['cell']; ?></td>
						<td><?php echo $all_stu['uname']; ?></td>
						<td>
							<a class="btn btn-sm btn-info" href="viewStudent.php?id=<?php echo $all_stu['id']; ?>">View</a>
							<a class="btn btn-sm btn-warning" href="editstu.php?id=<?php echo $all_stu['id'];?>">Edit</a>
							<a class="btn btn-sm btn-danger" href="?stu_id=<?php echo $all_stu['id']; ?>">Delete</a>
						</td>
					</tr>
						
					<?php endwhile; ?>
					</tbody>
				</table>
				<a class="btn btn-primary" href="index.php">Add New</a>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php 

 	if (isset($_GET['te_id'])) {
 		$id = $_GET['te_id'];

 		
 		$msg_1 = $teacher->delateData($id);
 		
 	}


  ?>
	<div class="wrap-table">
		<div class="card shadow">
			<div class="card-body">
				<h3>Teachers Data</h3>
				<?php if (isset($msg_1)) {echo $msg_1;} ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
					<?php 
						$data = $teacher -> allTeacherInfo();
						$i=1;
						while($all_teacher = $data ->fetch_assoc()):
					 ?>
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td><?php echo $all_teacher['name'] .' '. $all_teacher['last_name']; ?></td>
						<td><?php echo $all_teacher['email']; ?></td>
						<td><?php echo $all_teacher['cell']; ?></td>
						<td><?php echo $all_teacher['uname']; ?></td>
						<td>
							<a class="btn btn-sm btn-info" href="viewStudent.php?id=<?php echo $all_teacher['id']; ?>">View</a>
							<a class="btn btn-sm btn-warning" href="editteacher.php?id=<?php echo $all_teacher['id']; ?>">Edit</a>
							<a class="btn btn-sm btn-danger" href="?te_id=<?php echo $all_teacher['id']; ?>">Delete</a>
						</td>
					</tr>
						
				<?php endwhile; ?>
					</tbody>
				</table>
				<a class="btn btn-primary" href="index.php">Add New</a>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php 

 	if (isset($_GET['stf_id'])) {
 		$id = $_GET['stf_id'];

 		
 		$msg_2 = $stuff ->delateData($id);
 	}


  ?>
	<div class="wrap-table">
		<div class="card shadow">
			<div class="card-body">
				<h3>Stuff Data</h3>
				<?php if (isset($msg_2)) {echo $msg_2;} ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
				</thead>
				<tbody>
					<?php 
						$data = $stuff -> allStuffInfo();
						$i=1;
						while($all_stuff = $data ->fetch_assoc()):
					 ?>
					<tr>
						<td><?php echo $i; $i++;?></td>
						<td><?php echo $all_stuff['name'] .' '. $all_stuff['last_name']; ?></td>
						<td><?php echo $all_stuff['email']; ?></td>
						<td><?php echo $all_stuff['cell']; ?></td>
						<td><?php echo $all_stuff['uname']; ?></td>
						<td>
							<a class="btn btn-sm btn-info" href="viewStuff.php?id=<?php echo $all_stuff['id']; ?>">View</a>
							<a class="btn btn-sm btn-warning" href="editstuff.php?id=<?php echo $all_stuff['id']; ?>">Edit</a>
							<a class="btn btn-sm btn-danger" href="?stf_id=<?php echo $all_stuff['id']; ?>">Delete</a>
						</td>
					</tr>
						
				<?php endwhile; ?>
					</tbody>
				</table>
				<a class="btn btn-primary" href="index.php">Add New</a>
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
	<br>
	<br>
	<br>
	<br>
	<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
 </body>
 </html>