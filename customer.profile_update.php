<?php
include 'include/header_include.php';
loggedInCheck();
include 'header.php';
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Customer Login</h1>
            <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the
                creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.
            </p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </div>
</section>
<div class="container">

    <!-- Registration form will insert here -->
    <?php 
    session_message();
    ?>
    <div class="row g-5">
        <div class="col-md-12">

            <h4 class="mb-3">Customer Profile Update</h4>
        </div>
    </div>
    <?php 
    $customerdata = customer_profile();
    ?>
    <div class="row">
        <div class="col-md-3">
            <?php include 'login_customer_dashboard_nav.php'?>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><?php echo logged_user_name() ?> Profile Update
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                      <div class="row mb-3">
                        <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $customerdata->first_name ; ?>">
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $customerdata->last_name ; ?>">
                  </div>
              </div>
              <div class="row mb-3">
                <label for="last_name" class="col-sm-2 col-form-label">Dob</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $customerdata->dob ; ?>">
              </div>
          </div>

          <div class="row mb-3">
            <label for="last_name" class="col-sm-2 col-form-label">Contact Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $customerdata->contact_number ; ?>">
          </div>
      </div>
      <div class="row mb-3">
        <label for="last_name" class="col-sm-2 col-form-label">Billing Address</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" id="billing_address" name="billing_address" value="<?php echo $customerdata->billing_address ; ?>"></textarea>
      </div>
  </div>
  <div class="row mb-3">
    <label for="last_name" class="col-sm-2 col-form-label">Delivery Address</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="delivery_address" name="delivery_address" value="<?php echo $customerdata->delivery_address ; ?>"></textarea>
  </div>
</div>

 <div class="row mb-3">
    <label for="last_name" class="col-sm-3 col-form-label">Profile Image</label>
    <div class="col-sm-4">
      <input type="file" name="profile_image" >
  </div>
   <div class="col-sm-3">
     <?php profile_images() ?>
  </div>

</div>

<input type="submit" class="btn btn-primary" name="customer_prfofile_update" value="Prfofile Update">
</form>
</div>
</div>
</div>
</div>
</div>

</div>

<?php
include 'footer.php';
?>