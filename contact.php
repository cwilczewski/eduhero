<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>EduHero - Contact</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/parallax.min.js"></script>
</head>

<body>
    <nav id="desk_nav" class="nav">
        <div id="title_nav">
            <p>EduHero</p>
        </div>
        <ul>
            <a href="index.html">
                <li>Home</li>
            </a>
            <a href="tes.html">
                <li>Testimonials</li>
            </a>
            <a href="about.html">
                <li>About</li>
            </a>
            <a href="#" id="active">
                <li>Contact</li>
            </a>
        </ul>
    </nav>

    <nav id="mobile_nav">
        <div id="toggle_cont">
            <p>Menu</p>
            <a id="toggle" href="#"><span></span><span></span><span></span></a>
        </div>
        <ul id="drop">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="tes.html">Testimonials</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <div id="main_cont">
        <div id="para-head" class="parallax-window" data-parallax="scroll" data-image-src="assets/cont/1.jpg">
        </div>
        <header id="contact_header">
            <div id="header_cont">
                <h1>Contact</h1>
                <h3>If you have any questions,<br> please do not hesitate to contact John Silva.</h3>
            </div>
        </header>

        <div class="contact_cont">
            <section id="contact">
                <h2>Email</h2>
                <article class="contact_form">

                    <?php 
if (isset($_POST["email"])) { 
    $ToEmail = 'c.wilczewski@gmail.com'; 
    $EmailSubject = 'EduHero'; 
    $mailheader = "From: ".$_POST["first"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "First Name: ".$_POST["first"].""; 
    $MESSAGE_BODY = "Last Name: ".$_POST["last"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."";
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>
                        Your message has been send.
                        <?php 
} else { 
?>
                            <form method="post" action="javascript:alert('Your email as been sent');">
                                <div id="form_top">
                                    <input type="text" placeholder="First Name" name="first" required>
                                    <input type="text" placeholder="Last Name" name="last">
                                </div>
                                <div id="form_bottom">
                                    <input type="text" placeholder="Email" name="email" required>
                                    <input type="text" placeholder="Subject" name="subject" required>
                                </div>
                                <div id="textarea">
                                    <textarea cols="50" rows="10" placeholder="Type your message here" name="message" required></textarea>
                                </div>

                                <div id="btn_cont">
                                    <input type="submit" value="Submit">
                                    <input type="reset" value="Clear">
                                </div>

                            </form>
                            <?php 
}; 
?>
                </article>
                </article>
        </div>

        <div class="contact_cont-alt">
            <article class="social_icons">
                <h2>Social Media</h2>
                <div id="cont_cont">
                    <section class="cont_links">
                        <a href="https://www.facebook.com" alt="Facebook">
                            <img src="assets/social/face-large.png" draggable="false">
                        </a>
                    </section>
                    <section class="cont_links">
                        <a href="https://www.twitter.com" alt="Twitter">
                            <img src="assets/social/twit-large.png" draggable="false">
                        </a>
                    </section>
                    <section class="cont_links">
                        <a href="https://www.linkedin.com" alt="LinkedIn">
                            <img src="assets/social/linked-large.png" draggable="false">
                        </a>
                    </section>
                    <section class="cont_links">
                        <a href="contact.html" alt="Contact Page">
                            <img src="assets/social/email-large.png" draggable="false">
                        </a>
                    </section>
                </div>
                <span class="clear"></span>
            </article>
        </div>

    </div>

    <footer>
        <div class="foot-left">
            <p>Site by: <a href="http://www.chriswilcz.com">Chris Wilczewski</a></p>
        </div>
        <div class="foot-right">
            <a href="https://www.facebook.com" alt="Facebook">
                <img src="assets/social/facebook.png" draggable="false">
            </a>
            <a href="https://www.facebook.com" alt="Facebook">
                <img src="assets/social/twitter.png" draggable="false">
            </a>
            <a href="https://www.facebook.com" alt="Facebook">
                <img src="assets/social/linked.png" draggable="false">
            </a>
        </div>
        <span class="clear"></span>
    </footer>

</body>

<script src="js/script.js"></script>

</html>