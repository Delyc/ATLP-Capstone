<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php';

if (isset($_POST['submit'])) {
   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->Mailer = "smtp";
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;
   $mail->SMTPAuth   = TRUE;
   $mail->SMTPSecure = "starttls";
   $mail->Port       = 587;
   $mail->Host       = "smtp.gmail.com";
   $mail->Username   = "delyce2002@gmail.com";
   $mail->Password   = "Better@2";

   $mail->IsHTML(true);
   $mail->AddAddress('delyce2002@gmail.com', "Admin");
   $mail->SetFrom($_POST["email"], $_POST["first-name"] . $_POST["last-name"]);
   $mail->AddReplyTo($_POST["email"], $_POST["first-name"] . $_POST["last-name"]);
   $mail->Subject = "Message your Portfolio";
   $content = "Name : " . $_POST["first-name"] . $_POST["last-name"] . "\n"  . "Message : " .  $_POST["message"];
   $mail->MsgHTML($content);
   if (!$mail->Send()) {
       echo "<span class='error'>" . 'something is wrong, try again';
       var_dump($mail);
   } else {
       echo "<span class='success'>" . 'We have received your message, ' . $_POST["first-name"] . "</span>";
   }
}
?>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delyce</title>
    <link rel="stylesheet" href="index.css" />
  </head>

  <body>
    <div class="header">
      <p class="name">Delyce Twizeyimana</p>
      <div class="Navbutton">
        <button class="cont" type="button">Contact Me</button>
        <button class="proj" type="button">Projects</button>
        <button class="serv" type="button">Services</button>
      </div>
    </div>
    <div class="introduction">
      <div class="left">
        <div class="picarea">
          <div class="pic"></div>
          <p class="myname">Delyce</p>
          <p class="ui">UI/UX & Graphic designer</p>
          <hr />
        </div>
        <div class="exper">
          <p class="">Experienced In</p>
          <div class="allskills">
            <p>Python</p>
            <p>HTML & CSS</p>
            <p>Adobe Indesign</p>
            <p>Adobe Illustrator</p>
            <p>Adobe photoshop</p>
            <p>Mysql</p>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="rightfirst">
          <div class="spaces">
            <p class="discoverr">Discover</p>
            <p class="myart">My art space</p>
          </div>
          <p class="desc">
            I am an open-minded Software Engineer with a keen interest in
            creating elegant tech solutions. I am an open source enthusiast and
            enjoy playing video games. Check out some of the projects that I
            have built.
          </p>
        </div>
        <div class="bigpic"></div>
      </div>
    </div>

    <h2 class="pro">Projects</h2>
    <div class="all">
      <div class="project">
        <h3 class="title">Mobile banking</h3>
        <img class="image" src="images/bank.png" alt="" />
        <p class="desci">
          A banking system application A banking system application A banking
          system application
        </p>
        <h4>developed using</h4>
        <div class="skillused">
          <p>Python</p>
          <p>Python</p>
        </div>
      </div>
      <div class="project">
        <h3 class="title">Mobile banking</h3>
        <img class="image" src="images/bank.png" alt="" />
        <p class="desci">
          A banking system application A banking system application A banking
          system application
        </p>
        <h4>developed using</h4>
        <div class="skillused">
          <p>Python</p>
          <p>Python</p>
        </div>
      </div>
      <div class="project">
        <h3 class="title">Mobile banking</h3>
        <img class="image" src="images/bank.png" alt="" />
        <p class="desci">
          A banking system application A banking system application A banking
          system application
        </p>
        <h4>developed using</h4>
        <div class="skillused">
          <p>Python</p>
          <p>Python</p>
        </div>
      </div>
    </div>
    <h2>Send me a message</h2>

    <form action="" method="post">
      <div class="group1">
        <label for="fname">First name:</label>
        <input type="text" placeholder="Your name" name="first-name" id="fname" />
        <label for="lname">Last name:</label>
        <input
          type="text"
          placeholder="Your lastname"
          id="lname"
          name="last-name"
        />
        <label for="lname">Email:</label>
        <input
          type="email"
          placeholder="Your email"
          id="email"
          name="email"
        />
      </div>
      <div class="group2">
        <label for="message">Message:</label>
        <textarea
          id="message"
          name="message"
          rows="10"
          cols="50"
          placeholder="Your message here"
        ></textarea>

        <input class="btn" name="submit" type="submit" value="Send message" />
      </div>
    </form>

    <div class="location">
      <p>Residence <span>Rwanda</span></p>
      <p>city <span>Kigali</span></p>
      <p>School <span>ALU</span></p>
      <p>Age <span>19</span></p>
    </div>
    <div class="git">
      <a href="https://github.com/" target="_blank"
        ><img src="images/github.jpg" alt="" width="55px" height="45px"
      /></a>
    </div>
  </body>
