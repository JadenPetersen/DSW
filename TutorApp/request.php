<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Tutor</title>
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
    <section class="request">
    <h1>Request Your Tutor Today!</h1>
        <form class="form1" action="request.php" method="post">
        <label for="firstName" class="first-name">First Name*</label>
        <input id="firstName" type="text" maxlength="256" required name="firstName">

        <label for="lastName" class="last-name">Surname*</label>
        <input id="lastName" type="text" maxlength="256" required name="lastName">

        <label for="email">Email*</label>
        <input id="email" type="email" maxlength="256" required name="email">

        <label for="phone number">Cell Number*</label>
        <input id="contact-phone-no" type="tel" maxlength="256" required name="phone">
            
        <label for="subject" class="subject">Subject*</label>
        <input id="subject" type="text" maxlength="256" required name="subject">

            <label for="time">Time*</label>
            <select name="time" id="time" required>
                <option value>Preferred time slot.</option>
                <option value="00:00-01:00">00:00-01:00</option>
                <option value="01:00-02:00">01:00-02:00</option>
                <option value="02:00-03:00">02:00-03:00</option>
                <option value="03:00-04:00">03:00-04:00</option>
                <option value="04:00-05:00">04:00-05:00</option>
                <option value="05:00-06:00">06:00-07:00</option>
                <option value="06:00-07:00">07:00-08:00</option>
                <option value="07:00-08:00">08:00-09:00</option>
                <option value="08:00-09:00">09:00-10:00</option>
                <option value="10:00-11:00">10:00-11:00</option>
                <option value="11:00-12:00">11:00-12:00</option>
                <option value="12:00-13:00">12:00-13:00</option>
                <option value="13:00-14:00">13:00-14:00</option>
                <option value="14:00-15:00">14:00-15:00</option>
                <option value="15:00-16:00">15:00-16:00</option>
                <option value="16:00-17:00">16:00-17:00</option>
                <option value="17:00-18:00">17:00-18:00</option>
                <option value="18:00-19:00">18:00-19:00</option>
                <option value="19:00-20:00">19:00-20:00</option>
                <option value="20:00-21:00">20:00-21:00</option>
                <option value="21:00-22:00">21:00-22:00</option>
                <option value="22:00-23:00">22:00-23:00</option>
                <option value="23:00-00:00">23:00-00:00</option>
            </select>

        <label for="Message">Message</label>
        <textarea id="message" value="message" maxlength="5000" cols="30" rows="10"
                  placeholder="If more than one hour required please specify additional amount of hours and any other requests" name="message"></textarea>
        <button>Submit</button>
    </form>
    
    </section>
    
      <footer class="footer">
        <nav class="navbar">
            <div>
                <a href="https://www.facebook.com" target="_blank"> <img style="margin: 20px" src="./images/facebook.webp" width="20" alt=""> </a>
                <a href="https://www.instagram.com" target="_blank"><img style="margin: 20px" src="./images/insta.webp" width="20" alt=""></a>
                <a href="https://www.twitter.com" target="_blank"><img style="margin: 20px" src="./images/twitter.webp" width="20" alt=""></a>
            </div>
            <div class="navbar-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#contact">Contact Us</a></li>
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
    $email_title = "Tutor Request";
    $visitor_name = "";
    $visitor_Lname = "";
    $visitor_email = "";
    $visitor_phone = "";
    $subject = "";
    $time = "";
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

    if (isset($_POST['subject'])) {
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
        <label><b>Subject:</b></label>&nbsp;<span>" . $subject . "</span>
        </div>";
    }

    if (isset($_POST['time'])) {
        $time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
        <label><b>Time:</b></label>&nbsp;<span>" . $time . "</span>
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


//[mail function]
//; For Win32 only.
//; http://php.net/smtp
//SMTP=localhost
//; http://php.net/smtp-port
//    smtp_port=25
//
//    ; For Win32 only.
//; http://php.net/sendmail-from
//;sendmail_from = postmaster@localhost