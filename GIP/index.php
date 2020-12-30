<?php
include_once "conect.php"
?>
<!Doctype html>
<html>

<head>
    <title>
        home
    </title>
    <link href="index.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

</head>

<body>
<header>
        <nav id="navigations">
        <a id="name" >HOSPITAL MANAGEMENT SYSTEM</a>
        <a id="home" href="index.php">HOME</a>
        <a id="contact" href="contact.php">CONTACT</a>
        <a id="register" href="regist.php">REGISTER</a>
</header>

    <section id="notes">
        <h1 id="parag">
            Welcome to our hospital management system. a platform where you can
            <ul>
                <li>book appointment with with your doctor</li>
                <li>access your medical record anywhere, anytime</li>
            </ul>



        </h1>

    </section>


    <div id="image"><img src="doc4.jfif" alt="hospital photo"><br/></div>
    <nav id="all">
        <a id="first" href="index2.php">User Login</a>

        <a id="second" href="index3.php">Doctors login</a>


        <a id="third" href="#">Admin Login</a>
    </nav>

    <?php 
    include "form.php"

    ?>
    <footer>
        <li id="footer">powered by gate inc</li>
    </footer>
</body>

</html>