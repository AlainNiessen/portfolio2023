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
                            <a href="#">
                                <?php echo $menu_projects; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php echo $menu_contact; ?>
                            </a>
                        </li>
                        <li>
                            <?php
                                if($lang == "en"):
                            ?>
                                <a href="index.php?lang=de" class="flag"><span class="fi fi-de fib flag-icon-squared"></span></a>
                                <a href="index.php?lang=fr" class="flag"><span class="fi fi-fr fib flag-icon-squared"></span></a>
                            <?php
                                elseif($lang == "fr"):
                            ?>
                                <a href="index.php?lang=de" class="flag"><span class="fi fi-de fib flag-icon-squared"></span></a>
                                <a href="index.php?lang=en" class="flag"><span class="fi fi-gb fib flag-icon-squared"></span></a>
                            <?php
                                elseif($lang == "de"):
                            ?>  
                                    <a href="index.php?lang=fr" class="flag"><span class="fi fi-fr fib flag-icon-squared"></span></a>
                                    <a href="index.php?lang=en" class="flag"><span class="fi fi-gb fib flag-icon-squared"></span></a>
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
                        <a href="#" class="btn btn-primary btn-custom">
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
                                    <div class="m-main-about-infobox-skills-advanced">
                                        <h2>Advanced</h2>
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
                                            </div>                                                                                                                                                       
                                        </div>
                                    </div>                    
                                    <div class="m-main-about-infobox-skills-good">
                                        <h2>Good</h2>
                                        <div class="icons">
                                            <div class="icons-box">
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/mysql.png" alt="MYSQL" title="MYSQL"/>
                                                </div>
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/bootstrap.png" alt="BOOTSTRAP" title="BOOTSTRAP"/>
                                                </div>
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/gulp.PNG" alt="GULP" title="GULP"/>  
                                                </div>
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/wordpress.PNG" alt="WORDPRESS" title="WORDPRESS"/>   
                                                </div>                                                                                  
                                            </div>                                                                                                                                                                                                  
                                        </div>
                                        <div class="icons">
                                            <div class="icons-box">
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/github.jpg" alt="GITHUB" title="GITHUB"/>
                                                </div>                                                      
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/vsc.png" alt="VISUAL STUDIO CODE" title="VISUAL STUDIO CODE"/>
                                                </div>                                                      
                                            </div>                                                                                                                                                                                                  
                                        </div>
                                    </div>                    
                                    <div class="m-main-about-infobox-skills-basic">
                                        <h2>Basics or in learning process</h2>
                                        <div class="icons">   
                                            <div class="icons-box"> 
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/react.png" alt="REACT" title="REACT"/>
                                                </div>                                      
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/photoshop.png" alt="PHOTOSHOP" title="PHOTOSHOP"/>
                                                </div>                                      
                                                <div class="icons-box-img">
                                                    <img src="dist/img/icons/illustrator.png" alt="ILLUSTRATOR" title="ILLUSTRATOR"/> 
                                                </div>                                       
                                            </div>                         
                                        </div>
                                    </div>                                    
                                </div>
                            </div>                    
                        </div>                  
                    </div>  
                </div>      
            </section>       
        </main>
        <footer class="l-footer">
          
        </footer>
      
    <!--Implication Javascript-->
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