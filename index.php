<?php
include_once "translation.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Portfolio Alain Niessen</title>
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="dist/css/min-screen.css" type="text/css">
    </head>
    <body>
        <?php
        if($displaySite) {
        ?>
        <!-- empty div for cursor animation-->
        <div class="cursor"></div>
        <div class="cursor2"></div>
        <!--NavBar-->
        <header class="l-header">
            <div class="wrapper">
                <nav>
                    <div class="logo">
                        <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="529px" height="72px" viewBox="0 0 529 72" enable-background="new 0 0 529 72" xml:space="preserve">
                            <g>
                                <polygon fill="#007A7E" points="17.208,0 0.228,45.396 2.315,45.441 26.939,45.441 27.93,45.441 28.896,45.441 28.896,35.539 
                                    15.58,35.539 24.815,10.838 29.896,10.838 52.834,72 64.489,72 37.51,0 	"/>
                                <polygon fill="#007A7E" points="53.524,0 53.524,10.062 66.774,45.442 78.352,45.442 65.432,10.838 74.941,10.838 97.853,72 
                                    98.943,72 98.943,71.999 98.943,71.999 124.632,71.999 125.598,71.999 126.564,71.999 126.564,36.506 115.72,36.506 115.72,62.094 
                                    105.706,62.094 82.436,0 	"/>
                            </g>
                        </svg>
                    </div>
                    <ul class="nav-links">
                        <li>
                            <a href="#intro">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#aboutme">
                                <?php echo $menu_about; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#projects">
                                <?php echo $menu_projects; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                <?php echo $menu_contact; ?>
                            </a>
                        </li>
                        <li>
                            <?php
                                if($lang == "en"):
                            ?>
                                <a href="index.php?lang=de" class="flag" data-lang="de"><span class="fi fi-de fib flag-icon-squared"></span></a>
                                <a href="index.php?lang=fr" class="flag" data-lang="fr"><span class="fi fi-fr fib flag-icon-squared"></span></a>
                            <?php
                                elseif($lang == "fr"):
                            ?>
                                <a href="index.php?lang=de" class="flag" data-lang="de"><span class="fi fi-de fib flag-icon-squared"></span></a>
                                <a href="index.php?lang=en" class="flag" data-lang="en"><span class="fi fi-gb fib flag-icon-squared"></span></a>
                            <?php
                                elseif($lang == "de"):
                            ?>  
                                    <a href="index.php?lang=fr" class="flag" data-lang="fr"><span class="fi fi-fr fib flag-icon-squared"></span></a>
                                    <a href="index.php?lang=en" class="flag" data-lang="en"><span class="fi fi-gb fib flag-icon-squared"></span></a>
                            <?php
                                endif;
                            ?>                                                  
                        </li>
                    </ul>
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>   
                </nav> 
            </div>                  
        </header>
        <!-- MAIN SECTION -->
        <main class="l-main">
            <!-- INTRO SECTION -->
            <section class="m-main-intro" id="intro">                    
                <div class="m-main-intro-text">
                    <h1>Alain Niessen</h1>
                    <h2><?php echo $intro_title; ?></h2>
                    <p>Frontend / Backend</p>
                    <img src="dist/img/portfolio2023.jpg" alt="Portrait" title="Portrait">
                    <p>
                        <?php echo $intro_text; ?>
                    </p>  
                    <div class="m-main-intro-linkbox">
                        <a href="#aboutme" class="btn btn-primary btn-custom">
                            <?php echo $intro_btn_about; ?>
                        </a>
                        <a href="#projects" class="btn btn-primary btn-custom">
                            <?php echo $intro_btn_projects; ?>
                        </a>
                    </div>                          
                </div>            
            </section>        
            <section class="m-main-about" id="aboutme">
                <div class="wrapper">
                    <h1>About me</h1>
                    <div class="m-main-about-infobox"> 
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="m-main-about-infobox-personel">
                                    <h1>My person</h1>
                                    <p>
                                        After graduating from high school, I first studied social education. After working in this field for about 16 years, I decided in 2019 to reorient myself professionally to become a web developer.
                                    </p>
                                    <p>
                                        I have always been interested in this area and during my studies, which I completed at the "Institut Saint Laurent" in Liège/Belgium, it quickly became clear that I had made the right decision.
                                    </p>
                                    <p>
                                        With a great thirst for knowledge, I familiarized myself with the various aspects and technologies of web development and graduated in 2022 with great honors. An internship at "Cloth.Kreativbureau" in Eupen/Belgium gave me the first opportunity to work in a professional setting.
                                    </p>
                                    <p>
                                        You can download my CV under the following link and get a detailed overview of my professional career, my experiences and my other interests:
                                    </p>
                                    <div class="cv">
                                        <a href="#" download="#" class="btn btn-primary btn-custom">Download CV</a>
                                    </div>                                                                       
                                    <p>
                                        You can see my social media presence under the following links:
                                    </p>
                                    <div class="m-main-about-infobox-social">
                                        <a href="https://www.facebook.com/alain.niessen.10" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                                        <a href="https://www.linkedin.com/in/alain-niessen-84b8431b2/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.deviantart.com/silence-in-your-head" target="_blank" title="DeviantArt"><i class="fab fa-deviantart"></i></a>
                                        <a href="https://github.com/AlainNiessen" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>                       
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="m-main-about-infobox-skills">
                                    <h1>Skills</h1>  
                                    <p>
                                        Skills are an assessment of abilities. I was able to familiarize myself with these technologies and approaches during my studies. Additional research and practice allowed me to develop the skills. Refining existing skills and acquiring new ones is my highest priority.
                                    </p>                               
                                    <div class="icons">
                                        <div class="icons-box"> 
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/html5.png" alt="HTML5" title="HTML5"/>
                                            </div>                                               
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/css3.png" alt="CSS3" title="CSS3"/>
                                            </div>                                               
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/sass.png" alt="SASS" title="SASS"/>
                                            </div>                                               
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/php.png" alt="PHP" title="PHP"/>  
                                            </div>                                                                                                                       
                                        </div>
                                        <div class="icons-box">   
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/javascript.png" alt="JAVASCRIPT" title="JAVASCRIPT"/>
                                            </div>                                             
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/jquery.png" alt="JQUERY" title="JQUERY"/>
                                            </div>                                             
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/symfony.png" alt="SYMFONY" title="SYMFONY"/> 
                                            </div>  
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/mysql.png" alt="MYSQL" title="MYSQL"/>
                                            </div>                                                                                                                                 
                                        </div>                                                                                                                                                       
                                        <div class="icons-box">                                                
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/bootstrap.png" alt="BOOTSTRAP" title="BOOTSTRAP"/>
                                            </div>
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/gulp.PNG" alt="GULP" title="GULP"/>  
                                            </div>
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/wordpress.PNG" alt="WORDPRESS" title="WORDPRESS"/>   
                                            </div>
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/github.jpg" alt="GITHUB" title="GITHUB"/>
                                            </div>                                                                                                                                                                                                                               
                                        </div>                                        
                                        <div class="icons-box">                                                                                                 
                                            <div class="icons-box-img">
                                                <img src="dist/img/icons/vsc.png" alt="VISUAL STUDIO CODE" title="VISUAL STUDIO CODE"/>
                                            </div>                                                      
                                        </div>                             
                                    </div>                                                                       
                                </div>
                            </div>                    
                        </div>                  
                    </div>  
                </div>      
            </section>
            <section class="m-main-projects" id="projects">
                <div class="wrapper">
                    <h1>Portfolio</h1>
                    <p>
                        Here you will find an overview of all relevant and meaningful projects so far.
                    </p>
                    <div class="m-portfolio-projects" id="m-portfolio-projects">
                        <div class="row" id="project-row">
                            <!--filled dynamique via class Project and method createProject-->
                        </div>
                        <p></p>
                    </div>                                         
                </div>
            </section>       
            <section class="m-contact" id="contact">
                <div class="wrapper">
                    <h1>Contact</h1>
                    <div class="m-contact-container">                           
                        <div class="m-contactForm">
                            <p>"Bitte beachten Sie, dass alle Felder obligatorisch sind und Ihre Email nur genutzt wird zum Antworten!</p>
                            <form class="m-formContact" id="form" data-lang=<?php echo $lang ?>>
                                <div class="box_name">
                                    <p class="error-input">Bitte geben Sie Ihren Namen ein</p>
                                    <input type="text" name="name" id="name" placeholder="Name" />                                            
                                </div>                                        
                                <div class="box_email">
                                    <p class="error-input">Bitte geben Sie eine korrekte Email ein</p>
                                    <input type="email" name="email" id="email" placeholder="E-mail" />                                            
                                </div>
                                <div class="box_subject">
                                    <p class="error-input">Bitte geben Sie einen Betreff ein</p>
                                    <input type="text" name="subject" id="subject" placeholder="Betreff" />                                            
                                </div>
                                <div class="box_message">
                                    <p class="error-input">Bitte geben Sie Ihre Nachricht ein</p>
                                    <textarea placeholder="Nachricht" id="message" name="message"></textarea>                                            
                                </div>                                        
                                <button type="submit" id="submit" class="btn btn-primary btn-custom">Absenden</button>
                                <div id="messageResultat" class="messageResultat">
                                    <div id="messageResultatContent" class="messageResultatContent"></div>
                                </div>
                            </form>
                        </div>                        
                    </div>                                                      
                </div>           
            </section>  
        </main>
        <footer class="l-footer">
            <div class="wrapper">
                <div class="l-footer-info">                    
                    <div class="l-footer-info-contactBox">
                        <h2>Bla</h2>
                        <div class="l-footer-info-contactBox-position">                 
                            <div class="l-footer-info-infoContact"> 
                                <i class="fas fa-phone"></i>  
                                <a href="tel:+32498415694" title="Tel">++32 (0)498/41.56.94</a>                                           
                            </div>
                            <div class="l-footer-info-infoContact"> 
                                <i class="fas fa-envelope"></i>  
                                <a href="mailto:alain_niessen@hotmail.com" title="Mail">alain_niessen@hotmail.com</a>                                           
                            </div>
                        </div>                                
                    </div>                
                    <div class="l-footer-copyright">
                        <p>
                            All icons by <a href="https://fontawesome.com/" target="_blank">Font Awesome</a> and <a href="https://www.klipartz.com/" target="_blank">Klipartz</a>
                        </p>
                        <p>
                            Copyright <i class="far fa-copyright"></i> 2021 All rights reserved by <span class="text-decoration">Alain Niessen</span>
                        </p>
                    </div>                                 
                </div>
            </div>            
        </footer>
      
    <!--Implication Javascript-->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/min-all.js"></script>
    <?php
        } else {
        ?>
        <div class="langError-container">
            <h1>Language does not exist</h1>
            <a class="btn btn-primary btn-custom" href="index.php?lang=en">Back to site</a>
        </div>        
        <?php
        }
        ?>
    </body>
</html>