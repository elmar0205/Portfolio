<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $Full_Name = $_POST['Full_Name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO info (Full_Name,email,message) VALUES ('$Full_Name','$email','$message')";

        $result = mysqli_query($con,$query);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Operational WebPage</title>
    <link rel="stylesheet" href="all.css">
    <script src="https://kit.fontawesome.com/3825d5c95e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    

</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="logo3.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About me</a></li>
                    <li><a href="#education">Education Background</a></li>
                    <li><a href="#favorite">Favorites</a></li>
                    <li><a href="#dream">Dreams</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <h1 class="sub-title">Hi, I'm <span>Elmar G. Santiago </span><br>   </h1>
                <p><span class="auto-type"></span></p>
            </div>
        </div>
    </div>

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="me.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1> <br>
                    <p class="ptag">
                        I am Elmar G. Santiago a simple, creative, enthusiastic, and fun loving person. 
                        I always like to create something on my own which is helpful to me and to others, 
                        20 years old from Santa Lucia San Miguel Bulacan and currently taking Bachelor of Science in Information Technology at Bulacan Agricultural State College.
                        I believe that "Life is not a problem to be solved but a reality to be experienced".
                    </p>
                    <br>
                    <p class="ptag">
                        I am the son of Mario Santiago, a farmer, and Elizabeth Santiago, an OFW. I have two brothers, one sister and I am the eldest.
                        I have experienced a lot in life such as working while studying because of the hardships of life but here I am now fighting for my dream and in the future I want to help my family.
                    </p>

                    <div class="tab-contents active-tab" id="skills">
                        <h1 id="skill"> <br> Skills</h1> <br>
                        <ul>
                            <li>Multitasking Skill</li>
                            <li>Time Management</li>
                            <li>Dependable</li>
                            <li>Communication Skill</li>
                            <li>Teamwork</li>
                            <li>Attention To Detail</li>
                            <li>Basic Java</li>
                            <li>Basic HTML</li>
                            <li>Basic CSS</li>
                            <li>Basic PYTHON</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="educ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="me2.jpg">
                </div>
                <div class="col2">
                    <h1 class="sub-title">Education Background</h1> <br>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>College (2020-PRESENT)</span><br>Bachelor of Science in Information Technology <br>Bulacan Agricultural State College</li> <br>
                            <li><span>Senior High School (2018-2020)</span><br>General Academic Strand <br>Partida, National High School</li> <br>
                            <li><span>Junior High School (2014-2018)</span><br>General Academic Strand<br>Partida, National High School</li> <br>
                            <li><span>Elementary School (2008-2014)</span><br>Sta. Lucia, Elementary School</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="favorite">
        <div class="container">
            <h1 class="sub-title2">Favorites</h1>
            <div class="project-list">
                <div class="project">
                    <img src="pic11.jpeg">
                    <div class="layer">
                        <h3>Programming</h3>
                        <p>I love learning different programming language</p>
                    </div>
                </div>
                <div class="project">
                    <img src="pic12.jpeg">
                    <div class="layer">
                        <h3>Basketball</h3>
                        <p>I love playing basketball and it helps to be physically fit</p>
                    </div>
                </div>
                <div class="project">
                    <img src="pic13.jpeg">
                    <div class="layer">
                        <h3>Mobile Legend Bang Bang</h3>
                        <p>I love playing online games because it's fun and relieves stress</p>
                    </div>
                </div>
                <div class="project">
                    <img src="pic14.jpeg">
                    <div class="layer">
                        <h3>Food</h3>
                        <p>I love eating foods because for me food is life</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>


    <div id="dream">
        <div class="container">
            <h1 class="sub-title2">Dreams</h1> <br>
            <p id="sen">I want to be a Full Stack Developer someday but now what I'm dreaming is to be an Backend Developer
            </p>
            <div class="project-list2">
                <div class="project2">
                    <img src="try2.jpeg">
                    <div class="layers">
                        <h3>Full Stack Developer</h3>
                        <p> I want to become a full stack developer when I reach the highest level of being Backend Developer</p>
                    </div>
                </div>
                <div class="project2">
                    <img src="try1.jpeg">
                    <div class="layers">
                        <h3>Backend Developer</h3>
                        <p>I want to be a Backend Developer</p>
                    </div>
                </div>
                <div class="project2">
                    <img src="try3.jpeg">
                    <div class="layers">
                        <h3>Family</h3>
                        <p>I want to have Happy Family</p>
                    </div>
                </div>
                <div class="project2">
                    <img src="try4.jpeg">
                    <div class="layers">
                        <h3>House and Lot</h3>
                        <p>I want to have my own house and lot for my family</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>

    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>elmarsantiago0205@gmail.com</p>
                    <p><i class="fa-sharp fa-solid fa-square-phone"></i>09709406617</p>
                    <div class="social-icons">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://discord.com"><i class="fa-brands fa-discord"></i></a>
                        <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="ELMAR-RESUME.docx" download class="btn btn2">Download Resume</a>
                </div>
                <div class="contact-right">
                <form method="post">
                        <input type="text" name="Full_Name" placeholder="Your Full Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2" name="submit">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright Ⓒ  Elmar Portfolio Website <i class="fa-solid fa-heart"></i></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>