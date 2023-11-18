<?php 
if (isset($_POST['customerLogin']) && !empty($_POST['customerLogin'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
    $isValidEmail = check_user_email($email);
   if($isValidEmail){
       
    //   store old value 
     
      $isValidPassword = check_user_password($email,$password);
      if($isValidPassword){
          
          set_logged_user_id($isValidPassword->id);
          set_logged_user_name($isValidPassword->user_name);
          set_logged_user_email($isValidPassword->email);
          set_logged_user_status($isValidPassword->status);
          set_logged_user_login_status();
          
          $_SESSION['success_message']=$isValidPassword->user_name.' Successfully Login You';
          redirect('customer_dashboard.php');
          
          
      }else{
          $_SESSION['old_value']['email']=$email;
          $_SESSION['error_message']= 'Password not match';
          redirect('customer_login.php');
      }
   }else{
       $_SESSION['error_message']=$email . ' Email Not Found Please inter Valid Email';
        redirect('customer_login.php');
   }
}
// Email Valid check
// will return ture or false;
function check_user_email($email){
    global $connection;
       $sql = "SELECT id FROM users WHERE email ='$email'";

    $result =  $connection->query($sql);

   
    if($result->num_rows>0){
        return true;
    }else{
        return false;
    }

}

// Password Valid check
// will return ture or false;

function check_user_password($email,$password){
    
     global $connection;
     
    $sql = "SELECT id,user_name,email,status FROM users WHERE email ='$email' AND password='$password'";

    $result =  $connection->query($sql);
   
    if($result->num_rows>0){
        return $result->fetch_object();
    }else{
        return false;
    }
    
}
?>