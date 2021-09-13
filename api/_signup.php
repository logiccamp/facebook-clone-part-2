<?php
include("../includes/config.php");

if(isset($_REQUEST['action'])){


    $response = [];
    // get all variables from the request
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = "";
    $phone = "";
    $emailorphone = $_REQUEST['emailorphone'];
    $d_dob = $_REQUEST['date_dob'];
    $m_dob = $_REQUEST['month_dob'];
    $y_dob = $_REQUEST['year_dob'];
    $gender = $_REQUEST['gender'];
    $password = $_REQUEST['password'];

    if(strpos("@", $emailorphone)){
        $email = $emailorphone;
    }else{
        $phone = $emailorphone;
    }


    if($firstname == "" || $lastname == "" || $emailorphone == "" || $d_dob == "" || $m_dob == "" || $y_dob == "" || $gender == "" || $password == ""){

        $response['status'] = false;
        $response['message'] = 'All fields are required';

        print(json_encode($response, JSON_PRETTY_PRINT));
        return false;
        
    }


    if(strlen($password) < 8){
        $response['status'] = false;
        $response['message'] = 'Your password is not strong enough';
        print(json_encode($response, JSON_PRETTY_PRINT));
        return false;
    }


    #check if the record exist 
    $check_query = "SELECT * FROM `users` where `email` = '$emailorphone' or `telephone` = '$emailorphone'";

    $result = mysqli_query($sql, $check_query);

    if(mysqli_num_rows($result) > 0){
        $response['status'] = false;
        $response['message'] = 'Email or phone has been used, please try again!';
        print(json_encode($response, JSON_PRETTY_PRINT));
        return false;
    }

    #generate a unique id 

    $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $suff = str_shuffle($char);
    $user_id = substr($suff, 0, 11);

    #hash user password 

    $hash = password_hash($password, PASSWORD_DEFAULT);


    $query = "INSERT INTO `users`(`id`, `user_id`, `email`, `password`, `first_name`, `last_name`, `telephone`, `gender`, `day_dob`, `month_dob`, `year_dob`, `date_registered`) VALUES (NULL, '$user_id','$email','$hash','$firstname','$lastname','$phone','$gender','$d_dob','$m_dob','$y_dob', CURRENT_TIMESTAMP)";

    $result = mysqli_query($sql, $query);

    if($result){
        $response['status'] = true;
        $response['message'] = 'Your account has been created please proceed to login';
        print(json_encode($response, JSON_PRETTY_PRINT));
        return false;
    }else{
        $response['status'] = false;
        $response['message'] = 'Something went wrong, please try again';
        print(json_encode($response, JSON_PRETTY_PRINT));
        return false;
    }
}


?>