/* --- MAIN ---*/

/* STOCK LANGUAGE PARAMETER IN SESSION STORAGE*/
// retrieve data-lang for translations in class projet (titles, description)
let flags = document.querySelectorAll('.flag');

if(!sessionStorage.getItem("lang")) {
    sessionStorage.setItem("lang", "en");
}

flags.forEach(flag => {   
    flag.addEventListener('click', () => {
        let language = flag.dataset.lang;  
        if(sessionStorage.getItem("lang")) { 
            sessionStorage.removeItem("lang");   
            sessionStorage.setItem("lang", language);
        }
    })
})

/* CREATING PROJECTS */
let language = sessionStorage.getItem("lang");
let longDescriptionPortfolio = "";
let longDescriptionSoap = "";
let shortDescriptionSoap = "";
let shortDescriptionPortfolio = "";
let moreBTN = "";
let titleTechno = "";
let titleWebLink = "";
let titleCodeLink = "";

if(language == "de") {
    longDescriptionPortfolio = "Mein Portfolio ist ein One-Pager und eher statischer Natur. Drei Sprachen stehen zur Auswahl. Die Übersetzungen sind in einer externen PHP-Datei gespeichert. Die verschiedenen Projekte werden über eine Javascript-Klasse erstellt. Die verschiedenen Eigenschaften der verschiedenen Projekte werden in einer Tabelle definiert und somit werden die Projekte später über die DOM-Manipulation und einer Schleife visuell erstellt. Die Kommunikation über das Kontaktformular wird über PHPMailer organisiert.";
    longDescriptionSoap = "Bei diesem Projekt handelt es sich um meine Endarbeit im Rahmen meines Studiums. Es handelt sich um ein Projekt für einen realen Kunden. Für die Erstellung des Projektes habe ich mit dem PHP-Framework Symfony gearbeitet. Alle Aspekte und Technologien, die ich im Laufe des Studiums erlernt habe oder mir selbst beigebracht habe, fliessen in diesem Projekt ein und geben somit einen guten Überblick über meine Fähigkeiten. Ein komplett eingerichteter Adminbereich ermöglicht es, die gesamte Webseite zu managen und diverse Statistiken abzurufen. Auf Wunsch ist eine Demo möglich.";
    longDescriptionISL = "Hier sehen Sie die Prüfungsarbeit zum Kurs \"Création des sites statiques\", welche am Ende vom ersten Jahr der Ausbildung zum Webentwickler realisiert wurde. Ein vorgegebenes Template musste so gut es geht nachgebaut werden.";
    shortDescriptionPortfolio = "Eine wundervolle Möglichkeit mich kennenzulernen!";
    shortDescriptionSoap = "Meine Endarbeit im Rahmen des Studiums zum Webentwickler!";   
    shortDescriptionISL = "Meine erste Prüfungsarbeit im Rahmen des Studiums zum Webentwickler!"; 
    moreBTN = "Weiterlesen...";    
    titleTechno = "Verwendete Technologien";
    titleWebLink = "Webseite";
    titleCodeLink = "Kode";
} else if(language == "fr") {
    longDescriptionPortfolio = "Mon portfolio est un \"One-Pager\" et de nature plus statique. Vous avez le choix entre trois langues. Les traductions sont stockées dans un fichier PHP externe. Les différents projets sont créés à l'aide d'une classe Javascript. Les différentes propriétés des différents projets sont définies dans un tableau et ainsi les projets sont ensuite créés visuellement via la manipulation DOM et une boucle. La communication via le formulaire de contact est organisée via PHPMailer.";
    longDescriptionSoap = "Ce projet est mon travail de fin d'études. C'est un projet pour un vrai client. Pour la création du projet j'ai travaillé avec le framework PHP Symfony. Tous les aspects et technologies que j'ai appris pendant mes études ou que j'ai appris moi-même se retrouvent dans ce projet et donnent ainsi un bon aperçu de mes compétences. Une interface d'administration entièrement configurée permet de gérer l'ensemble du site Web et d'appeler diverses statistiques. Une démo est possible sur demande.";
    longDescriptionISL = "Vous pouvez voir ici l'examen du cours \"Création des sites statiques\", réalisé en fin de première année de formation de développeur web. Un modèle donné devait être recréé au mieux.";
    shortDescriptionSoap = "Mon travail de fin d'études dans le cadre de mes études de développeur web!";
    shortDescriptionPortfolio = "Une belle opportunité de me connaître !";
    shortDescriptionISL = "Mon premier examen dans le cadre de mes études de développeur web !";
    moreBTN = "Lire la suite...";    
    titleTechno = "Technologies utilisées";
    titleWebLink = "Site Web";
    titleCodeLink = "Code";
} else if (language == "en") {
    longDescriptionPortfolio = "My portfolio is a one-pager and more static in nature. There are three languages ​​to choose from. The translations are stored in an external PHP file. The various projects are created using a Javascript class. The various properties of the different projects are defined in a table and thus the projects are later created visually via DOM manipulation and a loop. Communication via the contact form is organized via PHPMailer.";
    longDescriptionSoap = "This project is my final work as part of my studies. It is a project for a real customer. For the creation of the project I worked with the PHP framework Symfony. All aspects and technologies that I learned during my studies or that I taught myself flow into this project and thus give a good overview of my skills. A completely set up admin area makes it possible to manage the entire website and call up various statistics. A demo is possible on request.";
    longDescriptionISL = "Here you can see the exam  for the \"Création des sites statiques\" course, which was realized at the end of the first year of web developer studies. A given template had to be recreated as best as possible.";
    shortDescriptionPortfolio = "A wonderful opportunity to get to know me!";
    shortDescriptionSoap = "My final work as part of my web developer studies!";
    shortDescriptionISL = "My first exam as part of my web developer studies!";
    moreBTN = "Read more..."; 
    titleTechno = "Technologies used";
    titleWebLink = "Website";
    titleCodeLink = "Code";
}

