<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar">
        <div class="logo"> <img src="./images/logo-placeholder.png" width="200" alt=""></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
            <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="apply.php">Apply</a></li>
                <li><a href="request.php">Request</a></li>
            </ul>
            </div>
    </nav>

    <section class="section-a">
        <div class="front-page">
            <div class="head1">
                <h1> Get Tutors Hand Picked Just For You</h1>
                <p>
                    <strong>
                        Gone are the days of wondering which tutor is best suited to handle your needs to the T, let us
                        do all the grunt work of finding the best tutor for you!
                    </strong>
                </p>
                <a  class="header-text" href="request.php">Request a tutor today!</a>
            </div>
            <div class="head2">
                <img src="./images/doodles-about-tutoring-on-chalkboard-57395201.jpg" width="397" alt="">
            </div>
        </div>
    </section>
    <section class="section-b">
        <div class="wrapa">
            <div class="student">
                <h2>Student?</h2>
                <p>Are you a student struggling to grasp a certain concept or subject? Let us help you! Request a tutor
                    and we will send you a list of of highly skilled, completely vetted tutors within an hour, hand
                    picked to meet your specifications. All at a set fee</p>
            </div>
            <div class="student-image">
                <img src="./images/images.jpg" width="370" alt="">
            </div>
        </div>
        <div class="wrapb">
            <div class="tutor-image">
                <img src="./images/Online Tutoring Jobs.jpg" width="370" alt="">
            </div>
            <div class="tutor">
                <h2>Tutor?</h2>
                <p>Are you well versed in for field of study? are you in need of some extra income? We've got just the
                    solution for you! Apply to become one of our tutors today! Set your own hours and we'll be sending
                    requests your way ASAP!</p>
            </div>
        </div>
    </section>
    <section class="section-c">
        <div class="wrap1">
            <h2>Pricing</h2>
            <p>Need a tutor? we've got just the price for you!
                <br>
                Pre-purchase hours and save*
            </p>
            <div class="column-wrap1">
                <div class="column1">
                    <h3 class="ctitle">1-2 Hours</h3>
                    <img src="./images/10-512.png" width="106" alt="">
                    <p>R200 an hour</p>
                </div>
                <div class="column2">
                    <h3 class="ctitle">3-4 Hours</h3>
                    <img src="./images/10-512.png" width="106" alt="">
                    <p>R180 an hour</p>
                </div>
                <div class="column3">
                    <h3 class="ctitle">5 Hours+</h3>
                    <img src="./images/10-512.png" width="106" alt="">
                    <p>R150 an hour</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-d">
        <h2>How it Works?</h2>
        <div class="wrapitems">
            <div class="wrapstuff">
                <div class="wrapstuff1">
                    <h4>Request</h4>
                    <p>Simply log a request for a tutor with us and one of our professional and friendly staff will be in touch via your preferred method of contact and provide you with a list of quality hand picked tutors just for you</p>
                </div>
                <div class="wrapstuff2">
                    <h4>Pick your Tutor</h4>
                <p>Select the tutor you feel would suit you the best out of the list of tutors provided or simply ask your professional and friendly advisor to select one for you. (Do not worry, they're all the same standard price)</p>
                </div>
                <div class="wrapstuff3">
                    <h4>Pay</h4>
                    <p>Confirm with your Advisor on the amount of hours you would like to be tutored and pay the relevant fee</p>
                </div>
                <div class="wrapstuff4">
                    <h4>SCHEDULE & LEARN</h4>
                    <p>Schedule your tutoring hours based on the availability of the tutor you selected and Have fun learning!!</p>
                </div>
            </div>
        </div>
        <section class="contact-form">
                 <h2><a name ="contact" >Contact Form</a></h2>
                 <p>If you need any further information, do not hesitate to contact us</p>
                 <em>Fields marked with an asterisk (*) are required.</em>
        </section>
        <form class="form1" action="index.php" method="post">
            <label for="firstName" class="first-name">First Name*</label>
        <input id="firstName" type="text" maxlength="256" required name="firstName">
            <label for="lastName" class="last-name">Last Name*</label>
        <input id="lastName" type="text" maxlength="256" required name="lastName">
            <label for="email">Email*</label>
        <input id="email" type="email" maxlength="256" required name="email">
            <label for="contact-phone-no">Phone Number</label>
        <input id="contact-phone-no" type="tel" maxlength="256" name="phone">
            <label for="Message">Message</label>
        <textarea id="message" value="message" maxlength="5000" cols="30" rows="10" name="message"></textarea>
        <button name="submit" >Submit</button>
        </form>
    </section>
  <footer>
       <nav class="navbar">
            <div>
            <a href="https://www.facebook.com" target="_blank"> <img style="margin: 20px" src="./images/facebook.webp" width="20" alt=""> </a>
            <a href="https://www.instagram.com" target="_blank"><img style="margin: 20px" src="./images/insta.webp" width="20" alt=""></a>
            <a href="https://www.twitter.com" target="_blank"><img style="margin: 20px" src="./images/twitter.webp" width="20" alt=""></a>
            </div>
            <div>
               <p style="text-align: center; margin-right: -90%">
                   Created BY:<br>
                   Jaden, Brandon, Tonderai, Oteng, Lindo and Kat.
               </p>
            </div>
            <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="signin.php">Admin Login</a></li>
                <li><a href="211DSW02A1 Group assignment Information.pdf" target="_blank">Documentation</a></li>
            </ul>
            </div>
        </nav>
  </footer>
</body>
</html>

<?php

if($_POST) {
    $email_title = "Contact Form";
    $visitor_name = "";
    $visitor_Lname = "";
    $visitor_email = "";
    $visitor_phone = "";
    $visitor_message = "";
    $email_body = "<div>";

    if (isset($_POST['firstName'])) {
        $visitor_name = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Name:</b></label>&nbsp;<span>" . $visitor_name . "</span>
                        </div>";
    }
    if (isset($_POST['lastName'])) {
        $visitor_Lname = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Surname:</b></label>&nbsp;<span>" . $visitor_Lname . "</span>
                        </div>";
    }

    if (isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>" . $visitor_email . "</span>
                        </div>";
    }

    if (isset($_POST['phone'])) {
        $visitor_phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Phone:</b></label>&nbsp;<span>" . $visitor_phone . "</span>
                        </div>";
    }

    if (isset($_POST['message'])) {
        $visitor_message = htmlspecialchars($_POST['message']);
        $email_body .= "<div>
                           <label><b>Message:</b></label>
                           <div>" . $visitor_message . "</div>
                        </div>";
    }

    $recipient = "username@localhost";

    $email_body .= "</div>";

    $headers = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $visitor_email . "\r\n";

    if (mail($recipient, $email_title, $email_body, $headers)) {
        echo '<strong>' . '<script>alert("FORM SUBMITTED SUCCESSFULLY")</script>' . '</strong>';
    } else {
        echo '<strong>' . '<script>alert("FORM WAS NOT SUBMITTED")</script>' . '</strong>';
    }
}