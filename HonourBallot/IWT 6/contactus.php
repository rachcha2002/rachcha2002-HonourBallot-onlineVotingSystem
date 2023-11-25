<!DOCTYPE html>
<html>
    <head>
        <title>Honor Ballot</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <meta name="viewport" content="width,initial-scale=1.0">
        <script src="src.js"></script>
    </head>
    <body>
        <!--header-->
        <header class="header">

            <!--Brand and Salogan-->
            <div class="header-left" style="margin-right: 25px;">
            
                <!--Logo-->
                <a href="#default"><img src="logo_1.png" alt="Honor Ballot" class="logo" id="headlogo" height="100px" width="100px"></a>
                <div class="brand">
                    <h2 id="logo" style="line-height: 10px; font-family:Lucida Handwriting,cursive;"><b>HonorBallot</b></h2>
                     <br>
                     <h6 id="slogan" style="line-height: 10px;">We Value Your Vote</h6>
                </div>
            </div>
            <div class="navbar" id="Topnav">
                <a href="#default"><button class="active" type="button" id="bttn1"><b>Home</b></button></a>
                 <div class="dropdown">
                    <button class="dropdown-content"></button>
                    <div class="dropdown-content">
                        <a href="#">Award</a>
                        <a href="#">Candidates</a>
                        <a href="#">About Award ceremony</a>
                        <a href="#">Nomination Result</a>
                        <a href="#">Sponsors</a>
                    </div>
                 </div>
                 <a href="#contact"><button type="button" id="bttn1">Vote now</button></a>
                 <a href="#contact"><button type="button" id="bttn1">Contact Us</button></a>
                 <a href="#contact"><button type="button" id="bttn1">About Us</button></a>
                 <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
                </div>
                <!--User button with photo-->
                <div class="userbtn">
                    <div class="userbtntext">Hello!<br><a href="#login" class="userlink">Login/singUp</a></div>
                    <img src="myuser.png" class="userbtnimg" height="50px" width="50px">
                </div>
        </header>
        <!--code here-->
        <hr style="background-color: black;height:1px;">
        <div class="contact-container">
          <div class="contact-info">
            <h1>Contact Us</h1>
            <br>
          
          <p class="address"><strong>Address:</strong><br>New Kandy Road,<br>Malabe.</p>
          <p class="Tele"><strong>Telephone:</strong><br>+94 12 345 678</p>
          <p class="email"><strong>Email:</strong><br>abcdef@gmail.com</p> 
          </div>       
        
        <div class="contact-form">
          <section class="sec1">
          <h2 class="t1">Tell us about<br>your idea</h2>
          <br><br>
          
        </section>
        <br>

        <section class="sec2">
          <form action="submit_form.php" method="POST">
            <lable for="name">Name:</lable>
            <input type="text" id="name" name="name" required>
            <br>

            <lable for="email">Email:</lable>
            <input type="email" id="email" name="email" required>
            <br>

            <lable for="message">Message:</lable>
            <textarea id="message" name="message" required></textarea>
            <br><br>
            <input type="submit" value="submit">

          </form>
        </section>
        </div>
        </div>

        <!--code here-->
          
        <hr style="background-color: black;height:1px;">
        <footer>
          <div class="footer-container">
        
            <div class="footerhead1">
              <img src="log2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px">
              <h3 style="font-family: Lucida Handwriting,cursive;">HonorBallot</h3>
              <p>Cast Your vote on favourite candidate<br>in different award ceemonies</p>
            </div>
            <div class="footerhead" id="fhd2">
              <h2>Categories</h2>
              <a href="#">Awards</a>
              <a href="#">Candidates</a>
              <a href="#">About Award Ceremony</a>
              <a href="#">Nomination Result</a>
              <a href="#">Sponsors</a>
              
            </div>
            <div class="footerhead" id="fhd3">
              <h2>We are</h2>
              <a href="#">About Us</a>
              <a href="#">About Us</a>
              <a href="#">What is an Online Voting system?</a>
            </div>
            <div class="footerhead" id="fhd4">
              <h2>Voter</h2>
              <a href="#">Log in</a>
              <a href="#">FAQs</a>
              <a href="#">Terms & Condition</a>
              <a href="#">Privacy & Policy</a>
            </div>
            <div class="footer-email">
              <h2>Connect with Us</h2>
              <input type="email" placeholder="Enter Your email address" id="footermail"> <input type="submit" value="Subscribe" id="footermail-btn" Value="Subscribe" id="footermail-btn">
            </div>
          </div>
        </footer>
        </body>
        
        </html>