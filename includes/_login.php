<?php 


if(isset($_POST['loginbtn'])){
    include("config.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if the email and password is not empty
    if(empty($email) || empty($password)){
        header("Location: ../login.php?error=empty");
    }

    //get user from the  database
    $query = "SELECT * from `users` where `email` = '$email' or `telephone` = '$email' or `user_id` = '$email'";

    $result = mysqli_query($sql, $query);
    $count = mysqli_num_rows($result);

    if($count > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $userid = $row['user_id'];
            
            if(password_verify($password, $row['password'])){
                
                session_start();
                $_SESSION["uid"] = $userid;

                header("Location: ../");
            }else {
                header("Location: ../login.php?error=empty");        
            }
        }
    }else{
        header("Location: ../login.php?error=empty");
    }
    

}else{
    header("Location: ../login.php");
}