// define of all projects
let projects = [
    {
        img: "dist/img/projects/portfolioCover.JPG",
        title: "Portfolio",
        longDescription: longDescriptionPortfolio,
        shortDescription: shortDescriptionPortfolio,
        moreBTN: moreBTN,
        technos: ["HTML5", "SASS-CSS3", "NODE.JS - GULP", "JQUERY(AJAX)", "JAVASCRIPT", "PHP", "PHPMailer"],
        titleTechno: titleTechno,
        demoLink: "https://www.alainniessen.be",
        titleDemoLink: titleWebLink,
        codeLink: "#",
        titleCodeLink: titleCodeLink
    },
    {
        img: "dist/img/projects/islweb.PNG",
        title: "ISLWeb",
        longDescription: longDescriptionISL,
        shortDescription: shortDescriptionISL,
        moreBTN: moreBTN,
        technos: ["HTML5", "SASS-CSS3", "NODE.JS - NODESASS","JAVASCRIPT"],
        titleTechno: titleTechno,
        demoLink: "https://alainniessen.github.io/ISLWeb/",
        titleDemoLink: titleWebLink,
        codeLink: "https://github.com/AlainNiessen/ISLWeb",
        titleCodeLink: titleCodeLink
    },    
    {
        img: "dist/img/projects/soapCover.JPG",
        title: "SoapOpera",
        longDescription: longDescriptionSoap,
        shortDescription: shortDescriptionSoap,
        moreBTN: moreBTN,
        technos: ["HTML5 - TWIG", "PHP FRAMEWORK SYMFONY", "JAVASCRIPT", "EASY ADMIN3", "MYSQL", "CHART.JS", "OPENSTREETMAPS - API MAPBOX - LEAFLET", "VICHUPLOADER", "DOM-PDF", "STRIPE-CHECKOUT"],
        titleTechno: titleTechno,
        demoLink: "#",
        titleDemoLink: titleWebLink,
        codeLink: "#",
        titleCodeLink: titleCodeLink
    }
]

/* CREATING PROJECTS VIA CLASS PROJECT */
projects.forEach((project) => {
    new Project(project);
}); 

/* ANIMATION ON SIDE OPEN - CLOSE INFOBOX PROJECT */
// animation open project
let moreBTNs = document.querySelectorAll('.m-main-project-more-btn');

moreBTNs.forEach(btn => {
    btn.addEventListener('click', () => {
        //retrieve correct project description
        let id = btn.id;
        let idSep = id.split("-");
        let projectTitle = idSep[5];

        let projectDescription = document.getElementById("show-project-details-"+projectTitle);
        // open description
        projectDescription.classList.add("show");       
    })    
});
// animation close project
let closeIcons = document.querySelectorAll('.back-to-page');

closeIcons.forEach(icon => {
    icon.addEventListener('click', () => {
        //retrieve correct project description
        let id = icon.id;
        let idSep = id.split("-");
        let projectTitle = idSep[3];

        let projectDescription = document.getElementById("show-project-details-"+projectTitle);
        // close description
        projectDescription.classList.remove("show");       
    })    
});


 
    




