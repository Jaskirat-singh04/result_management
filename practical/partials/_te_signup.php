<?php 
    require "_connectdb.php";

    if(isset($_POST['te_signup']))
    {
        echo "teacher signup";
        
        $name = $_POST['name'];
        $email = $_POST['email'];

            $query = "INSERT INTO `teachers` (`name`, `email`, `date`) VALUES ('$name', '$email', current_timestamp())";
            $runQuery = mysqli_query($conn, $query);
    
            if($runQuery)
            {
                echo "Form Submitted successfully";
            }
    }

?>