<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/26956befcd.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
        <div class="container">
            <nav>
                <img src="Images/Logo.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#Contacts">Contacts</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars"onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>UNIVERSITY OF LIMPOPO STUDENT</p>
                <h1>Hi, I'm <span>Listen</span><br>Matsimbi <span>from</span><br>Limpopo <span>South</span> Africa</h1>
            </div>
        </div>
    </div>
    <!-- ----------about---------- -->
    <div id="About">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="Images/1728063979245.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>
                        The Following is the information you will need to learn about me and 
                        all my interests and all my hobbies as it is the first step to getting to know me.
                        I humbly welcome you to my CV page and hope you enjoy the content inside.</p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div>
                        <div class="tab-contents active-tab" id="skills"> 
                            <ul>
                                <li><span>Web Developer</span><br>Backend developer</li>
                                <li><span>App Development</span><br>Designing web/app interfaces</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>Project</span><br>Website development</li>
                                <li><span>Assigment</span><br>Library sytems</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>Primary school 2010-2017</span><br>Skhosana Primary school<br>Limpopo</li>
                                <li><span>High school 2018-2023</span><br>Masiza High School<br>Limpopo</li>
                                <li><span>Tertiary 2024-</span><br>University of Limpopo<br>Limpopo</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------services-------- -->

    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web developer</h2>
                    <p>
                        fehn k3rdn jn4g i3efnklmg kiwmp9m woi5twm 3irfm eijt5lek ekt5nk ewj4nmreln
                        erkmle335tmigrkteli54kmgf
                        gergl,rltr,hk65 h65 5hg5k grkg tm 4k e geky6.</p>
                        <a href="#">learn more</a>
                </div>
                      <div>
                        <i class="fa-solid fa-rocket"></i>
                    <h2>App developer</h2>
                    <p>
                        fehn k3rdn jn4g i3efnklmg kiwmp9m woi5twm 3irfm eijt5lek ekt5nk ewj4nmreln
                        erkmle335tmigrkteli54kmgf
                        gergl,rltr,hk65 h65 5hg5k grkg tm 4k e geky6.</p>
                        <a href="#">learn more</a>
                </div>

            </div>
        </div>
    </div>
    <!-----------Portfoilio----------->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
               <div class="work">
                <img src="Images/OIP (1).jpeg">
                <div class="layer">
                    <h3>Social Media App</h3>
                    <p>an app that connects you to different people around the world
                        Download it on Apple Store or Play Store
                    </p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
               </div>
               <div class="work">
                <img src="Images/OIP.jpeg">
                <div class="layer">
                    <h3>Music App</h3>
                    <p>an app that connects you to different music sounds around the world.
                        And you can listen to your favourite songs and artists'
                        Download it on Apple Store or Play Store
                    </p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
               </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>

<!-----------Contacts----------->
<div id="Contacts">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact me</h1>
                <p><i class="fa-solid fa-envelope"></i>MatsimbiLissman@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>+27603134085</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/listen.matsimbi"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://x.com/LissmanM37756"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com/listen_matsimbi/"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <a href="Images/SCSC012_Test2_Memo_Detailed.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <form  name="submit-to-google-sheet">
                <input type="text" name="Name" placeholder="Your Name" required>
                <input type="email" name="Email" placeholder="Your Email" required>
                <textarea name="Massage" rows="6" placeholder="Your Massage"></textarea>
                <button type="submit" class="btn btn2">Submit</button>
               </form>
               <span id="msg"></span>

            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © Listen<i class="fa-regular fa-heart"></i> Matsimbi</p>
    </div>
</div>



<script>

var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
    }for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");

}

</script>
<script>
    var sidemenu = document.getElementById("sidemenu");
   
    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }


</script>
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzh1x2b93TV5Tw6zv44IVUnYVO6BZzyqJo_pWExo3wYRomiFh4J-8xHMytwqxpb2pYG/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg =document.getElementById("msg")
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML = "Massage Sent Successfully"
            setTimeout(function(){
                msg.innerHTML = ""
            },5000)
            form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>