class Project{constructor(e){this.img=e.img,this.title=e.title,this.description=e.description,this.technos=e.technos,this.titleTechno=e.titleTechno,this.demoLink=e.demoLink,this.titleDemoLink=e.titleDemoLink,this.codeLink=e.codeLink,this.titleCodeLink=e.titleCodeLink,this.createProject()}createProject(){let e=document.getElementById("project-row"),t=document.createElement("div");t.classList.add("col-12"),t.classList.add("col-md-6"),t.classList.add("col-lg-6");let i=document.createElement("div");i.classList.add("m-main-project"),i.id="m-main-project-"+this.title;let s=document.createElement("h3"),o=document.createTextNode(this.title);s.append(o);let n=document.createElement("div");n.classList.add("m-main-project-illustration");let a=document.createElement("img");a.classList.add("m-main-project-img"),a.src=this.img,a.alt=this.title,a.title=this.title;let r=document.createElement("img");r.classList.add("m-main-project-icon"),r.src="dist/img/glasses.png",r.alt="glasses",r.title="glasses",n.append(a,r),i.append(s,n),t.append(i),e.append(t);let l=document.getElementById("m-portfolio-projects"),c=document.createElement("div");c.classList.add("show-project-details"),c.id="show-project-details-"+this.title,l.append(c);let d=document.createElement("i");d.classList.add("far"),d.classList.add("fa-times-circle"),d.classList.add("back-to-page"),d.id="back-to-page-"+this.title,c.append(d);let m=document.createElement("h2"),p=document.createTextNode(this.title);m.append(p),c.append(m);let u=document.createElement("p"),h=document.createTextNode(this.description);u.append(h),c.append(u);let g=document.createElement("h3"),L=document.createTextNode(this.titleTechno);g.append(L),c.append(g);let f=document.createElement("ul");for(let e of this.technos){let t=document.createElement("li"),i=document.createTextNode(e);t.append(i),f.append(t)}c.append(f);let k=document.createElement("div");k.classList.add("buttonBox");let P=document.createElement("a");P.classList.add("btn"),P.classList.add("btn-primary"),P.classList.add("btn-custom"),P.href=this.demoLink;let v=document.createTextNode(this.titleDemoLink);P.append(v);let j=document.createElement("a");j.classList.add("btn"),j.classList.add("btn-primary"),j.classList.add("btn-custom"),j.href=this.codeLink;let E=document.createTextNode(this.titleCodeLink);j.append(E),k.append(P,j),c.append(k)}}const cursor=document.querySelector(".cursor"),cursor2=document.querySelector(".cursor2");document.addEventListener("mousemove",(e=>{cursor.setAttribute("style","top: "+(e.pageY-8)+"px; left: "+(e.pageX-8)+"px;"),cursor2.setAttribute("style","top: "+(e.pageY-12)+"px; left: "+(e.pageX-12)+"px;")})),document.addEventListener("click",(e=>{cursor.classList.add("clickExpand"),cursor2.classList.add("clickExpand"),setTimeout((()=>{cursor.classList.remove("clickExpand"),cursor2.classList.remove("clickExpand")}),700)}));const NAV_SLIDE=()=>{const e=document.querySelector(".hamburger"),t=document.querySelector(".nav-links"),i=document.querySelectorAll(".nav-links li");e.addEventListener("click",(()=>{t.classList.toggle("nav-active"),i.forEach(((e,t)=>{e.style.animation?e.style.animation="":e.style.animation=`navLinkFade .5s ease forwards ${t/7+.5}s`})),e.classList.toggle("cross")}))};NAV_SLIDE();let flags=document.querySelectorAll(".flag");sessionStorage.getItem("lang")||sessionStorage.setItem("lang","en"),flags.forEach((e=>{e.addEventListener("click",(()=>{let t=e.dataset.lang;sessionStorage.getItem("lang")&&(sessionStorage.removeItem("lang"),sessionStorage.setItem("lang",t))}))}));let language=sessionStorage.getItem("lang"),descriptionPortfolio="",descriptionSoap="",titleTechno="",titleWebLink="",titleCodeLink="";"de"==language?(descriptionPortfolio="Mein Portfolio ist ein One-Pager und eher statischer Natur. Drei Sprachen stehen zur Auswahl. Die Übersetzungen sind in einer externen PHP-Datei gespeichert. Die verschiedenen Projekte werden über eine Javascript-Klasse erstellt. Die verschiedenen Eigenschaften der verschiedenen Projekte werden in einer Tabelle definiert und somit werden die Projekte später über die DOM-Manipulation und einer Schleife visuell erstellt. Die Kommunikation über das Kontaktformular wird über PHPMailer organisiert.",descriptionSoap="Bei diesem Projekt handelt es sich um meine Endarbeit im Rahmen meines Studiums. Es handelt sich um ein Projekt für einen realen Kunden. Für die Erstellung des Projektes habe ich mit dem PHP-Framework Symfony gearbeitet. Alle Aspekte und Technologien, die ich im Laufe des Studiums erlernt habe oder mir selbst beigebracht habe, fliessen in diesem Projekt ein und geben somit einen guten Überblick über meine Fähigkeiten.",titleTechno="Verwendete Technologien",titleWebLink="Webseite",titleCodeLink="Kode"):"fr"==language?(descriptionPortfolio="Mon portfolio est un \"One-Pager\" et de nature plus statique. Vous avez le choix entre trois langues. Les traductions sont stockées dans un fichier PHP externe. Les différents projets sont créés à l'aide d'une classe Javascript. Les différentes propriétés des différents projets sont définies dans un tableau et ainsi les projets sont ensuite créés visuellement via la manipulation DOM et une boucle. La communication via le formulaire de contact est organisée via PHPMailer.",descriptionSoap="Ce projet est mon travail de fin d'études. C'est un projet pour un vrai client. Pour la création du projet j'ai travaillé avec le framework PHP Symfony. Tous les aspects et technologies que j'ai appris pendant mes études ou que j'ai appris moi-même se retrouvent dans ce projet et donnent ainsi un bon aperçu de mes compétences.",titleTechno="Technologies utilisées",titleWebLink="Site Web",titleCodeLink="Code"):"en"==language&&(descriptionPortfolio="My portfolio is a one-pager and more static in nature. There are three languages ​​to choose from. The translations are stored in an external PHP file. The various projects are created using a Javascript class. The various properties of the different projects are defined in a table and thus the projects are later created visually via DOM manipulation and a loop. Communication via the contact form is organized via PHPMailer.",descriptionSoap="This project is my final work as part of my studies. It is a project for a real customer. For the creation of the project I worked with the PHP framework Symfony. All aspects and technologies that I learned during my studies or that I taught myself flow into this project and thus give a good overview of my skills.",titleTechno="Technologies used",titleWebLink="Website",titleCodeLink="Code");let projects=[{img:"dist/img/projects/portfolioCover.jpg",title:"Portfolio",description:descriptionPortfolio,technos:["HTML5","SASS-CSS3","NODE.JS - GULP","JAVASCRIPT","PHP","PHPMailer","WAMP"],titleTechno:titleTechno,demoLink:"#",titleDemoLink:titleWebLink,codeLink:"#",titleCodeLink:titleCodeLink},{img:"dist/img/projects/soapCover.jpg",title:"SoapOpera",description:descriptionSoap,technos:["HTML5 - TWIG","PHP FRAMEWORK SYMFONY","EASY ADMIN3","MYSQL","CHART.JS","Openstreetmaps - API Mapbox - Leaflet","VICHUPLOADER","DOM-PDF","STRIPE-CHECKOUT"],titleTechno:titleTechno,demoLink:"#",titleDemoLink:titleWebLink,codeLink:"#",titleCodeLink:titleCodeLink}];projects.forEach((e=>{new Project(e)}));let projectsPortfolio=document.querySelectorAll(".m-main-project");projectsPortfolio.forEach((e=>{e.addEventListener("click",(()=>{let t=e.id.split("-")[3];document.getElementById("show-project-details-"+t).classList.add("show")}))}));let closeIcons=document.querySelectorAll(".back-to-page");closeIcons.forEach((e=>{e.addEventListener("click",(()=>{let t=e.id.split("-")[3];document.getElementById("show-project-details-"+t).classList.remove("show")}))}));