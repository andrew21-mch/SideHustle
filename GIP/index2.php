<?php
include "register.php";
?>
<html>
    <head>
    <title> users info </title>
</head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="header.css">

<body>
<header>
        <nav id="navigations">
        <a id="home" href="index.php">HOME</a>
        <a id="contact" href="contact.php">CONTACT</a>
        <a id="register" href="regist.php">REGISTER</a>
        <a id="name" >HOSPITAL MANAGEMENT SYSTEM</a>
</header>
   <center>
    <div id="userInfo"><br><h1> LOGIN</h1><br></div>
           <form style="color:indigo"></form> 

         <form action = "index2.php" method = "post">
         <table>
         <tr>
         <td>Email</td>
         <td><input id = "I_user" name = "email" type = "email" placeholder = "Email"></td>
         </tr>
         <tr>
         <td>Password</td>
         <td><input id = "I_pass" type = "password" name = "password" placeholder = "Password"></td>
         </tr>
         <tr>
         <td><button id="p1" Value="Login" name = "login">Login</button></td>
         <td><a id="account" href="regist.php">Create Account</a></td>
         </tr>
</table>
<br><br>
<center><a href="password.php"  id="p2" >Forget Password</a></center>
</form>
<?php 
   if(isset($_POST['login'])){
      $email=$_POST['email'];
      $pass=$_POST['password'];

   $sql="SELECT * FROM Patient WHERE Email = '$email'";

   $result= mysqli_query ($conn,$sql);
   if(mysqli_num_rows($result)>0){
       while($Patient=mysqli_fetch_assoc($result)){
          if($email==$Patient['Email'] && $pass==$Patient['Password']){
             $_SESSION['email']=$email;
             header ('location:index.php');
          }else{
             echo'<script>alert("incorect Email or password");</script>';
          }
       }
    }

   }

 ?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery.js"></script>
</body>
</center>
</html>