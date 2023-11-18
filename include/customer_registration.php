<?php

if (isset($_POST['Registration']) && !empty($_POST['Registration'])) {

    // Insert date into user table:
    
    $user_id = store_user();

    // insert data into user profile table:

    $i = store_user_profile($user_id);
    $_SESSION['success_message']='Registration has Sucessfully done. Please Login with your username and password';
    redirect('customer_login.php');

}



function store_user()
{

    global $connection;

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $created_at = date('Y-m-d H:i:s');


    $sql = "INSERT INTO users (user_name, email, password, created_at) VALUES('$user_name', '$email', '$password', '$created_at')";

    $connection->query($sql);

    return $connection->insert_id;


}

function store_user_profile($user_id)
{
    global $connection;

    $gender = $_POST['gender'];
    $user_id = $user_id;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $contact_number = $_POST['contact_number'];
    $created_at = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_profiles(gender, user_id, first_name,last_name,dob, contact_number, created_at) VALUES('$gender', '$user_id','$first_name', '$last_name','$dob','$contact_number','$created_at')";
    
    if ($connection->query($sql)){
        return true;
    } else {
        return false;
    }
}



?>