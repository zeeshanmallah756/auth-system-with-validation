<?php
include_once "helpers/view_js.php";
add_style("assets/css/style.css");
add_style("assets/css/register.css");
include_once "includes/header.php";
?>

<main class="container">
    <section class="auth-card">

        <div class="auth-header">
            <h2>Create Your Account</h2>
        </div>
        <form
            action="process/register_process.php"
            method="POST"
            enctype="multipart/form-data"
            id="register-form">

            <!-- First Name -->
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" placeholder="John">
                <small id="first-name-msg">Hello</small>
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" placeholder="Doe">
                <small id="last_name_msg"></small>
            </div>

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

            <!-- Profile Image -->
            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" id="image" name="image">
                <small id="image_msg"></small>
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label>Gender</label>
                <div class="radio-group">
                    <label class="radio-option">
                        <input type="radio" name="gender" value="male">
                        <span>Male</span>
                    </label>

                    <label class="radio-option">
                        <input type="radio" name="gender" value="female">
                        <span>Female</span>
                    </label>
                </div>
                <small id="gender_msg"></small>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
                <small id="dob_msg"></small>
            </div>

            <!-- Buttons -->
            <div class="form-actions">
                <button type="submit" class="btn-primary">Register</button>
                <button type="reset" class="btn-secondary">Cancel</button>
            </div>

        </form>

        <div class="auth-footer">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>

    </section>
</main>

<?php
add_script("assets/js/register.js");
include_once "includes/footer.php";
?>
