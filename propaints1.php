<!DOCTYPE html>
<html>
<title>propiants</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
     
<link rel="stylesheet" type="text/css" href="E:\xampp\htdocs\goutam\css\nabvar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

<style>



{box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img15.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}





</style>


<body>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large"></span>
    <p><a href="login.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Login</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" img="" class="w3-bar-item w3-button w3-wide"><b><i>pro paints</i></b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
       <a href="http://localhost/goutam/notika-master/notika/green-horizotal/" class="w3-bar-item w3-button">Admin</a>
      <a href="propaints1.php" class="w3-bar-item w3-button">Home</a>
      <a href="Service.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>Service</a>
      <a href="employee.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Employment</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Complaint</a>      


      <a href="feedback.php" class="w3-bar-item w3-button"><i class="fa fa-heart"></i>Feedback </a>
         <a href="about.php" class="w3-bar-item w3-button"><i class="fa fa-bars"></i> Aboutus</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-diamond"></i> CONTACT</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"> </i> Login</a>
      <a href="signup.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Signup</a>
    


      <a href="useraccount.php" class="w3-bar-item w3-button"><i class="fa fa-heart"></i>My  Account  </a>
         <a href="contractor.php" class="w3-bar-item w3-button"><i class="fa fa-bars"></i> contractor Account </a>
      <a href="selleraccount.php" class="w3-bar-item w3-button"><i class="fa fa-diamond"></i> Seller Account </a>
      <a href="product.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"> </i> Product </a>
          </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>





<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">digital work</p>
      <p></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"> customer satisfaction</p>
      <p></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">feedback</p>
      <p></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>.</p>
    </div>
  </div>
</div>
<!-------------------chat box------------->
 <div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
  <!-----------chat-box----------------->
<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know design.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="img7.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img57.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>jone wick</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p></p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img56.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>cooler d</h3>
          <p class="w3-opacity">Art Director</p>
          <p></p>
            <p>    <button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact   </button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="goutam.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Goutam ahirwar</h3>
          <p class="w3-opacity">Web Designer</p>
          <p></p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>  <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#snoozed?compose=new">  Contact  </a></button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="hemant.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>hemant zade</h3>
          <p class="w3-opacity">Designer</p>
          <p></p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="img2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="img3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="img4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="img5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="img6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="img7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="img10.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="img15.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>we try to help our customer at top level of satisfaction<br>
      .</p>
      <p>secound motto of us is provide the employment to youth.<br>
      .</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i> customer satisfaction</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>job employment</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>feedback area</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->

<!-- Contact Section -->
<form action="" method="POST">
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> bhopal,india</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 9131100938</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: goutam91311@gmail.com</p>
        <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email:hemantzade7000@gmail.com</p>

    <br>
    <form action=""  method="POST">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" name="username"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" name="email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" name="message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>    <!-- Image of location/map -->
    <img src="" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>
</form>

<!---------------------------maps-------------------------->
<!---------------------------maps----------------------nd---->
<!------------------------------------footer--------------------->


  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="propaints1.php" title="W3.CSS" target="_blank" class="w3-hover-opacity">propaints.com</a></div>

<!-- End page content -->
</div>
<!------------------------------------footer end ----------------------------->
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>



<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS contactone ";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
error_reporting();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS contactone (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
subject  VARCHAR(30) NOT NULL,
message  VARCHAR(30) NOT NULL,

reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
error_reporting();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a = $_POST['username'];
$b = $_POST['email'];
$c = $_POST['subject'];
$d = $_POST['message'];
$sql = "INSERT INTO contactone (username,email,subject,message)
VALUES ('$a', '$b', '$c','$d')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    header("Location: propaints1.php"); 

    error_reporting();
?>























</body>
<!-----------------chatbox------------->
<script type="text/javascript">
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</html>