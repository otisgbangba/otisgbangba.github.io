<?php
//Step1
 $db = mysqli_connect('localhost','root','Halleluyah@2910','FORM')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html lang="en">
<title>JULIUS PORTFOLIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b>JULIUS<br>OTITOLAIYE</b></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT ME</a> 
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">JULIUS ADEMOLA</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">&#9776;</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-row">
    <div class="w3-third">
      <img src="man watching tablet.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="phone on the road.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="nature cliff.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-third">
      <img src="mini library.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
      <img src="posing lady.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="man standing.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-third">
      <img src="bicycle.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      <img src="beautiful baby.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="racing boats.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">&laquo;</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">&raquo;</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b>About Me</b></h4>
    <img src="my pics.jpg" alt="Me" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>My Name</h4>
      <p>Ademola Julius Otitolaiye is a curious Multi-Cloud Networking Engineer who enjoys solving problems with computers, software, and just about any complex system he can get his hands on. He 
enjoys helping others make sense of difficult problems. He has a general passion for software design and also familiar with the highest standards of software development. He has an understanding of how software interacts with a wider engineering solution and  an appreciable knowledge on software delivery through all phases of development and can 
effectively articulate technical challenges and solutions. In his free time, he reads Bibe, play games and spend time with his family.
      </p>
      <p>mail: jotitolaiye@gmail.com</p>
      <p>tel: +234-802-973-7471</p>
      <hr class="w3-opacity">
      <h4 class="w3-padding-16">Technical Skills</h4>
      <p class="w3-wide">Web Design/Development</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:95%">95%</div>
      </div>
      <p class="w3-wide">Cloud Security</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:85%">85%</div>
      </div>
      <p class="w3-wide">Multi cloud Engineer</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:80%">80%</div>
      </div>
      <p><button class="w3-button w3-light-grey w3-padding-large w3-margin-top w3-margin-bottom">Download Resume</button></p>
      <hr class="w3-opacity">

      <h4 class="w3-padding-16">How much I charge</h4>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">         <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
            <li class="w3-padding-16">Web Design/development</li>
            <li class="w3-padding-16">Cloud Networking</li>
            <li class="w3-padding-16">Cloud Security</li>
            <li class="w3-padding-16">Multi-cloud Engineer</li>
            <li class="w3-padding-16">
              <h2>$ 100</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large">Sign Up</button>
            </li>
          </ul>
        </div>
        
        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">Web Design(front-end)</li>
            <li class="w3-padding-16">Web development(back-end)</li>
            <li class="w3-padding-16">Cloud Native</li>
            <li class="w3-padding-16">Cyber-Security</li>
            <li class="w3-padding-16">
              <h2>$ 250</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <a href="form.html"<button class="w3-button w3-white w3-padding-large">Sign Up</button></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>Contact Me</b></h4>
      <p>Do you want require my services? Fill out the form and fill me in with the details :) I love meeting new people!</p>
      <form action="about_me.php" target="_blank">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send Message</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-grey">  
    <div class="w3-row-padding">
      <div class="w3-third">
        <h3>INFO</h3>
        <p>Whatever your hand findeth doing, do it with all your heart.</p>      
      </div>
    
      <div class="w3-third">
        <h3>BLOG POSTS</h3>
        <ul class="w3-ul">
          <li class="w3-padding-16 w3-hover-black">
            <img src="dog pic.jpg" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Thots</span><br>
            <span>Know yourself, be yourself and appreciate yourself</span>
          </li>
          <li class="w3-padding-16 w3-hover-black">
            <img src="rose pic.jpg" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Thots</span><br>
            <span>Working in the Cloud</span>
          </li> 
        </ul>
      </div>

      <div class="w3-third">
        <h3>POPULAR TAGS</h3>
        <p>
          <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Nigeria</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Remote work</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Internship</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Certification</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Linkedin</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ranchers</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cloud Study Network</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Github</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Kubernetes</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Networking</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Multi-Cloud</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">APIs</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">E-commerce</span>
        </p>
      </div>
    </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.github.com/otisgbangba" title="My Github" target="_blank" class="w3-hover-opacity">Otisgbangba.io</a></div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

<?php
//Step2
$query = "SELECT * FROM Contact_Me";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM Send_Message";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM Pro_Sign_Up";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM Basic_Sign_Up";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM Sign_Up_form";
mysqli_query($db, $query) or die('Error querying database.');


//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['first_name'] . ' ' . $row['last_name'] . ': ' . $row['email'] . ' ' . $row['city'] .'<br />';
}
//Step 4
mysqli_close($db);
?>
</body>
</html>