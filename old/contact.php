<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Meghan Kradolfer - Contact</title>
    
    <script src="js/modernizr.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/faviconm.png" type="image/x-icon">
    
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="description" content="Hello! Welcome to Meghan Kradolfer's web and graphic design portfolio. Based in Christchurch, New Zealand but taking on the world!" />
    <meta name="keywords" content="Meghan Kradolfer, web design, graphic design freelance, christchurch, wellington, new zealand, html, css, php, editorial design,  photography, illustration, print, 		retouching, digital art, packaging " />
    
</head>
<body>
    <main class="wrap group">
    
        <aside class="sidebar">
           <div class="my-info">
           
               <img src="images/mk.jpg" alt="Meghan Kradolfer Graphic Design" title="Meghan Kradolfer - Web & Graphic design - Christchurch, New Zealand" class="portfolio-image"><br>
               <img src="images/logo.png" alt="Meghan Kradolfer Graphic Design" title="Meghan Kradolfer - Web & Graphic design - Christchurch, New Zealand" class="logo">
               <h1>Meghan Kradolfer</h1>
               <h2>Web and graphic designer</h2>
               
                <!--MENUS-->
           
           		<nav class="menus">
           
               <h3 class="work">Work</h3>
               <ul>
                   <li><a href="index.html" >Latest</a></li>
                   <li><a href="web.html" >Web Design</a></li>
                   <li><a href="branding.html">Branding</a></li>
                   <li><a href="illustration.html" >Illustration</a></li>
               </ul>

               <h3 class="about">About</h3>
               <ul>
                   <li><a href="skills.html">Skills/Education</a></li>
                   <li><a href="http://howiendeduphere.postach.io/" target="_blank">Photo Blog</a></li>
               </ul>

               <h3 class="contact">Contact</h3>
               <ul>
               	   <li><a href="contact.php" class="current-menu-item">Get in touch!</a></li>
               </ul>
               
           </nav>
               
               <div class="social group">
                   <a href="https://www.facebook.com/meghan.kradolfer" class="facebook">Facebook</a>
                   <a href="http://instagram.com/meghankradolfer" class="googleplus">Instagram</a>
               </div>
               
           </div>
           
          
           
        </aside>
        
        <!--MAIN CONTENT-->
        
        <div class="content">
        
        	 <div class="portfolio-item group first">
                 
                  <div class="portfolio-info">
                  
                    <div class="date">The Easy Way</div>
                    <div class="description">
                      Simply fill out the form and I will get back to you as soon as possible.
                    </div>
                 
                  </div>
              
                  <div class="portfolio-image">
                  
                    <form action="contact.php" method="POST" value="form" >
                            <p>Name:</p><br /><input type="text" name="name" maxlength="25" /><br /><br />
                            <p>Email address:</p><br /><input type="text" name="email" maxlength="50" /><br /><br />
                            <p>Message:</p><br /><textarea name="contact_text" rows="6" cols="30" maxlength="1000" ></textarea><br /><br />
                            <input type="submit" name="submit" />
                     </form>
                  
                      <?php
                         
                        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact_text'])) {
                            $name = $_POST['name'];	
                            $email = $_POST['email'];
                            $text = $_POST['contact_text'];
                            
                            if (!empty($name) && !empty($email) && !empty($text)) {
                                
                                if(strlen($name)>25 || strlen($email)>50 || strlen($text)>1000) {
                                    echo 'Sorry, max length for some field has been exceeded.';
                                } else {
                                    
                                    $to = 'meghan.kradolfer@gmail.com';
                                    $subject = 'Contact form submitted';
                                    $body = $text."\n".$name;
                                    $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
                                
                                    if (@mail ($to, $subject, $body, $headers)) {
                                        echo '<h5>Thanks for the message, I will be in touch soon.</h5>';
                                    } else {
                                        echo'<h4>Sorry an error occured, please try again later.</h4>';	
                                    }
                                }
                                 
                            }
                            
                             else {
                                echo '<h4>All fields are required.</h4>';	
                            }
                            
                            
                        }
                        
                        
                       ?>
              </div>
              
            </div>
                	
                   <div class="portfolio-item group">
                 
                      <div class="portfolio-info">
                      
                        <div class="date">The Direct Way</div>
                        
                       </div>
                      
                       <div class="portfolio-image">
                       		<img src="images/email.png" class="icon" title="Email Meghan Kradolfer - Web and Graphic design" width="30px" height="30px">
                         	<p>Email:<br>
                            <a href="mailto:meghan.kradolfer@gmail.com?subject=Email From Website"> meghan.kradolfer@gmail.com<br><br>
                            <img src="images/phone.png" class="icon" title="Email Meghan Kradolfer - Web and Graphic design" width="30px" height="30px">
                            Phone:<br>
                            0423664103 (Australia) </p>
                       </div>
                       
                   </div>
                   
           </div>
        
        
        
    </main>
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>


