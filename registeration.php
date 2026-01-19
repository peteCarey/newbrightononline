<!DOCTYPE html>
<html lang="en">
<head>

  <title>New Brighton Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="navstyles.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  <h1>Register</h1> 
</div>
<!-- Container (About Section) -->
<div class="container">
  
    <form  name="contactform" method="post" action="registration.php"> 
        <div class="form-group">
            <input type="text" class="form-control" name= "fullname" placeholder = "Full Name">				  																									<td><input type="name" class="form-control" id="name" name="name" placeholder="Enter email"></td>
        </div>   
        <div class="form-group">
            <input type="text" class="form-control" name= "fullname" placeholder = "Email">				  																									<td><input type="name" class="form-control" id="name" name="name" placeholder="Enter email"></td>
        </div>   
         <div class="form-group">
            <input type="text" class="form-control"  name= "fullname" placeholder = "Password">				  																									<td><input type="name" class="form-control" id="name" name="name" placeholder="Enter email"></td>
        </div>   
         <div class="form-group">
            <input type="text" class="form-control" name= "fullname" placeholder = "Repeat Password">				  																									<td><input type="name" class="form-control" id="name" name="name" placeholder="Enter email"></td>
        </div>   
         <div class="form-group">
            <input type="submit" class="btn btn-primary" value= "Registerx" name = "submit">				  																									<td><input type="name" class="form-control" id="name" name="name" placeholder="Enter email"></td>
        </div>                           
                        






       				</tr>       
              		
               			</div>               
               		</tr>      
      				
                    
                	
                    </form>
     			</tbody>
   			</table>
		
        </hr>

	
		</div>      
  </div> 
</body>
</html>
