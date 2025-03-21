<?php include 'app/views/shares/header.php'; ?>

<div class="card-body p-5 text-center">
<form class="user" action="/account/save" method="post">
    <h2 class="text-center fw-bold mb-2 text-uppercase my-6">Register</h2>
    
    <!-- Form Group cho Username -->
    <div class="form-group mb-4">
        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
    </div>

    <!-- Form Group cho Fullname -->
    <div class="form-group mb-4">
        <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Fullname">
    </div>

    <!-- Form Group cho Password -->
    <div class="form-group mb-4">
        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
    </div>

    <!-- Form Group cho Confirm Password -->
    <div class="form-group mb-4">
        <input type="password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
    </div>

    <!-- Submit Button -->
    <div class="form-group text-center">
        <button class="btn btn-primary btn-icon-split p-3" type="submit">
            Register
        </button>
    </div>

    <!-- Display Errors -->
    <?php
    if (isset($errors)) {
        echo "<ul style='list-style-type: none;'>";
        foreach ($errors as $err) {
            echo "<li class='text-danger'>$err</li>";
        }
        echo "</ul>";
    }
    ?>
</form>

</div>

<?php include 'app/views/shares/footer.php'; ?>
