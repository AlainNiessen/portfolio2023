/* --- CLASS PROJECT --- */

class Project {
    constructor (object) {
        this.img = object.img,
        this.title = object.title,
        this.longDescription = object.longDescription,
        this.shortDescription = object.shortDescription,
        this.moreBTN = object.moreBTN,
        this.technos = object.technos,
        this.titleTechno = object.titleTechno,
        this.demoLink = object.demoLink,
        this.titleDemoLink = object.titleDemoLink,
        this.codeLink = object.codeLink,
        this.titleCodeLink = object.titleCodeLink,
        
        this.createProject();
    }
    createProject() {
        /* --- FIRST STEP => CREATING PROJECT ---*/
        // retrieve project container
        let parentElement = document.getElementById('project-row');

        // create responsive container based on grid system in grid.scss
        let responsiveContainer = document.createElement('div');
        responsiveContainer.classList.add('col-12');
        responsiveContainer.classList.add('col-md-12');
        responsiveContainer.classList.add('col-lg-6');

        // create project container
        let project = document.createElement('div');
        project.classList.add('m-main-project');
        project.classList.add('animation');
        project.id = 'm-main-project-'+this.title;        

        let projectImage = document.createElement('img');
        projectImage.classList.add('m-main-project-img');
        projectImage.src = this.img;
        projectImage.alt = this.title;
        projectImage.title = this.title;

        project.append(projectImage);

        let projectIllustration = document.createElement('div');
        projectIllustration.classList.add('m-main-project-illustration');        

        let projectTitle = document.createElement('h3');
        let titleContent = document.createTextNode(this.title);
        projectTitle.append(titleContent);

        let projectShortDescription = document.createElement('p');
        let shortDescriptionContent = document.createTextNode(this.shortDescription);
        projectShortDescription.append(shortDescriptionContent);

        let projectmoreBTNBox = document.createElement('div');
        projectmoreBTNBox.classList.add('center');  

        let projectmoreBTN = document.createElement('button');
        projectmoreBTN.classList.add('btn');
        projectmoreBTN.classList.add('btn-primary');
        projectmoreBTN.classList.add('btn-custom');
        projectmoreBTN.classList.add('m-main-project-more-btn');
        projectmoreBTN.id = 'm-main-project-more-btn-'+this.title; 
        let moreBTNContent = document.createTextNode(this.moreBTN);
        projectmoreBTN.append(moreBTNContent);
        projectmoreBTNBox.append(projectmoreBTN);

        // let projectIcon = document.createElement('img');
        // projectIcon.classList.add('m-main-project-icon');
        // projectIcon.src = "dist/img/glasses.png";
        // projectIcon.alt = "glasses";
        // projectIcon.title = "glasses";

        projectIllustration.append(projectTitle, projectShortDescription, projectmoreBTNBox);
        project.append(projectIllustration);
        responsiveContainer.append(project);
        parentElement.append(responsiveContainer); 
         
        /* --- SECOND STEP => MANAGE INFOBOX --- */
        // retrieve relative container
        let relativeContainer = document.getElementById('m-portfolio-projects');

        // create infobox of project (position absolute to relative container)
        let projectInfobox = document.createElement('div');
        projectInfobox.classList.add('show-project-details');
        projectInfobox.id = "show-project-details-"+this.title;
        relativeContainer.append(projectInfobox);

        // adding exit-button
        let exitBTN = document.createElement('i');
        exitBTN.classList.add('far');
        exitBTN.classList.add('fa-times-circle');
        exitBTN.classList.add('back-to-page');
        exitBTN.classList.add('exit');
        exitBTN.id = 'back-to-page-'+this.title;
        projectInfobox.append(exitBTN);

        // adding informations to box
        let title = document.createElement('h2');
        let titleContentBox = document.createTextNode(this.title);
        title.append(titleContentBox);
        projectInfobox.append(title);

        let description = document.createElement('p');
        let descriptionContentBox = document.createTextNode(this.longDescription);
        description.append(descriptionContentBox);
        projectInfobox.append(description);

        let titleTechnos = document.createElement('h3');
        let titleTechnosContentBox = document.createTextNode(this.titleTechno);
        titleTechnos.append(titleTechnosContentBox);
        projectInfobox.append(titleTechnos);

        let technoUL = document.createElement('ul');
        for (let techno of this.technos) {
            let technoLI = document.createElement('li');
            let technoLIContentBox = document.createTextNode(techno);
            technoLI.append(technoLIContentBox);
            technoUL.append(technoLI);
        }
        projectInfobox.append(technoUL);

        let buttonBox = document.createElement('div');
        buttonBox.classList.add('buttonBox');
        let btnWeb = document.createElement('a');
        btnWeb.classList.add('btn');
        btnWeb.classList.add('btn-primary');
        btnWeb.classList.add('btn-custom');
        btnWeb.href = this.demoLink;
        btnWeb.target = "_blank";
        let btnWebContentBox = document.createTextNode(this.titleDemoLink);
        btnWeb.append(btnWebContentBox);
        let btnCode = document.createElement('a');
        btnCode.classList.add('btn');
        btnCode.classList.add('btn-primary');
        btnCode.classList.add('btn-custom');
        btnCode.href = this.codeLink;
        btnCode.target = "_blank";
        let btnCodeContentBox = document.createTextNode(this.titleCodeLink);
        btnCode.append(btnCodeContentBox);
        buttonBox.append(btnWeb, btnCode);
        projectInfobox.append(buttonBox);        
    }
}

