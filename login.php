<?php
include_once "helpers/view_js.php";
add_style("assets/css/style.css");
add_style("assets/css/login.css");
include_once "includes/header.php";
?>

<main class="container">
    <section class="auth-card">

        <!-- Header -->
        <div class="auth-header">
            <h2>Welcome Back</h2>
            <p>Login to your account</p>
        </div>

        <!-- Main Message -->
        <div id="login-msg" class="form-msg"></div>

        <!-- Login Form -->
        <form 
            action="process/login_process.php" 
            method="POST" 
            id="login-form"
        >

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="john@example.com">
                <small id="email_msg"></small>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••">
                <small id="password_msg"></small>
            </div>

            <!-- Remember Me -->
            <div class="form-group">
                <label class="custom-input checkbox">
                    <input type="checkbox" name="remember">
                    <span class="checkmark"></span>
                    Remember Me
                </label>
            </div>

            <!-- Buttons -->
            <div class="form-actions">
                <button type="submit" class="btn-primary">Login</button>
                <button type="reset" class="btn-secondary">Cancel</button>
            </div>

            <!-- Forgot Password -->
            <div class="auth-footer" style="margin-top: 1rem;">
                <a href="forgot_password.php">Forgot Password?</a>
            </div>

        </form>

        <!-- Register Link -->
        <div class="auth-footer">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>

    </section>
</main>

<?php
include_once "includes/footer.php";
?>
