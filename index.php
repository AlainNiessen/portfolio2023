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
                        <g>
                            <g>
                                <path fill="#007A7E" d="M526.614,52.087h2.158V19.898h-2.327V48.13l-22.548-28.232h-1.703v32.189h2.258V24.261L526.614,52.087z
                                    M474.491,49.993V36.675h16.349v-1.966h-16.349V21.986h18.741v-2.088h-20.977v32.189h21.328v-2.094H474.491z M462.441,23.484
                                    c-1.357-1.29-2.799-2.25-4.467-2.837c-1.665-0.625-3.421-0.962-5.511-0.962c-1.758,0-3.292,0.186-4.601,0.625
                                    c-1.419,0.337-2.578,0.943-3.562,1.708c-0.973,0.767-1.873,1.725-2.454,2.824c-0.563,1.157-0.741,2.435-0.741,3.835
                                    c0,1.388,0.178,2.422,0.691,3.399c0.485,0.804,1.034,1.6,2.051,2.12c0.823,0.629,1.957,1.139,3.157,1.546
                                    c1.444,0.517,2.947,0.871,4.606,1.161c1.646,0.388,3.101,0.842,4.473,1.179c1.194,0.334,2.228,0.772,3.17,1.334
                                    c0.732,0.554,1.407,1.252,1.788,2.003c0.372,0.696,0.688,1.548,0.688,2.595c0,2.09-0.83,3.645-2.385,4.663
                                    c-1.545,1.026-3.748,1.538-6.664,1.538c-2.378,0-4.648-0.365-6.554-1.101c-1.913-0.978-3.623-2.019-4.894-3.497l-1.31,1.996
                                    c3.424,3.095,7.688,4.643,12.714,4.643c1.715,0,3.277-0.035,4.64-0.514c1.547-0.351,2.595-0.894,3.622-1.548
                                    c1.031-0.701,1.886-1.547,2.467-2.581c0.576-1.061,0.739-2.397,0.739-3.754c0-1.406-0.142-2.621-0.675-3.558
                                    c-0.535-0.947-1.405-1.886-2.357-2.495c-0.954-0.618-2.221-1.182-3.556-1.586c-1.33-0.478-2.904-0.985-4.703-1.276
                                    c-1.71-0.288-3.066-0.748-4.298-1.047c-1.04-0.243-2.074-0.735-2.847-1.252c-0.775-0.514-1.293-1.034-1.767-1.648
                                    c-0.293-0.753-0.556-1.524-0.556-2.547c0-2.112,0.811-3.676,2.188-4.896c1.419-1.146,3.769-1.78,6.927-1.78
                                    c3.783,0,6.757,1.192,8.847,3.516L462.441,23.484z M432.816,23.484c-1.341-1.29-2.889-2.25-4.437-2.837
                                    c-1.566-0.625-3.572-0.962-5.659-0.962c-1.567,0-3.116,0.186-4.604,0.625c-1.308,0.337-2.574,0.943-3.551,1.708
                                    c-0.979,0.767-1.673,1.725-2.215,2.824c-0.578,1.157-0.992,2.435-0.992,3.835c0,1.388,0.337,2.422,0.76,3.399
                                    c0.423,0.804,1.169,1.6,1.99,2.12c0.85,0.629,1.953,1.139,3.402,1.546c1.197,0.517,2.699,0.871,4.501,1.161
                                    c1.722,0.388,3.198,0.842,4.33,1.179c1.385,0.334,2.439,0.772,3.165,1.334c0.937,0.554,1.454,1.252,1.969,2.003
                                    c0.45,0.696,0.52,1.548,0.52,2.595c0,2.09-0.683,3.645-2.285,4.663c-1.597,1.026-3.859,1.538-6.52,1.538
                                    c-2.552,0-4.646-0.365-6.685-1.101c-2.033-0.978-3.613-2.019-5.008-3.497l-1.187,1.996c3.521,3.095,7.746,4.643,12.747,4.643
                                    c1.709,0,3.256-0.035,4.697-0.514c1.334-0.351,2.622-0.894,3.627-1.548c0.998-0.701,1.662-1.547,2.238-2.581
                                    c0.581-1.061,0.953-2.397,0.953-3.754c0-1.406-0.352-2.621-0.885-3.558c-0.528-0.947-1.181-1.886-2.214-2.495
                                    c-1.032-0.618-2.123-1.182-3.613-1.586c-1.42-0.478-2.984-0.985-4.643-1.276c-1.609-0.288-3.099-0.748-4.211-1.047
                                    c-1.245-0.243-2.192-0.735-3.017-1.252c-0.709-0.514-1.294-1.034-1.581-1.648c-0.484-0.753-0.557-1.524-0.557-2.547
                                    c0-2.112,0.59-3.676,2.138-4.896c1.427-1.146,3.612-1.78,6.729-1.78c3.89,0,6.757,1.192,8.848,3.516L432.816,23.484z
                                    M386.046,49.993V36.675h16.243v-1.966h-16.243V21.986h18.592v-2.088h-21.017v32.189h21.522v-2.094H386.046z M373.019,19.898
                                    h-2.411v32.189h2.411V19.898z M357.907,52.087h2.152V19.898h-2.37V48.13l-22.501-28.232h-1.75v32.189h2.301V24.261L357.907,52.087
                                    z M306.335,52.087h4.237V19.962h-5.167v23.075l-18.329-23.139h-4.017v32.189h5.048V29.5L306.335,52.087z M273.582,19.898h-5.084
                                    v32.189h5.084V19.898z M242.019,39.544l5.315-13.736l5.162,13.736H242.019z M232.366,52.087h5.422l3.352-8.718h12.389l3.359,8.718
                                    h5.402l-12.679-32.189h-4.459L232.366,52.087z M229.272,52.087v-4.473h-17.215V19.898h-5.026v32.189H229.272z M180.495,39.544
                                    l5.416-13.736l5.164,13.736H180.495z M170.934,52.087h5.369l3.347-8.718h12.402l3.413,8.718h5.3l-12.683-32.189h-4.454
                                    L170.934,52.087z"/>
                            </g>
                        </g>
                        </svg>
                    </div>
                    <ul class="nav-links">
                        <div class="center-links">
                        <li class="nav-links-link">
                            <i class="fa fa-home"></i>
                            <a href="#intro" >
                                Home
                            </a>
                        </li>
                        <li class="nav-links-link">
                            <i class="fa fa-user"></i>
                            <a href="#aboutme" >
                                <?php echo $menu_about; ?>
                            </a>
                        </li>
                        <li class="nav-links-link">
                            <i class="fa fa-briefcase"></i>
                            <a href="#projects" >
                                <?php echo $menu_projects; ?>
                            </a>
                        </li>
                        <li class="nav-links-link">
                            <i class="fa fa-comments"></i>
                            <a href="#contact" >
                                <?php echo $menu_contact; ?>
                            </a>
                        </li>
                        <li class="nav-links-flag">
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
                        </div>
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
            <div class="m-main-infobox-social">
                <a href="https://www.facebook.com/alain.niessen.10" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/alain-niessen-84b8431b2/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.deviantart.com/silence-in-your-head" target="_blank" title="DeviantArt"><i class="fab fa-deviantart"></i></a>
                <a href="https://github.com/AlainNiessen" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            </div>
            <!-- INTRO SECTION -->
            <section class="m-main-intro" id="intro">                
                <div class="m-main-intro-text">
                    <h3><?php echo $intro_hello; ?></h3>
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
                    <h1 class="section-title"><?php echo $about_main_title; ?></h1>
                    <div class="m-main-about-infobox">                         
                        <div class="m-main-about-infobox-personel">                                   
                            <p>
                                <?php echo $about_text_part1; ?>
                            </p>                            
                            <p>
                                <?php echo $about_text_part2; ?>
                            </p>
                            <p>
                                <?php echo $about_text_download_cv; ?>
                            </p>
                            <div class="center">
                                <a href="<?php echo $about_cv_link ?>" download="<?php echo $about_cv_download ?>" class="btn btn-primary btn-custom">Download CV</a>
                            </div>                                                    
                        </div>                   
                        <div class="m-main-about-infobox-skills">
                            <h2>Skills</h2>  
                            <p>
                                <?php echo $about_text_skills; ?>
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
                                        <img src="dist/img/icons/wordpress.png" alt="WORDPRESS" title="WORDPRESS"/>   
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
            </section>
            <section class="m-main-projects" id="projects">
                <div class="wrapper">
                    <h1 class="section-title">Portfolio</h1>
                    <p>
                        <?php echo $portfolio_text; ?>
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
                    <h1 class="section-title"><?php echo $contact_main_title ?></h1>
                    <p>
                        <?php echo $contact_text_intro; ?>
                    </p>
                    <div class="m-contact-icons">
                        <div class="m-contact-icon-box">
                            <i class="fa fa-phone"></i>
                            <h4><?php echo $contact_phone; ?></h4>
                            <a href="tel:+32498415694">0032/(0)498 41 56 94</a>
                        </div>
                        <div class="m-contact-icon-box">
                            <i class="fa fa-envelope"></i>
                            <h4><?php echo $contact_mail; ?></h4>
                            <a href="mailto:alain_niessen@hotmail.com">alain_niessen@hotmail.com</a>
                        </div>
                    </div>
                    <div class="m-contact-container">                           
                        <div class="m-contactForm">
                            <p>
                                <?php echo $contact_form; ?>
                            </p>
                            <form class="m-formContact" id="form" data-lang=<?php echo $lang; ?>>
                                <div class="box_name">
                                    <p class="error-input"><?php echo $contact_form_error_name; ?></p>
                                    <input type="text" name="name" id="name" placeholder=<?php echo $contact_form_placeholder_name; ?> />                                            
                                </div>                                        
                                <div class="box_email">
                                    <p class="error-input"><?php echo $contact_form_error_email; ?></p>
                                    <input type="email" name="email" id="email" placeholder=<?php echo $contact_form_placeholder_email; ?> />                                            
                                </div>
                                <div class="box_subject">
                                    <p class="error-input"><?php echo $contact_form_error_subject; ?></p>
                                    <input type="text" name="subject" id="subject" placeholder=<?php echo $contact_form_placeholder_subject; ?> />                                            
                                </div>
                                <div class="box_message">
                                    <p class="error-input"><?php echo $contact_form_error_message; ?></p>
                                    <textarea placeholder=<?php echo $contact_form_placeholder_message; ?> id="message" name="message"></textarea>                                            
                                </div>                                        
                                <button type="submit" id="submit" class="btn btn-primary btn-custom"><?php echo $contact_form_btn; ?></button>
                                <div id="messageResultat" class="messageResultat">
                                    <div id="messageResultatContent" class="messageResultatContent"></div>
                                </div>
                            </form>
                        </div>                        
                    </div>                                                      
                </div>           
            </section>  
        </main>     
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