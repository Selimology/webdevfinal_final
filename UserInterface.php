<?php

class UserInterface{
    public function login()
    {
        return '
        <div>
        <h1>Internship Time Tracker</h1>        
        <form action="authentication.php" method="POST">
            <input type="hidden" name="checkUser">
            <div class="loginform__control">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="loginform__control">
                <input type="password" required>
                <label>Password</label>
            </div>
            <button name="loginform_submit" class="loginform__btn">Login</button>
            <div class="loginform__signup">
            Don't have an account? <a href="registerform.php">Register</a>
            </div>
        </form>
        </div> ';
    }
    '

    public function register()
    {
        return '
        <div class="loginform">
        <h1>Register to Internship Time Tracker</h1>        
        <form action="authentication.php" method="POST">
        <input type="hidden" name="checkUser">
        <div class="loginform__control">
            <input type="text" required>
            <label>Username</label>
        </div>
        <div class="loginform__control">
            <input type="password" required>
            <label>Password</label>
        </div>
        <button name="loginform_submit" class="loginform__btn">Login</button>
        <div class="loginform__signup">
            <Don't have an account? <a href="registerform.php">Register</a>
        </div>
    </form>
    </div>';
    }

}