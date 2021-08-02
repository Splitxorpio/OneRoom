<?php
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neochat</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hm.css">
    <script src="https://kit.fontawesome.com/df4aa193a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">

        <div class="max-width">
            <div class="logo"><a href="#home">One<span>Room</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home homes" id="home">

        <div class="max-width">
            <div class="row">
                <div class="home-content">
                    <div class="text-1">Step out of your..</div>
                    <span class="words text-2"></span><span class="letter-changer text-2"></span><span class="accessibility text-2"></span>
                    <div class="text-3">...and meet your future friends</span></div>
                    <a href="signup.php">Signup</a>
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
        <img class="gif" src="image/gigg.gif" alt="">
    </section>
    <hr>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="image/vectgors.jpg" alt="">
                </div>
                <div class="column right">
                    <p> We are people who enjoys talking to others online. Thus, we decided to create OneRoom which is a full fledge online web chat appliaction that is capabilable of real-time chat log and text comunication. Sign-up today and begin chatting!</p>
                    <a class="learn" href="#">Learn More</a>
                </div>
            </div>
            <br>
            <hr style="border: 1px solid gray;">
        </div>
        </div>
        </div>
    </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Want to Know more or have any questions?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title"> 1550 Cityview St Harare</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">OneRoom@ChatNow.org</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Us</div>
                    <form class="contact-form" action="https://formsubmit.co/mailtoarnavpandey@gmail.com" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" class="fullname" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input type="text" class="email-input" placeholder="Email">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" class="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- footer section start -->
    <footer><span>Created By <a href="#home">OneRoom</a> | <span class="far fa-copyright"></span> 2021 All rights
            reserved.</span>
        <span><a href="https://github.com/"><i class="fab fa-github"></i></a> <a href="https://ca.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> </span>
    </footer>
</body>

</html>