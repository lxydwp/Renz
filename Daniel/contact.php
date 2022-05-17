<!DOCTYPE html>
<html>
<head>
    <title>University Website Design</title>
    <?php include('./partials/header.php')?>
</head>

<body>
    
    <section class="header">
        <div class="text-box">
            <h1>G.E.E.R Dogs & Cats</h1>
            <p>The G.E.E.R Dogs & Cats</p>
        </div>

        <nav>
            <a href="index.html"><img src="images/dogcat.png"></a>
            <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>  
                <ul>
                    <li><a href="Home.php">HOME</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="About.php">ABOUT US</a></li>
                    <li><a href="login.php">LOGIN/SIGNUP</a></li>
             </ul>
                </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    
    <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="txtb">

            <label>Full Name :</label>
            <input type="text" name="" value="" placeholder="Enter Your Name">
        </div>
    
        <div class="txtb">
            <label>Email :</label>
            <input type="email" name="" value="" placeholder="Enter Your Email">
        </div>

        <div class="txtb">
            <label>Message :</label>
            <textarea></textarea>
        </div>
        <a class="btn">Send</a>
    
    </div>

</body>
</html>
