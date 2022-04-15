<?php 
include_once 'includes/db.php';
 ?>


?>



<html>
<body>

<div>Welcome to our platform. Please indicate which type of user you are</div>

<form action="" method="POST">

<div class = "signup-form form">

<h2>Sign Up</h2>

    <input type="text" name="name" placeholder="Your Name/Insititution Name">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="password" name="pwd" placeholder="password">
    <br>
    <input type="password" name="pwdrepeat" placeholder="Repeat Password"> 
    <br>
    <select name="choice">
        <Option>Select One</Option>
        <option value="Student">Student</option>
        <option value="Company">Company</option>
    </select>
    <br>

    <input type="submit" name = "submit" value = "submit">
   

</div>





</form>

</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $userType = $_POST['choice'];

    if($userType == "Student") {
        $StudentID = uniqid('STU');
        $StudentName = $_POST['name'];
        $sql=  "INSERT INTO userType VALUE ('$StudentName', '$StudentID');";
        $result = mysqli_query($conn, $sql);
        echo "Welcome $StudentName";


    }else if($userType == "Company") {
        $CompanyID = uniqid('COM');
        $CompanyName = $_POST['name'];
        $sql=  "INSERT INTO userType VALUE ('$CompanyName', '$CompanyID');";
        $result = mysqli_query($conn, $sql);
        echo "Welcome $CompanyName";
        


        

    }else {
        echo "error, please pick from drop down menu";
    }
    
}

