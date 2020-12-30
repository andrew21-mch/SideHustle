<center><form action="index.php" method="post">
        <div id="send">
            <h2>write us</h2>
        </div>
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" placeholder="email" id="email" name="email" required="rquuired"></td>
            </tr <tr>
            <td>Name</td>
            <td><input id="name" type="text" placeholder="name" id="name" name="name" required="required"></td>
            </tr>
            <br/>
            <tr>
                <td>Message</td>
                <td><textarea placeholder="input message" name="message" required ="required"> </textarea></td>
            </tr>
            <td><button>send</button></td>
        </table>

    </form></center>
    <br/>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql="INSERT INTO posts(email, username, content) values ('$email', '$name', '$message');";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Your Message has been successfully sent, we will review and get back to you in moment');</script>";
    }
    else
    {
       echo "ERROR:". $sql. "<br>". mysqli_error($conn);
    }
    ?>
