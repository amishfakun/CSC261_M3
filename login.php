<?php 
include_once 'includes/db.php';
 ?>

<html>
<body>

<div>Welcome to our platform. Please indicate which type of user you are</div>

<form action="includes/login.php" method="POST">

<div class = "login-form form">

<h2>Log In</h2>

    
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="password" name="pwd" placeholder="password">
    <br>
    <input type="submit" name = "submit" value = "submit">
   

</div>





</form>

</body>
</html>