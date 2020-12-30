<?php
    include_once 'conect.php';
?>
<html>

<head>
    <title>
        Write to Us
    </title>
</head>
<link rel="stylesheet" href="contact.css">
<body>
<header>
        <nav id="navigations">
        <a id="name" >HOSPITAL MANAGEMENT SYSTEM</a>
        <a id="home" href="index.php">HOME</a>
        <a id="contact" href="contact.php">CONTACT</a>
        <a id="register" href="regist.php">REGISTER</a>
</header>
    
    <main>
        <br><br>
        <center><b>Contact us</b></center>
        <div>
            <center>
                <form id="form1" action="contact.php" , method="Post"><b id="name">Name</b><br/>
                    <input type="text" name="name" placeholder="your name"><br/>

                    <b id="email">Email</b><br/>
                    <input type="email" name="email" placeholder="email"><br/>
                    <b id="Message">Message</b><br/>
                    <input type="text" name="subject" placeholder="subject"><br>
                    <textarea name="message" placeholder="Message">
                </textarea><br/>
                    <button type="submit" id="send" name="send">send</button>
                </form>
            </center>
        </div>
        <br/></main>


        <?php
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        ?>

<?php
            $sql="INSERT INTO posts (username, email, topic, content) VALUES ('$name', '$email', '$subject', '$message');";
            mysqli_query($conn, $sql);
            ?> 
 



</body>

</html>