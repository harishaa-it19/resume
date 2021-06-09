
<html>
    <head>
        
        <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Portfolio Template">
    <meta name="author" content="Suvrat Jain">
    <title>Harishaa</title>
    
      
    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
  </head>
  <body style="background-color: black;">
   
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu">
      <div class="container">
         <a class="topnav" href="#"><i class="fa fa-globe"></i></a>
        </div>
        <div class="topnav">
             <a href="#">Home</a>
              <a href="#about">About</a>
               <a href="#portfolio">Portfolio</a>
               <a href="#contact">Contact</a></li> 
         
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container-fluid splash" id="splash">
  <div class="container">
    <img src="myimage.jpg" alt="Portrait of Mr. Roboto" class="profile-image"> 
    <h1>HELLO!</h1> 
    <h1 class="intro-text"><span class="lead" id="typed">I am a  </span></h1>
    <h1 class="typing"></h1>

    <span class="continue"><a href="#about"><i class="fa fa-angle-down"></i></a></span>
  </div>
</div>
        <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p class="content-text">Hey there! I am a junior software developer based in  India. I have done  some of the popular front end  to create beautiful websites that get noticed. I seek experience to gain more knowledge in the web development field.
                    </p>
                </div>
                <div class="col-lg-4">
                    <p class="content-text">If you are in need of a beautiful simple website, I'm your guy. I look forward to talking to you soon!</p>
             </div>
                <div class="col-lg-8 col-lg-offset-2 text-center contact-button">
                    <a href="#contact" class="btn btn-lg btn-outline">
                        <i class="fa fa-envelope"></i> Contact Me
                        <form name="myform" action="" method="POST" onsubmit="return validForm()"> 

                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid portfolio-container-holder content-section" id="portfolio" style="background-color: blue;">
		<div class="portfolio-container container">
			<center><h1 class="text-center">My Projects</h1></center>
      <hr class="star-portfolio">
			<div class="row">
				
				<center><table>
                    <tr>
                        <th><h1>HOTEL MANAGEMENT SYSTEM</h1><img src="project.jpg" height="150" ></th>  <br>                  
                        

                    </tr>
                    <tr>
                        <th><h1>PATENT FILED</h1><img src="Patent.png" height="150"></th>
                     
                    </tr>
                    
                  </table>
                </center>
                  
<!-- Contact form -->
	<div class="container-fluid contact-me-container content-section" id="contact">
		<div class="container">
			<h1 class="intro-text text-center">Contact Me</h1>
            <form name="myform" action="" method="POST" onsubmit="return validForm()"> 
                <div class="contactform">
                  <div style="text-align:center">
                    <h1>Any qureies </h1>
                    <p>contact us </p>
                  </div>
                  <div class="row">
                    <div class="column">
                      <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name.."> 
                
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email..">
                          
                
                        <label for="feedback">Subject</label>
                        <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
                        </form>  
<!-- Footer -->
	<footer>
		<div class="container footer-container">
			<div class="row footer-row">
				<div class="col-xs-12 col-sm-6 col-md-6 text-center">
			<h4 class="text-center">Find me here</h4>
				 	<address>
					 	<strong><i class="fa fa-location-arrow"></i> HARISHAA A S</strong><br>6/374E Pattathu Amman Kovil 2nd st <br>TamilNadu, India 638301<br><br>
					 	<a  class="tel" href="tel:7530032268" type="tel"><i class="fa fa-mobile"></i><span> +91 7530032268</span></a>
					</address>
				</div>

				<div class="col-xs-12 col-md-6 col-sm-6 social-section">
					<div class="text-center">
						<h4 class="text-center">Also, I can be found here</h4>
				<div class="text-center social-buttons">
						<a href="https://www.facebook.com/profile.php?id=100008666111645" class="btn btn-default btn-lg social-button link-facebook"><i class="fa fa-facebook"></i>
						</a>

					

						<a href="https://twitter.com/HARISHA02765102?s=03" class="btn btn-default btn-lg social-button link-twitter"><i class="fa fa-twitter"></i>
						</a>

						<a href="https://www.linkedin.com/in/harishaa-a-20a4b11a4" class="btn btn-default btn-lg social-button link-linkedin"><i class="fa fa-linkedin"></i>
						</a>
          <a href="https://instagram.com/_harixooo_" class="btn btn-default btn-lg social-button link-instagram"><i class="fa fa-instagram"></i>
						</a>
					</div><hr class="footer-hr">
            
			</div><hr class="copyright">
      <h4><i class="fa fa-copyright"></i>DONE BY  A S HARISHAA </h4>
		</div>
	</footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
  </body>
</html>
<script  src="type.js"></script>
