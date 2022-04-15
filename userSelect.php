<?php 
include_once 'includes/db.php';
 ?>

<!-- <form action="includes/signup.php" method="POST"> -->

<?php

    if(isset($_POST['submit'])) {
        $userType = $_POST['choice'];
        if($userType == "Student") {
            $StudentID = uniqid('STU');
            $StudentName = $_POST['name'];
            $sql=  "INSERT INTO userType VALUE ('$StudentName', '$StudentID');";
            $result = mysqli_query($conn, $sql);
            header("Location: ../studentSignUp.php? signup=success");


        }else if($userType == "Company") {
            $CompanyID = uniqid('COM');
            $CompanyName = $_POST['name'];
            $sql=  "INSERT INTO userType VALUE ('$CompanyName', '$CompanyID');";
            $result = mysqli_query($conn, $sql);
            header("Location: ../companySignUp.php? signup=success");


            

        }else {
            echo "error, please pick from drop down menu";
        }

        
    }

?>

<div>Welcome to our platform. Please indicate which type of user you are</div>

<form action="" method = "POST" name = "userTypeForm">

<!-- Name: <input type="text" name="name"><br> -->

<select name="choice">
    <Option>Select One</Option>
    <option value="Student">Student</option>
    <option value="Company">Company</option>
</select>

<input type="submit" name = "submit" value = "submit">



</form>



</form>

</body>
</html>