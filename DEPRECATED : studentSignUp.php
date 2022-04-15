<?php 
include_once 'includes/db.php';

if(isset($_POST['submit'])) {
    $userName = $_POST['poop'];
    $StudentID = uniqid('STU');
    $sql=  "INSERT INTO userType VALUE ('$userName', '$StudentID');";
    $result = mysqli_query($conn, $sql);
    
}


 ?>



<html>
<body>
    <div class = "signup-form form">

    <h2>Sign Up</h2>

        <input type="text" name="poop" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password"> 
        <button type = "submit" name = "submit"> Sign Up </button>

    </div>



<!-- need to include unique ID function here -->



</form>

</body>
</html>

