<?php 

$page_title = "TailorSys";
include_once "layout_head.php"; 



?>

<!-- signup content here -->
<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="button"></div>
                <button type="button" class="toggle-button" onclick="login()">Sign In</button>
            <button type="button" class="toggle-button" onclick="register()">Register</button>
        </div>

        <div class="social-icons">
            <img src="libs/images/fb.png">
            <img src="libs/images/tw.png">
            <img src="libs/images/gp.png">
        </div>
        <form id="login" class="input-group" action="login_process.php" method="post">
            <input type="text" class="input-field" placeholder="Username" required>
            <input type="text" class="input-field" placeholder="Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" value="login" class="submit-button">Log In</button>
        </form>
        <form id="register" method="post" class="input-group">
            <input type="text" class="input-field" placeholder="Username" required>
            <input type="email" class="input-field" placeholder="Email Address" required>
            <input type="text" class="input-field" placeholder="Password" required>
            <input type="text" class="input-field" placeholder="Confirm Password" required>
            <input type="checkbox" class="check-box"><span>I Agree to the Terms & Conditions</span>
            <button type="submit" value="register" class="submit-button">Register</button>
        </form>
    </div>
</div>

<?php include_once "layout_foot.php"; ?>
 
    
