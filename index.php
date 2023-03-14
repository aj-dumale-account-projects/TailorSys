<?php 

$page_title = "TailorSys";
include_once "layout_head.php"; 


if (isset($_POST['signin_btn'])) {
    echo "Signin button is clicked:";
}elseif(isset($_POST['signup_btn'])){
    echo "sign up button is clicked:";
}else{
    // nothing else
}

?>

<form id="login" class="input-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <input type="text" class="input-field" placeholder="Username" required>
        <input type="password" class="input-field" placeholder="Password" required>
        <span>Forgot Password? <a href="#" class="forgot_pass">Click Here</a></span>
        <button type="submit" name="signin_btn" class="submit-button">Log In</button>
</form>


<form id="register" class="input-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <input type="email" class="input-field" placeholder="Email Address" required>
    <input type="text" class="input-field" placeholder="Name" required>
    <input type="password" class="input-field" placeholder="Password" required>
    <input type="password" class="input-field" placeholder="Confirm Password" required>
    <input type="submit" name="signup_btn" class="submit-button" value="sign up">
</form>

<div class="social-icons">
    <img src="libs/images/fb.png">
    <img src="libs/images/tw.png">
    <img src="libs/images/gp.png">
</div>

<?php include_once "layout_foot.php"; ?>
 
    
