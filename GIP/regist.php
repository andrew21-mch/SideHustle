<?php
include_once 'register.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>patient signup</title>
    </head>
    <link rel="stylesheet" href="regist.css">
    <link href="main.css" rel="stylesheet">

    <body>
        <header>
            <nav id="navigations">
                <b>HOSPITAL MANAGEMENT SYSTEM</b>
                <a id="home" href="index.php">HOME</a>
                <a id="contact" href="contact.php">CONTACT</a>
                <a id="register" href="regist.php">REGISTER</a>
</nav>
        </header>
<center><p>HMS Registration Form</p></center>

        <center>
            <form action="regist.php" method="post">
                <input type="text" placeholder="Firstname" name="Firstname"><br><br>
                <input type="text" placeholder="LastName" name="Lastname"><br><br>
                <input type="email" placeholder="Email Address" name="email"><br><br>
                <input type="date" placeholder="date of birth" name="DOB"><br><br>
                <input type="characters" placeholder="Phonenumber" name="Phone"><br><br>
                <input type="text" placeholder="Allegies" , name="Allergies"><br><br>
                <label>Blood Group</label><br><select value="Blood Group" name="BG">
                <option>A</option>
                <option>AB</option>
                <option>B</option>
                <option>O-</option>
                <option>O+</option>


                </select><br>
                <input type="text" placeholder="city" name="city"><br>
                <input type="password" placeholder="Password" name="pass"><br><br>
                <button type="submit" value="Submit">Submit</button>
            </form>
        </center>

        <?php
        if(!isset($_POST['submit'])){
            $email = $_POST['email'];
            $FirstName = $_POST['Firstname'];
            $LastName = $_POST['Lastname'];
            $DOB = $_POST['DOB'];
            $Allergies = $_POST['Allergies'];
            $BG = $_POST['BG'];
            $Phone = $_POST['Phone'];
            $city = $_POST['city'];
            $pass = $_POST['pass'];

            $sql= "INSERT INTO Patient (Firstname, Lastname, Allergies, BG, Phone, city, DOB, Password, Email) VALUES ('$FirstName', '$LastName', '$Allergies', '$BG', '$Phone', '$city', '$DOB', '$pass', '$email');";
            if(mysqli_query($conn,$sql)){
                echo"<script>alert('Account created successfull');</script>";
            }
            else
            {
               echo "ERROR:". $sql. "<br>". mysqli_error($conn);
            }
            
        }
          ?>
            
    </body>
    </html>