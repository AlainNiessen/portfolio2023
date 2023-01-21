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
                  $intro_hello = "Hello, my name is";
                  $intro_title = "WEBDEVELOPPER";
                  $intro_text = "Welcome to my portfolio! Would you like to learn more about me and my work?";
                  $intro_btn_about = "About Me";
                  $intro_btn_projects = "Projects";
                  // ABOUT ME SECTION
                  $about_main_title = "About Me";
                  $about_text_part1 = "After graduating from high school, I first studied social education. After working in this field for about 16 years, I decided in 2019 to reorient myself professionally to become a web developer, because I have always been interested in this area and during my studies, which I completed at the \"Institut Saint Laurent\" in Liège/Belgium, it quickly became clear that I had made the right decision.";
                  $about_text_part2 = "With a great thirst for knowledge, I familiarized myself with the various aspects and technologies of web development and graduated in 2022 with great distinction. An internship at \"Cloth.Kreativbureau\" in Eupen/Belgium gave me the first opportunity to work in a professional setting.";
                  $about_text_download_cv = "You can download my CV under the following link and get a detailed overview of my professional career, my experiences and my other interests:";
                  $about_text_skills = "\"Skills\" are an assessment of abilities. I was able to familiarize myself with these technologies and approaches during my studies. Additional research and practice allowed me to develop the skills. Refining existing skills and acquiring new ones is my highest priority.";
                  break;
            case "fr":
                  // NAVBAR
                  $menu_about = "À propos";
                  $menu_projects = "Projets";
                  $menu_contact = "Contact";
                  // INTRO SECTION
                  $intro_hello = "Bonjour, mon nom est";
                  $intro_title = "DEVELOPPEUR WEB";
                  $intro_text = "Bienvenue sur mon portefeuille! Souhaitez-vous en savoir plus sur moi et mon travail ?";
                  $intro_btn_about = "À propos";
                  $intro_btn_projects = "Projets";
                  // ABOUT ME SECTION
                  $about_main_title = "À propos";                  
                  $about_text_part1 = "Après avoir obtenu mon diplôme d'études secondaires, j'ai d'abord étudié la pédagogie sociale. Après avoir travaillé dans ce domaine pendant environ 16 ans, j'ai décidé en 2019 de me réorienter professionnellement et de devenir développeur web, car ce domaine m'a toujours intéressé et durant mes études, que j'ai faites à l'Institut Saint Laurent à Liège/Belgique diplômé, il est vite devenu clair que j'avais pris la bonne décision.";
                  $about_text_part2 = "Doté d'une grande soif de connaissances, je me suis familiarisé avec les différents aspects et technologies du développement web et ai obtenu mon diplôme en 2022 avec grande distinction. Un stage chez \"Cloth.Kreativbureau\" à Eupen/Belgique m'a donné la première opportunité de travailler dans un environnement professionnel.";
                  $about_text_download_cv = "Sous le lien suivant, vous pouvez télécharger mon CV et obtenir un aperçu détaillé de mon parcours professionnel, de mes expériences et de mes autres centres d'intérêt :";
                  $about_text_skills = "\"Skills\" sont une évaluation des compétences. J'ai pu me familiariser avec ces technologies et ces approches au cours de mes études. La recherche et la pratique supplémentaires m'ont permis de développer les compétences. Affiner les compétences existantes et en acquérir de nouvelles est ma priorité absolue.";
                  break;
            case "de":
                  // NAVBAR
                  $menu_about = "Über mich";
                  $menu_projects = "Projekte";
                  $menu_contact = "Kontakt";
                  // INTRO SECTION
                  $intro_hello = "Hallo, mein Name ist";
                  $intro_title = "WEBENTWICKLER";
                  $intro_text = "Willkommen auf meinem Portfolio! Möchten Sie mehr über mich und meine Arbeit erfahren?";
                  $intro_btn_about = "Über mich";
                  $intro_btn_projects = "Projekte";
                  // ABOUT ME SECTION
                  $about_main_title = "Über mich";
                  $about_text_part1 = "Nach dem Abitur habe ich zunächst Sozialpädagogik studiert. Nachdem ich ca. 16 Jahre in diesem Bereich tätig war, entschied ich 2019, mich beruflich neu zu orientieren und Webentwickler zu werden, da mich dieser Bereich schon immer interessierte und während meines Studiums, das ich am \"Institut Saint Laurent\" in Lüttich/Belgien absolvierte, wurde schnell klar, dass ich die richtige Entscheidung getroffen hatte.";
                  $about_text_part2 = "Mit großem Wissensdurst habe ich mich in die verschiedenen Aspekte und Technologien der Webentwicklung eingearbeitet und 2022 mit großer Auszeichnung abgeschlossen. Ein Praktikum bei \"Cloth.Kreativbureau\" in Eupen/Belgien gab mir die erste Möglichkeit, in einem professionellen Umfeld zu arbeiten.";
                  $about_text_download_cv = "Unter folgendem Link können Sie meinen Lebenslauf herunterladen und sich einen detaillierten Überblick über meinen beruflichen Werdegang, meine Erfahrungen und meine weiteren Interessen verschaffen:";
                  $about_text_skills = "\"Skills\" sind eine Einschätzung von Fähigkeiten. Mit folgenden Technologien und Ansätzen konnte ich mich während meines Studiums vertraut machen. Zusätzliche Recherchen und Praxis ermöglichten es mir, die Fähigkeiten auszubauen. Vorhandene Fähigkeiten zu verfeinern und neue zu erwerben, hat für mich höchste Priorität.";
                  break;
      endswitch;
else:
      // when language doesn't exist => display error message
      $displaySite = false;
endif;
