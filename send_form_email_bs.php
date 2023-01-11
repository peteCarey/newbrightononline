<!DOCTYPE html>
<html lang="en">
<head>

  <title>New Brighton Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="navstyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
   }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
 
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="newbrightononline.htm"><img class="img-responsive" id="index_theCentre" src="#" alt="" />HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
 	<li class="dropdown">
    	    <a class="dropdown-toggle" type="dropdown" data-toggle="dropdown">New Brighton
   	    <span class="caret"></span></a>
    	    <ul class="dropdown-menu">
     	        <li><a href="history1.htm">History of New Brighton</a></li>
      		<li><a href="localEvents1.htm">Local Events</a></li>     		
    	    </ul>
  	</li>	
  	<li class="dropdown">
    	    <a class="dropdown-toggle" type="dropdown" data-toggle="dropdown">The Centre
   	    <span class="caret"></span></a>
    	        <ul class="dropdown-menu">
     		    <li><a href="news1.htm">News</a></li>
      		    <li><a href="whatson1.htm">Whats On</a></li>
     		    <li><a href="howto1.htm">Hire a Room</a></li>
     		    <li><a href="comasso1.htm">Community Association</a></li>
     		    <li><a href="origins1.htm">The Origins of the Community Centre</a></li>
     		    <li><a href="gallery1.htm">Gallery</a></li>
    		</ul>
  	</li>	
        <li><a href="https://www.wirral.gov.uk/about-council/contact-us/one-stop-shops" target="_blank" >One Stop Shops</a></li>
        <li><a href="mapinfo1.htm">Where are We</a></li> 
        <li><a href="contact1.htm">Contact Us</a></li>
 	<li class="dropdown">
    	    <a class="dropdown-toggle" type="dropdown" data-toggle="dropdown">Useful Links
   	    <span class="caret"></span></a>
    	        <ul class="dropdown-menu">
     		    <li><a href="http://www.wirral.gov.uk/" target="_blank">Wirral Council</a></li>
      		    <li><a href="http://www.dfes.gov.uk" target="_blank">Department of Education</a></li>
     		    <li><a href="https://www.biglotteryfund.org.uk/funding/under10k" target="_blank">National Lottery Awards For All</a></li>
     		</ul>
  	</li>	 
     </ul>
    </div>
    </div>
    </div>
</nav>

<div class="jumbotron text-center">
  <h1>Contact Us</h1> 
</div>
<!-- Container (About Section) -->

<?php

if(isset($_POST['email'])) {
 
echo "Test contact form script";      
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "pete.carey@yahoo.co.uk";
 
    $email_subject = "New Brighton Online - Message";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['subject']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $subject = $_POST['subject']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
//honeypoyt message 12/02/16      
  $spa = $_POST["spam"];
if (!empty($spa) && !($spa == "7" || strtolower($spa) == "seven")) {
    echo "You failed the bot test!";
    exit ();
}    
    $email_message = "Form details below.\n\n";
 

  

 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
	     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

//ini_set('sendmail_from', 'newbrightononline@hotmail.com'); 
//ini_set('sendmail_from', 'newbrightononline@gmail.com'); 
ini_set('sendmail_from', 'pete.carey@yahoo.co.uk'); 
// @mail($email_to, $email_subject, $email_message, $headers);  
mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!--  success html here -->
 
 
 
<p>Thank you for contacting us. We will be in touch with you very soon.</p>
 
 
 
<?php
 
}
 
?>


</hr>
	  <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8">
    <ul class="list-group">
    <li class="list-group-item">NEW BRIGHTON ONLINE</li>
    <li class="list-group-item">New Brighton Community Centre,</li>
    <li class="list-group-item">1A Hope Street,</li>
    <li class="list-group-item">New Brighton,</li>
    <li class="list-group-item">Merseyside, </li>
    <li class="list-group-item">CH45 2LN</li>
    <li class="list-group-item">EMAIL: <a href="mailto:newbrightononline@gmail.com">newbrightononline@gmail.com</a></li>
    <li class="list-group-item"><a href=" https://twitter.com/NBCommunityCent" class="twitter-follow-button" data-show-count="false">Follow @twitter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
    <li class="list-group-item"><a href="https://www.facebook.com/new.brighton.9" target="_blank"><img src="http://www.newbrightononline.org.uk/assets/FB_FindUsOnFacebook-100.png" alt="facebook">																		</a></li>
    <li class="list-group-item">TEL: 0151 630 2626</li>
    <li class="list-group-item"><a href="http://www.newbrightononline.org.uk/Docs/NBCC%20HIRE%20BOOKING%20ORM.PUB">NBCC Hire Booking Form</a></li>  
  </ul>		
</div>
  <div class="col-sm-4"></div>
</div>  
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Website Made By <a href="https://www.petercarey.co.uk" title="P Carey">P Carey </a>&copy; Copyright MMXVIII New Brighton Online</p>
</footer>			
		</div>      
  </div> 
</body>
</html>
