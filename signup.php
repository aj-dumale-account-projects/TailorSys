<?php

$page_title = "Sign Up";
include_once "layout_head.php";

?>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="post">

<h1> betlog 123</h1>
<div class="signup-container">
    <div class="signup-header">
        <h2>Create an account now!</h2>
        <h4>We handle your garments properly.</h4>

    </div>
    <hr>
    <div class="signup-content">
        <input type="text" name="firstname" placeholder="First Name" required>
        <input type="text" name="contact_no" placeholder="Contact Number" required>
        <input type="email" name="email_address" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Create</button>
    </div>
</div>

</form>


<?php include_once "layout_foot.php"; ?>