<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Validation</title>
    <?php include('./partials/header.php')?>
</head>
<body>
    
    <div class="user-card round5">
        <div class="login-box">
            <form class="login-form" name="login" action="">
                <input type="username" name="username" class="username" placeholder="username" />
                <input type="password" name="password" class="password" placeholder="password" />
                <input type="submit" name="login" value="Login" class="login" />
            </form>
    
            <div class="or"></div>
    
            <a href="#" class="login-with-fb">
                <span class="icon fa fa-facebook"></span>
                Login with facebook
            </a>
            <a href="#" class="login-with-google">
                <span class="icon fa fa-google-plus"></span>
                Login with google
            </a>
        </div>
        <div class="signup-box">
            <form class="signup-form" name="signup" action="">
                <input type="username" name="username" class="username" placeholder="username" />
                <input type="email" name="email" class="email" placeholder="email" />
                <input type="password" name="password" class="password" placeholder="password" />
                <input type="password" name="confirm-password" class="confirm-password" placeholder="confirm-password" />
                <input type="submit" name="signup" value="Signup" class="signup" />
            </form>
        </div>
    
        <!-- Card Footer -->
    
        <div class="footer">
            <span>or </span><a class="toggle-link" href="#">Sign Up</a>
        </div>
    </div>
    </body>
    <script>

        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
        
    </script>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/login.js"></script>
    </body>
    
    
    <div id="stop" class="scrollTop">
      </div>
    </html>