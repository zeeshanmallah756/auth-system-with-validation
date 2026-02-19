<?php

    include_once "includes/header.php";
?>
<div class="container">
    <div class="register-container">
        <div class="register-form-div">
            <h2 class="heading">CREATE YOUR ACCOUNT</h2>
            <form action="" id="register-form" >
                <div  >
                <div>
                    <input type="text" id="first-name" name="first_name" >
                </div>
                <div>
                    <input type="text" id="last-name" name="last_name" >
                </div>
                </div>
                <div id="buttons">
                    <button type="submit" name="register" id="register-btn">Register</button>
                    <button type="reset" id="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include_once "includes/footer.php";
?>
