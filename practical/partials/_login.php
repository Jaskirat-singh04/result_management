<?php 
    require "_connectdb.php";

    if(isset($_POST['loginreq']))
    {
        // echo "login page";
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];

            $Exists = "SELECT * FROM `login` WHERE `name` = '$name' AND `email` = '$email' AND `role` = '$role'";
            $uresults = mysqli_query($conn, $Exists);
            $found = mysqli_num_rows($uresults);

            if($found == 1)
            {
                    echo 'Login Successfull';
                    
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $role;
            }
            else{
                echo $role.' Not Found';
            }
    }

?>