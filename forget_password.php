<?php
include_once "helpers/view_js.php";
add_style("assets/css/style.css");
add_style("assets/css/forget_password.css");

include_once "includes/header.php";
?>

<main class="container">
    <section class="auth-card">

        <!-- Header -->
        <div class="auth-header">
            <h2>Forgot Your Password?</h2>
            <p>Enter your registered email to receive a password reset link.</p>
        </div>

        <!-- Main Message -->
        <div id="forget-msg" class="form-msg"></div>

        <!-- Form -->
        <form action="process/forget_password_process.php" method="POST" id="forget-form">

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required
                >
                <small id="email_msg"></small>
            </div>

            <!-- Submit Button -->
            <div class="form-actions">
                <button type="submit" class="btn-primary">Send OTP</button>
            </div>

            <!-- Footer -->
            <div class="auth-footer">
                <p>Remember your password? <a href="login.php">Login here</a></p>
            </div>

        </form>

    </section>
</main>

<?php
include_once "includes/footer.php";
?>
