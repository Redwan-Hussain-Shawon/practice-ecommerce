<?php 

// User Profiel Update 

if (isset($_POST['customer_prfofile_update']) && !empty($_POST['customer_prfofile_update'])){

   profile_image_update();

  $profile_id = customer_profile_id();
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $dob = $_POST['dob'];
  $contact_number = $_POST['first_name'];
  $billing_address = $_POST['billing_address'];
  $delivery_address = $_POST['delivery_address'];

  $sql = "UPDATE user_profiles SET first_name='$first_name',last_name ='$last_name',dob='$dob',contact_number='$contact_number',billing_address='$billing_address',delivery_address='$delivery_address' WHERE id = '$profile_id'";
  if($connection->query($sql)){
   set_success_message('Profile has been successfully updated');
   redirect('customer.profile.php');
}else{
   // set_error_message('');
}
}


function profile_image_update(){
   global $connection;
   echo '<pre>';
   print_r($_FILES['profile_image']);
   echo '</pre>';

   if(isset($_FILES['profile_image']['name']) && !empty($_FILES['profile_image']['name'])){
         $profile_id = customer_profile_id();
         $fileName = $_FILES['profile_image']['name'];
         $fileType = $_FILES['profile_image']['type'];
         $fileSrc = $_FILES['profile_image']['tmp_name'];
         $fileError =$_FILES['profile_image']['error'];
         $fileSize = $_FILES['profile_image']['type'];

         $destination = 'customer/profile_images/'.$fileName;

         move_uploaded_file($fileSrc,$destination);

         $sql = "UPDATE user_profiles SET profile_image ='$fileName' WHERE id = $profile_id";
         $connection->query($sql);
   }
}

// get Customer Profile
function customer_profile(){

   global $connection;

   $sql = "SELECT * FROM user_profiles WHERE user_id =".logged_user_id();

   $result = $connection->query($sql);
   
   if($result->num_rows>0){
     return $result->fetch_object();
  }else{
     return false;
  }

}
function customer_profile_id(){

   global $connection;

   $sql = "SELECT id FROM user_profiles WHERE user_id =".logged_user_id();

   $result = $connection->query($sql);
   
   if($result->num_rows>0){
     $data = $result->fetch_object();
     return $data->id;

  }else{
     return false;
  }

}

function profile_images(){

   global $connection;

   $sql = "SELECT profile_image FROM user_profiles WHERE user_id =".logged_user_id();

   $result = $connection->query($sql);

   $customerProfile = $result->fetch_object();
   if(!empty($customerProfile->profile_image)){ ?>
     <img src="customer/profile_images/<?php echo $customerProfile->profile_image ?>"  alt="" class="img-fluid" style="width:100px;">
  <?php }else{?>
     <img src="customer/profile_images/default_pfofile_img.png" alt="">
  <?php }


}
?>