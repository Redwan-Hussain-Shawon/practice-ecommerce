<?php
include 'include/header_include.php';
loggedInCheck();
include 'header.php';
?>
<div class="container">

    <!-- Registration form will insert here -->
    <?php 
    session_message();
    ?>
    <div class="row g-5">
        <div class="col-md-12">

            <h4 class="mb-3">Customer Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php include_once 'login_customer_dashboard_nav.php'; ?>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><?php echo logged_user_name()?> Profile
                    <?Php echo profile_images() ?>
                </div>
                <div class="card-body">
                    <?php 
                       $customer_profile = customer_profile();
                       ?>
                  <div class="container mt-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Label</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $customer_profile->first_name.' '.$customer_profile->last_name ?></td>
                    </tr>
                       <tr>
                        <td>Dob</td>
                        <td><?php echo $customer_profile->dob ?></td>
                    </tr>
                       <tr>
                        <td>Contact Number</td>
                        <td><?php echo $customer_profile->contact_number?></td>
                    </tr>
                    <tr>
                      <td>Billing Address</td>
                        <td><?php echo $customer_profile->billing_address ?></td>
                    </tr>
                     <tr>
                      <td>Delivery Address</td>
                        <td><?php echo $customer_profile->delivery_address ?></td>
                    </tr>
                    

                </tbody>
            </table>

        </div>
        <div class="card-footer"><a href="customer.profile_update.php">Update</a></div>
    </div>
</div>
</div>

</div>

<?php
include 'footer.php';
?>