<html>
<head>
<link rel="stylesheet" href="login.css">
</head>
<body>

  <?php


    $servername = "localhost";
    $username = "root";
    $password ="";
    $database="hospital"; 

   $conn= mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn,$database);

    if(isset($_POST['name'])){
      $uname=$_POST['name'];
      $upassword=$_POST['password'];

      $sql="select * from patient where Name='".$uname."' AND password='".$upassword."' limit 1";

      $result=mysql_query($sql);

      if(mysql_num_rows($result)==1){
        echo " you have succesuful login";
        exit();
      }
      else{
        echo "You have entered incoorect password";
        exit();
      }

    }

  ?>
	<h1 id="para1"><b>WELCOME TO HOSPITAL MANAGEMENT SYSTEM</b></h1>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <a class="inactive underlineHover" href="new_account.php">Sign Up </a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="action="/HOSPITAL/login.php" method="post">">
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit"  class="fadeIn fourth"  value="Log In" >
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.html">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>