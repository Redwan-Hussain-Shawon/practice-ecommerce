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

            <h4 class="mb-3">Customer Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php include 'login_customer_dashboard_nav.php'  ?>
        </div>
        <div class="col-md-9">

        </div>
    </div>

</div>

<?php
include 'footer.php';
?>