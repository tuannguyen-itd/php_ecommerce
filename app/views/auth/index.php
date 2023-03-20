<!DOCTYPE html>
<html>
<head>
<title>PHP Course</title>
<link rel="stylesheet" href="../../../public/auth/style.css">
</head>
<body>

<h2>Sign in/up Form</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../../process/register.php" method="POST">
                <h1>Create Account</h1>
                <input type="text" name="fullname" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="text" name="phone" placeholder="Phone">
                <input type="text" name="address" placeholder="Address">
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../../process/login.php" method="POST">
                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
<script src="../../../public/auth/script.js"></script>
</body>
</html> 