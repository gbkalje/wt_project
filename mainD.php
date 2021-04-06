
<?php
   
   session_start();

?>
<?php
include('database.php');
$obj=new query();

if(isset($_GET['type']) && $_GET['type']=='delete'){
	$id=$obj->get_safe_str($_GET['id']);
	$condition_arr=array('id'=>$id);
	$obj->deleteData('appoint1',$condition_arr);
}

$result=$obj->getData('appoint1','*','','id','desc');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Doctors Dashboard!</title>
  </head>
  <body>

  <?php
  $use=$_SESSION['login_use'];
  ?>
    
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
   <b> Global hospital</b>
  </a>
  <!--<button type="button" href="https://www.google.com/" class="btn btn-success" >Log out</button>-->
  <a class="btn btn-success" href="http://localhost/WT_PROJECT/loginv5/logout1.php" role="button">logout</a>
</nav>
<div style='margin-left:50px; margin-top:50px;'>
<button type="button" class="btn btn-primary" onclick="dash()"> Dashboard  </button><br>
<button type="button" class="btn btn-light" onclick="appoint()">Appointments</button>

</div>



<div id="das">
<?php
        $use=$_SESSION['login_use'];
     // echo "<h1>Wecome</h1>".$_SESSION['login_user'];
     echo "<h1 style='text-align:center;'>Wecome</h1>"."<h3 style='text-align:center;'>$use</h3>";
    ?>
</div>



<div id='app'>

<h1 style='margin-top:30px;text-align:center;'><b>Appointments</b></h1>
      <div class="container">
         <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse appointment</strong> 
         </div>
         <hr>
         <div>
            <table class="table table-striped table-bordered">
               <thead>
                  <tr class="bg-primary text-white">
                     <th>Sr#</th>
                     <th>Patient Name</th>
                     <th>Email</th>
                     <th>Date</th>
                     <th>Time</th>
                     <th>Doctor Name</th>
                     <th>Fees(Rs)</th>
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
                     <td><?php echo $list['date']?></td>
                     <td><?php echo $list['time']?></td>
                     <td><?php echo $list['dname']?></td>
                     <td><?php echo $list['fees']?></td>
                     <td><?php echo $list['mobile']?></td>
                     <td align="center">
                      <!--  <a href="manage-users.php?id" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |--> 
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
         <!--/.col-sm-12-->
      </div>

</div>

<script>
function dash(){
    var a= document.getElementById("das");
    var b= document.getElementById("app");

    a.style.display ="block";
   b.style.display = "none";
}

function appoint(){
    var a= document.getElementById("das");
    var b= document.getElementById("app");

    a.style.display ="none";
   b.style.display = "block";
}
</script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>