<?php

// retrieve translation value => standart value is english
$lang = isset($_GET["lang"]) ? $_GET["lang"] : "en";

// check if language is real
if( $lang == "en" || $lang == "fr" || $lang =="de"):
      // when language exists => display page
      $displaySite = true;

      // switch for translations
      switch($lang):
            case "en":
                  // NAVBAR
                  $menu_about = "About Me";
                  $menu_projects = "Projects";
                  $menu_contact = "Contact";
                  // INTRO SECTION
                  $intro_title = "WEBDEVELOPPER";
                  $intro_text = "Welcome to my portfolio! Would you like to learn more about me and my work?";
                  $intro_btn_about = "About Me";
                  $intro_btn_projects = "Projects";
                  break;
            case "fr":
                  // NAVBAR
                  $menu_about = "À propos";
                  $menu_projects = "Projets";
                  $menu_contact = "Contact";
                  // INTRO SECTION
                  $intro_title = "DEVELOPPEUR WEB";
                  $intro_text = "Bienvenue sur mon portefeuille! Souhaitez-vous en savoir plus sur moi et mon travail ?";
                  $intro_btn_about = "À propos";
                  $intro_btn_projects = "Projets";
                  break;
            case "de":
                  // NAVBAR
                  $menu_about = "Über mich";
                  $menu_projects = "Projekte";
                  $menu_contact = "Kontakt";
                  // INTRO SECTION
                  $intro_title = "WEBENTWICKLER";
                  $intro_text = "Willkommen auf meinem Portfolio! Möchten Sie mehr über mich und meine Arbeit erfahren?";
                  $intro_btn_about = "Über mich";
                  $intro_btn_projects = "Projekte";
                  break;
      endswitch;
else:
      // when language doesn't exist => display error message
      $displaySite = false;
endif;
