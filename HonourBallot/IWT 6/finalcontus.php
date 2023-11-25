<html>
<head>
    <title>Honour Ballot</title>
    <link rel="stylesheet" type="text/css" href="stylescontus.css">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script> 

    

</head>
<body>
    <!-- header-->
    
    <header class="header">
       
        <!-- Brand and Slogan-->
        <div class="header-left" style="margin-right: 25px;">
          <!-- Logo-->
        <a href="#default"><img src="logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
        <div class="brand">
            <h2 id="logo" style="line-height: 10px;font-family:Lucida Handwriting,cursive;"><b>HonourBallot</b></h2><br>
            <h6 id="slogan" style="line-height: 2px;">We Value Your Vote</h6>
        </div>
        </div>

        <div class="navbar" id="Topnav">
          <a href="#default"><button class="active" type="button" id="bttn1"><b>Home</b></button></a>
          <div class="dropdown">
            <button class="dropbtn">Category</button>
            <div class="dropdown-content">
              <a href="#">Awards</a>
              <a href="#">Candidates</a>
              <a href="#">About Award Ceremony</a>
              <a href="#">Nomination Result</a>
              <a href="finalspon.html">Sponsors</a>
            </div>
          </div>
          <a href="finalvotep.html"><button  type="button" id="bttn1">Vote Now</button></a>
          <a href="#contact"><button  type="button" id="bttn1">Contact Us</button></a>
          <a href="#about"><button  type="button" id="bttn1">About Us</button></a>
          <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
        </div>
        <!--User button with photo-->
        <div class="userbtn">
          <div class="userbtntext">Hello!<br><a href="#login" class="userlink">Login/SignUp</a></div>
          <img src="myuser.png" class="userbtnimg" height="50px" width="50px">
        </div>
        
      </header>
    <!--code here-->
    <!--<section class="section-1" id="sec1">
      <div class="u-shape-1"></div>
      <img class="u-image-1" src="manaward.jpg" data-image-width="739" data-image-height="1080">
      <div class="u-group-1">
        <div class="u-container-layout-1">
          <h2 class="u-text-1"> Vote Now</h2>
          <h3 class="u-text-2">Make Your favourite candidate<br> A Nominee & A Winner
          </h3><br>
          <a href="#" class="u-btn-1">Register Now</a>
        </div>
      </div>
    </section>-->


    <hr style="background-color: black; height: 1px;">
    <div class="img1">
    <section class="section-1" id="sec1">
    <div class="contact-container">
        <div class="contact-info">
            <h1 class="u-text-1">Contact Us</h1>
            <br>
            
            
            <p class="address"><img src="loc4.png" width="40px" height="40px"><strong>Address:</strong><br>New Kandy Road,<br>Malabe.</p>
            <p class="Tele"><img src="phone4.jpg" width="40px" height="40px"><strong>Telephone:</strong><br>+94 12 345 678</p>
            <p class="email"><img src="mail.jpg" width="40px" height="40px"><strong>Email:</strong><br>honourballot@gmail.com</p> 

            
            <p class="u-text-2">Follow Us on <img src="icon3.png" width="100px" height="20px"></p> 
            <div class="icon"> 
                      </div>
        
            
            </div>
            </div>       
           </div>
           
        
        </from>
        
        <div class="contact">
    <section class="sec2">
      <div class="contact-form">
        <h2 class="u-text-1">Tell Us about<br>your idea</h2>
        <br>
        <!--<input type="submit" value="submit" class="submit-button">-->
        </div>
      </section>
      
      <section class="sec3">
        <div class="vdg">
          
        <form action="post_cont.php" method="POST">

        
        <input type="text" id="name" name="name"  placeholder="Full Name " required>
        <br>

        <input type="email" id="email" name="email" placeholder="Email "  required>
        <br>

        <textarea id="message" name="message"  placeholder="Message " required></textarea>
        
        <input type="submit" value="submit" class="submit-button">
        </form>
        </div>
      
    </section>
    </div>
  
  
  
        

    

<!--<section class="sec3">
      <div>

      </div>
    </section>
    <section class="sec4">
      <div>

      </div>
    </section>-->
    <!--code here-->




    <hr style="background-color: black;height:1px;">
    <footer>
      <div class="footer-container">
       
          <div class="footerhead1">
            <img src="Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
            <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
            <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
          </div>
          <div class="footerhead" id="fhd2">
            <h2>Categories</h2>
            <a href="#">Awards</a>
                <a href="#">Candidates</a>
                <a href="#">About Award Ceremony</a>
                <a href="#">Nomination Result</a>
                <a href="finalspon.html">Sponsors</a>
          </div>
          <div class="footerhead" id="fhd3">
            <h2>We are</h2>
              <a href="#">About Us</a>
              <a href="#">Contact Us</a>
              <a href="#">What is an Online Voting System?</a>
          </div>
          <div class="footerhead" id="fhd4">
            <h2>Voter</h2>
              <a href="#">Log in</a>
              <a href="#">FAQs</a>
              <a href="#">Terms & Condition</a>
              <a href="#">Privacry & Policy</a>
          </div>
        
        
        <div class="footer-email">
            <h2>Connect with Us</h2>
            <input type="email" placeholder="Enter your email address" id="footermail"> <input type="submit" Value="Subscribe" id="footermail-btn">
        </div>
      </div>
     </footer>
</body>
</div>
</html>