<?php 

include_once "config/database.php";
include_once "objects/user.php";

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$page_title = "TailorSys";
include_once "layout_head.php"; 


if (isset($_POST['signin_btn'])) {


    

}elseif(isset($_POST['signup_btn'])){

    if ($_POST['password'] != $_POST['confirm_password']) {
        echo "<div class='error_message'>Oops! Your passwords don't match.</div>";
    }else{
        $user->name = $_POST['name'];
        $user->email_address = $_POST['email_address'];
        $user->password = $_POST['password'];
        if ($user->create()) {
            echo "<div class='success_message'>Welcome aboard!</div>";
        }else{
            echo "<div class='error_message'>We're sorry, but we couldn't register you at this time.</div>";
        }
    }
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
    <input type="email" name="email_address" class="input-field" placeholder="Email Address" required>
    <input type="text" name="name" class="input-field" placeholder="Name" required>
    <input type="password" name="password" class="input-field" placeholder="Password" required>
    <input type="password" name="confirm_password" class="input-field" placeholder="Confirm Password" required>
    <input type="submit" name="signup_btn" class="submit-button" value="sign up">
</form>

<div class="social-icons">
    <img src="libs/images/fb.png">
    <img src="libs/images/tw.png">
    <img src="libs/images/gp.png">
</div>

<?php include_once "layout_foot.php"; ?>
 
    
