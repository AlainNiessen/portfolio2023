/* --- MAIN ---*/

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

// creating projects
let language = sessionStorage.getItem("lang");
let descriptionPortfolio = "";
let descriptionSoap = "";
let titleTechno = "";
let titleWebLink = "";
let titleCodeLink = "";

if(language == "de") {
    descriptionPortfolio = "Mein Portfolio ist ein One-Pager und eher statischer Natur. Drei Sprachen stehen zur Auswahl. Die Übersetzungen sind in einer externen PHP-Datei gespeichert. Die verschiedenen Projekte werden über eine Javascript-Klasse erstellt. Die verschiedenen Eigenschaften der verschiedenen Projekte werden in einer Tabelle definiert und somit werden die Projekte später über die DOM-Manipulation und einer Schleife visuell erstellt. Die Kommunikation über das Kontaktformular wird über PHPMailer organisiert.";
    descriptionSoap = "Bei diesem Projekt handelt es sich um meine Endarbeit im Rahmen meines Studiums. Es handelt sich um ein Projekt für einen realen Kunden. Für die Erstellung des Projektes habe ich mit dem PHP-Framework Symfony gearbeitet. Alle Aspekte und Technologien, die ich im Laufe des Studiums erlernt habe oder mir selbst beigebracht habe, fliessen in diesem Projekt ein und geben somit einen guten Überblick über meine Fähigkeiten.";
    titleTechno = "Verwendete Technologien";
    titleWebLink = "Webseite";
    titleCodeLink = "Kode";
} else if(language == "fr") {
    descriptionPortfolio = "Mon portfolio est un \"One-Pager\" et de nature plus statique. Vous avez le choix entre trois langues. Les traductions sont stockées dans un fichier PHP externe. Les différents projets sont créés à l'aide d'une classe Javascript. Les différentes propriétés des différents projets sont définies dans un tableau et ainsi les projets sont ensuite créés visuellement via la manipulation DOM et une boucle. La communication via le formulaire de contact est organisée via PHPMailer.";
    descriptionSoap = "Ce projet est mon travail de fin d'études. C'est un projet pour un vrai client. Pour la création du projet j'ai travaillé avec le framework PHP Symfony. Tous les aspects et technologies que j'ai appris pendant mes études ou que j'ai appris moi-même se retrouvent dans ce projet et donnent ainsi un bon aperçu de mes compétences.";
    titleTechno = "Technologies utilisées";
    titleWebLink = "Site Web";
    titleCodeLink = "Code";
} else if (language == "en") {
    descriptionPortfolio = "My portfolio is a one-pager and more static in nature. There are three languages ​​to choose from. The translations are stored in an external PHP file. The various projects are created using a Javascript class. The various properties of the different projects are defined in a table and thus the projects are later created visually via DOM manipulation and a loop. Communication via the contact form is organized via PHPMailer.";
    descriptionSoap = "This project is my final work as part of my studies. It is a project for a real customer. For the creation of the project I worked with the PHP framework Symfony. All aspects and technologies that I learned during my studies or that I taught myself flow into this project and thus give a good overview of my skills.";
    titleTechno = "Technologies used";
    titleWebLink = "Website";
    titleCodeLink = "Code";
}

// define of all projects
let projects = [
    {
        img: "dist/img/projects/portfolioCover.jpg",
        title: "Portfolio",
        description: descriptionPortfolio,
        technos: ["HTML5", "SASS-CSS3", "NODE.JS - GULP", "JAVASCRIPT", "PHP", "PHPMailer", "WAMP"],
        titleTechno: titleTechno,
        demoLink: "#",
        titleDemoLink: titleWebLink,
        codeLink: "#",
        titleCodeLink: titleCodeLink
    },
    {
        img: "dist/img/projects/soapCover.jpg",
        title: "SoapOpera",
        description: descriptionSoap,
        technos: ["HTML5 - TWIG", "PHP FRAMEWORK SYMFONY", "EASY ADMIN3", "MYSQL", "CHART.JS", "Openstreetmaps - API Mapbox - Leaflet", "VICHUPLOADER", "DOM-PDF", "STRIPE-CHECKOUT"],
        titleTechno: titleTechno,
        demoLink: "#",
        titleDemoLink: titleWebLink,
        codeLink: "#",
        titleCodeLink: titleCodeLink
    },    
]

// looping the project-array and creating new projects in every iteration
projects.forEach((project) => {
    new Project(project);
}); 

// animation open project
let projectsPortfolio = document.querySelectorAll('.m-main-project');

projectsPortfolio.forEach(pro => {
    pro.addEventListener('click', () => {
        //retrieve correct project description
        let id = pro.id;
        let idSep = id.split("-");
        let projectTitle = idSep[3];

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

