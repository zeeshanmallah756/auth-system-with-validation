<?php

include_once "includes/header.php";
?>
<div class="container">
    <div class="register-container">
        <div class="register-form-div">
            <h2 class="heading">CREATE YOUR ACCOUNT</h2>
            <form action="process/register_process.php" id="register-form">
                <div>
                    <div>
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name">
                        <p id="first_name_msg"></p>
                    </div>
                    <div>
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name">
                        <p id="last_name_msg"></p>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                        <p id="email_msg"></p>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        <p id="password_msg"></p>
                    </div>
                    <div>
                        <label for="image">Profile Image</label>
                        <input type="file" id="image" name="image">
                        <p id="image_msg"></p>
                    </div>
                    <div>
                        <label for="">Gender</label>
                        Male <input type="radio" id="male" name="gender" value="male">
                        female <input type="radio" id="female" name="gender" value="female">
                        <p id="gender_msg"></p>
                    </div>
                    <div>
                        <label for="dob">Date of birth</label>
                        <input type="date" name="dob" id="dob">
                        <p id="dob_msg"></p>
                    </div>
                </div>
                <div id="buttons">
                    <button type="submit" name="register" id="register-btn">Register</button>
                    <button type="reset" id="cancel-btn">Cancel</button>
                </div>
            </form>
            <p class="paragraph1">Already Have Account <a href="login.php">Login Here</a></p>
        </div>
    </div>
</div>

<?php
include_once "includes/footer.php";
?>