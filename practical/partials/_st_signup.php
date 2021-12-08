<?php 
    require "_connectdb.php";

    if(isset($_POST['st_signup']))
    {
        // echo "student signup";
        
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $rollno = $_POST['rollno'];

            $query = "INSERT INTO `students` (`name`, `rollno`, `email`, `dob`, `date`) VALUES ('$name', '$rollno', '$email', '$dob', current_timestamp())";
            $runQuery = mysqli_query($conn, $query);
    
            if($runQuery)
            {
                echo "Form Submitted successfully";
            }
    }

?>