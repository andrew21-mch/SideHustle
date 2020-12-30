<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <nav><a href="index.php">HOME</a></nav>
<div class="login">
<form id="login" method="get" action="">
    <fieldset id="field" width="50px">
       <legend id="legend"><b>Login</b>

        </legend>
        <label>  
<p>Username:
</label>
    <input type="text" name="Username" id="username" placeholder="username"  size="20" maxlength="15">
<p>
<label>
<p>Password:
</label>
    <input type="password" name="Password" id="password" size="20" placeholder="password" maxlength="30">
</p>
    <p>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br/>
    </p> 
<p>
    <input type="submit" id="login" value="Login"/>
    <input type="submit" id="value" value="Sign up"/> 
    <a href="password.html" style="background-color: white; color: black; border-bottom-style: none; border-radius: 10px; list-style-type: none; text-decoration: none">forgot pasword?</a>
</p>
</fieldset>
</form>
</div>
</body>
</html>