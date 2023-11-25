<html>
<head>
    <title>Honour Ballot</title>
    <link rel="stylesheet" type="text/css" href="header&footer.css">
    <style>
        .section-0{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 30px;
    }
    .section-0 .title{
        font-size: 4rem;
        margin: 2rem;
        display: flex;
        justify-content: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight:1000;
        padding: 1rem;
        
    }
    .section-0 .heropart{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 60%;
    }
    .heropart .quote h3{
        font-size: 1.2rem;
        font-family: Brush Script MT,cursive;
        font-weight: 800;
    }
    .questions table{
        border-collapse: collapse;
        border: 1px;
        font-family:Brush Script MT,cursive;
        /*border-collapse: collapse;*/
        width: 100%;
        font-size:1.5rem;
    }
    table, th, td {
    border: 1px solid black;
  }
  
  th, td {
    padding: 8px;
    text-align: center;
    /*border: none; /* Remove borders from table cells */
  }

    </style>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

</head>
<body>
    <!-- header-->
    
    <header class="header">
       
        <!-- Brand and Slogan-->
        <div class="header-left" style="margin-right: 25px;">
          <!-- Logo-->
        <a href="#default"><img src="h&fimages\logo_1.png" alt="Honour Ballot Image" class="logo" id="headlogo" height="100px" width="100px" ></a>
        <div class="brand">
            <h2 id="logo" style="line-height: 10px;font-family:Lucida Handwriting,cursive;"><b>HonourBallot</b></h2><br>
            <h6 id="slogan" style="line-height: 2px;">We Value Your Vote</h6>
        </div>
        </div>

        
        <!--User button with photo-->
        <div class="userbtn">
            <?php
            //session_start(); // Start the session

            // Check if the session is started or not
            $isSessionStarted = isset($_SESSION['username']);

            if ($isSessionStarted) {
                // Session is started
                $username = $_SESSION['username'];
                echo '<div class="userbtntext">Hello!<br><a onclick="toggleDropdown()"> ' . $username . '</a></div>';
            } else {
                // Session is not started
                echo '<div class="userbtntext">Hello!<br><a href="login.php" class="userlink">Login</a>/<a href="Register_form.php" class="userlink">SignUp</a></div>';
            }
            ?>
            <img src="h&fimages\uuser.png" class="userbtnimg" height="40px" width="40px">
            <div id="dropdownMenu" class="headerdropdown-content">
                <!-- Dropdown menu content -->
                <!-- Add your menu items here -->
                <a href="profile.html">Profile</a>
                <a href="logoff.php">Logout</a>
            </div>
        </div>
        <script>
            function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";

                // Close dropdown when clicking outside
                        document.addEventListener("click", function(event) {
                            var dropdownMenu = document.getElementById("dropdownMenu");
                            var userBtn = document.querySelector(".userbtn");
                            
                            if (!dropdownMenu.contains(event.target) && !userBtn.contains(event.target)) {
                                dropdownMenu.style.display = "none";
                            }
                        });
            }
            
        </script>   

      </header>
    
       


    <!--code here-->
    <section class="section-0" id="sec0">
  <h2 class="title">User Questions</h2>
  <div class="heropart">
    <div class="quote">
      <h3>Make a good impression On users</h3>
    </div>
    
  </div>
</section>

<section class="section-1" id="sec1">
  


<center>
<div class="questions tbl" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);width:80%;">
    <table border="1">
    <tr>
        <th class="col1">QuestionId</th>
        <th class="col2">UserName</th>
        <th class="col3">Question</th>
        <th class="col4">Answer</th>
        <th class="col5">Update Answer</th>
        <th class="col6">Delete</th>
        
    </tr>
   <?php
   include_once "config.php";
   $sql = "SELECT * FROM userquestion";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["qID"]."</td><td>".$row["userName"]."</td><td style='text-align:left'>".$row["question"]."</td><td style='text-align:left'>".$row["answer"]."</td>";
        echo "<td><a href='admin@edituserq.php?id=".$row["qID"]."&name=".$row["userName"]."&question=".$row["question"]."&answer=".$row["answer"]."'>Update<span><img src='edit.png' height='25px' width='25px' style='margin-left:5px;'></span></a></td>";

        echo "<td><a href='deleteuserQ&As.php?id=".$row["qID"]."'>Delete<span><img src='bin.png' height='22px' width='22px' style='margin-left:5px;'></span></a></td></tr>";
    }
   } else {
    echo "</table><br>No results found";
   }
   echo "</table>";
   mysqli_close($conn);
   ?> 
    
</div>
</center>

</section>

    <script src="./FAQs.js"></script>



    <hr style="background-color: black;height:1px;">
    <footer>
      <div class="footer-container">
       
          <div class="footerhead1">
            <img src="h&fimages\Logo2.png" alt="logo" class="logo" id="footlogo" height="150px" width="150px" > 
            <h3 style="font-family:Lucida Handwriting,cursive;">HonourBallot</h3>
            <p>Cast your vote on favourite candidate<br>in different awardsand award ceemonies</p>
            <div>
              <a href="#"><img src="h&fimages\fb.png" class="fimg"></a>
                <a href="#"><img src="h&fimages\instagram.png" class="fimg"></a>
                <a href="#"><img src="h&fimages\twitter.png" class="fimg"></a>
                
            </div>
          </div>
          
          
          
        
        
        
      </div>
      <center>
        <div class="copyright"><h4>© 2023 HonourBallot. All rights reserved.</h4></div>
      </center>
      
     </footer>
</body>

</html>