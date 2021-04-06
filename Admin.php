
<!doctype html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin-doct</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <style>
		.container{margin-top:100px;}
	  </style>
   </head>
   <body >
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h1 style="color:blue">Global Hospital</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <button type="button" class="btn btn-primary btn-lg" onclick="home12()">Home</button>
      </li>
      <li class="nav-item">
      <button type="button" class="btn btn-primary btn-lg"onclick="doct12()">Doctors</button>
       <!-- <a class="nav-link" href="#doctor"><h5>Doctors</h5></a>  -->
      </li>
      <li class="nav-item">
     <!-- <button type="button" class="btn btn-primary" onclick="pat12()">Patients</button> -->
        <a button type="button" class="btn btn-primary btn-lg" href="pract.php"><h5>patients</h5></a>
      </li>
      <li class="nav-item">
     <!-- <button type="button" class="btn btn-primary"onclick="appoint12()">Appointments</button> -->
       <a button type="button" class="btn btn-primary btn-lg" href="appoint.php"><h5>Appointments</h5></a> 
      </li>

      <a button class="btn btn-success btn-lg float-right" style='margin-left:1050px' href="http://localhost/WT_PROJECT/Admin/logout1.php" role="button">Log out</a>
      
    </ul>
  </div>
</nav>

<div id="hom">
<h1 style='text-align:center;'>Weclome  Admin</h1>
</div>




<div id="doctor">
<?php
include('database.php');
$obj=new query();

if(isset($_GET['type']) && $_GET['type']=='delete'){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$obj->deleteData('doctor',$condition_arr);
}

$result=$obj->getData('doctor','*','','id','desc');
?>

<h1 style='margin-top:30px;text-align:center;'><b>Doctors Info</b></h1>
      <div class="container">
         <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse Doctor</strong> <a href="manage-doct.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add doctor</a></div>
         </div>
         <hr>
         <div>
            <table class="table table-striped table-bordered">
               <thead>
                  <tr class="bg-primary text-white">
                     <th>Sr#</th>
                     <th>Patient Name</th>
                     <th>Email</th>
                     <th>Education</th>
                     <th>Speciality</th>
                     <th>Mobile</th>
                     <th class="text-center">Action</th>
                  </tr>
               </thead>
               <tbody>
				<?php
				if(isset($result['0'])){
				$id=1;	
				foreach($result as $list){
				?>
                  <tr>
                     <td><?php echo $id?></td>
                     <td><?php echo $list['Name']?></td>
                     <td><?php echo $list['email']?></td>
                     <td><?php echo $list['Education']?></td>
                     <td><?php echo $list['special']?></td>
                     <td><?php echo $list['mobile']?></td>
                     <td align="center">
                     <a href="manage-users.php?id=<?php echo $list['id']?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                        <a href="?type=delete&id=<?php echo $list['id']?>" class="text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a> 
                        
                     </td>
                  </tr>
				  <?php 
				  $id++;
				  } } else {?>
                  <tr>
                     <td colspan="6" align="center">No Records Found!</td>
                  </tr>
				  <?php } ?>
               </tbody>
            </table>
         </div>
</div>


<div id="pat">

</div>


<div id="appoint">
<h1>I am appoint</h1>

</div>

<script>

function home12() {
  var a1 = document.getElementById("hom");
  var b1 = document.getElementById("doctor");
  var c1 = document.getElementById("pat");
  var d1 = document.getElementById("appoint");
 

   a1.style.display ="block";
   b1.style.display = "none";
   c1.style.display = "none";
   d1.style.display = "none";
  
}

function doct12() {
  var l1 = document.getElementById("hom");
  var m1 = document.getElementById("doctor");
  var n1 = document.getElementById("pat");
  var o1 = document.getElementById("appoint");

   m1.style.display = "block";
   l1.style.display ="none";
   n1.style.display = "none";
   o1.style.display = "none";

}

function pat12() {
   var l2 = document.getElementById("hom");
  var m2 = document.getElementById("doctor");
  var n2 = document.getElementById("pat");
  var o2 = document.getElementById("appoint");

   n2.style.display = "block";
   m2.style.display = "none";
   l2.style.display ="none";
  // n1.style.display = "none";
   o2.style.display = "none";
   
  
}

function appoint12() {
   var l3 = document.getElementById("hom");
  var m3 = document.getElementById("doctor");
  var n3 = document.getElementById("pat");
  var o3 = document.getElementById("appoint");

  // n1.style.display = "block";
  o3.style.display = "block";
   m3.style.display = "none";
   l3.style.display ="none";
   n3.style.display = "none";
   

}
</script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
   </body>
</html>