<?php
  include 'include/header_include.php';
include 'header.php';
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Customer Registration</h1>
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

    <div class="row g-5">
        <h4 class="mb-3">Registration Information</h4>
        <form method="post" action="">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="dob" class="form-label">DOB <span class="text-body-required">(Required)</span></label>
                    <input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth">
                    <div class="invalid-feedback">
                        Please enter a valid Date of Birth.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="">Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="email" class="form-label">Email <span
                            class="text-body-required">(Required)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="contact_number" class="form-label">Contact Number <span
                            class="text-body-required">(Required)</span></label>
                    <input type="text" class="form-control" id="email" name="contact_number"
                        placeholder="contact number">
                    <div class="invalid-feedback">
                        Please enter a valid contact number.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="address" class="form-label">Billing Address</label>
                    <textarea class="form-control" id="billing_address" name="billing_address"></textarea>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="address2" class="form-label">Delivery Address<span
                            class="text-body-secondary">(Optional)</span></label>
                    <textarea class="form-control" id="delivery_address" name="delivery_address"></textarea>
                </div>

                <div class="col-md-6">
                    <label for="username" class="form-label">User Name</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="user_name" placeholder="User Name" name="user_name"
                            required>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="lastName" name="password">
                    <div class="invalid-feedback">
                        Valid password is required.
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <input type="submit" class="w-100 btn btn-primary btn-lg" value="Registration" name="Registration">
        </form>
    </div>


</div>

<?php
include 'footer.php';
?>