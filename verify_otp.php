<?php
include_once "helpers/view_js.php";
add_style("assets/css/style.css");
add_style("assets/css/verify_otp.css");
include_once "includes/header.php";
?>

<main class="container">
    <section class="auth-card">

        <!-- Header -->
        <div class="auth-header">
            <h2>Verify Your OTP</h2>
            <p>Enter the 6-digit code sent to your email</p>
        </div>

        <!-- Main Message -->
        <div id="otp-msg" class="form-msg"></div>

        <!-- OTP Form -->
        <form action="process/verify_otp_process.php" method="POST" id="otp-form">

            <!-- OTP Input -->
            <div class="form-group">
                <label for="otp">Enter OTP (6 digits)</label>
                <input 
                    type="text" 
                    id="otp" 
                    name="otp" 
                    maxlength="6" 
                    required
                >
                <small id="otp_msg"></small>
            </div>

            <!-- Verify Button -->
            <div class="form-actions">
                <button type="submit" class="btn-primary">Verify OTP</button>
            </div>

            <!-- Resend OTP -->
            <div class="auth-footer">
                <button type="button" id="resend-btn" class="btn-secondary" disabled>Resend OTP</button>
                <p class="timer-text">You can resend OTP in <span id="timer">60</span>s</p>
            </div>

        </form>

    </section>
</main>

<?php
include_once "includes/footer.php";
?>
