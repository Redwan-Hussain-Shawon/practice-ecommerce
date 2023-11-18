<?php

// redirect:
 function redirect($page = 'contact.php')
{
    header('location: '.$page);
    exit;
}

 function logged_user_name()
{
    if(isset($_SESSION['logged']['logged_user_name']) && !empty($_SESSION['logged']['logged_user_name']))
    {
        return $_SESSION['logged']['logged_user_name'];
    }else{
        return false;
    }
}
 function logged_user_id()
{
    if(isset($_SESSION['logged']['logged_user_id']) && !empty($_SESSION['logged']['logged_user_id']))
    {
        return $_SESSION['logged']['logged_user_id'];
    }else{
        return false;
    }
}
 function logged_user_email()
{
    if(isset($_SESSION['logged']['logged_user_email']) && !empty($_SESSION['logged']['logged_user_email']))
    {
        return $_SESSION['logged']['logged_user_email'];
    }else{
        return false;
    }
}
function logged_user_status()
{
    if(isset($_SESSION['logged']['logged_user_status']) && !empty($_SESSION['logged']['logged_user_status']))
    {
        return $_SESSION['logged']['logged_user_status'];
    }else{
        return false;
    }
}
function logged_user_login_status()
{
    if(isset($_SESSION['logged']['logged_user_login_status']) && $_SESSION['logged']['logged_user_login_status'] === true)
    {
        return true;
    }else{
        return false;
    }
}


//set login session data:


function set_logged_user_name($userName)
{    
    $_SESSION['logged']['logged_user_name'] = $userName;
}
function set_logged_user_id($userId)
{
    $_SESSION['logged']['logged_user_id'] = $userId;
}
function set_logged_user_email($email)
{
    $_SESSION['logged']['logged_user_email'] = $email;
}
function set_logged_user_status($userStatus)
{
    $_SESSION['logged']['logged_user_status'] = $userStatus;
}
function set_logged_user_login_status($status = true)
{
    $_SESSION['logged']['logged_user_login_status'] = $status;
}


//loggin customer status check
function isCustomerHasLoggedIn(){
    return logged_user_login_status();
}

function loggedInCheck()
{
    if(!isCustomerHasLoggedin()){
        $_SESSION['error_message'] = 'unauthorised accessed!. please login to access this page.';
        redirect('customer_login.php');
    }
}



?>