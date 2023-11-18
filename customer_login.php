<?php
 include 'include/header_include.php';
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

    <div class="row g-5">
        <h4 class="mb-3">Login Information</h4>
        <?php 
            session_message();
        ?>
        <form method="post" action="">
            <div class="row g-3">
            <div class="col-md-3">
                    <label for="email" class="form-label">Email <span
                            class="text-body-required">(Required)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value='<?php old_value('email') ?>'>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
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
            <input type="submit" class="w-100 btn btn-primary btn-lg" value="customerLogin" name="customerLogin">
        </form>
    </div>


</div>

<?php
include 'footer.php';
?>