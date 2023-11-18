<?php
 
 // set Session Message 
function set_success_message($message){
    $_SESSION['success_message'] = $message;
}

function set_error_message($message){
    $_SESSION['error_message'] = $message;
}


// show session message:
function session_message(){
    if(isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])){ ?>
        <div class="alert alert-danger">
            <?php 
            echo $_SESSION['error_message'];
            unset($_SESSION['error_message']);
             ?>
        </div>

    <?php }//end of if isset checking

    if(isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])){ ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION['success_message'];
            unset($_SESSION['success_message']);
            ?>
        </div>

    <?php }//end of if isset checking


}// end of function

// show required validation message:
function show_validation_error($fieldName){
    if (isset($_SESSION['validation']['errorData'][$fieldName]) && !empty($_SESSION['validation']['errorData'][$fieldName])) { ?>

        <span class="text-danger">
            <?php
            echo $_SESSION['validation']['errorData'][$fieldName];
            unset($_SESSION['validation']['errorData'][$fieldName])
            ?>
        </span>

    <?php }
}

//show input old value:
function old_value($fieldName){
    if(isset($_SESSION['old_value'][$fieldName]) && !empty($_SESSION['old_value'][$fieldName])){
         echo $_SESSION['old_value'][$fieldName];
        unset($_SESSION['old_value'][$fieldName]);
     }
     
}

//show input old value for radio:
function old_value_radio($fieldName, $value){
    if(isset($_SESSION['old_value'][$fieldName]) && $_SESSION['old_value'][$fieldName] == $value){
        echo 'checked';
        unset($_SESSION['old_value'][$fieldName]); 
    }
}

//show input old value for checkbox:
function old_value_checkbox($fieldName, $value){
    if(isset($_SESSION['old_value'][$fieldName]) && in_array($value, $_SESSION['old_value'][$fieldName])){
        echo 'checked'; 
    }
}

//show input old value for select:
function old_value_select($fieldName, $value){
    if(isset($_SESSION['old_value'][$fieldName]) && $_SESSION['old_value'][$fieldName] == $value){
        echo 'selected';
        unset($_SESSION['old_value'][$fieldName]);
    }
}



?>