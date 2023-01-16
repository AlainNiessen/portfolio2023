/* --- HANDLING CONTACTFORM --- */

// Submit Contactform
let form = document.getElementById('form')
form.addEventListener('submit', formSubmit);

function formSubmit (e) {
    //prevent
    e.preventDefault();

    //retrieve data from submit
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;
    let subject = document.getElementById('subject').value;
    let lang = document.getElementById('form').dataset.lang;; //for language of response message   
    let error = false;

    // object construction for AJAX request
    const PARAM = {};
    PARAM['name'] = name;
    PARAM['email'] = email;
    PARAM['message'] = message;
    PARAM['subject'] = subject;
    PARAM['lang'] = lang; 

    // check of inputs 
    if(PARAM['name'] === "") {
        error= true;
        changeBorderColor(`#name`, "red");
        changeDisplay(`.box_name .error-input`, 'block');            
    } else {
        changeBorderColor(`#name`, "green");
        changeDisplay(`.box_name .error-input`, 'none');
    }

    if(PARAM['email'] === "") {
        error= true;
        changeBorderColor(`#email`, "red");
        changeDisplay(`.box_email .error-input`, 'block');            
    } else {
        changeBorderColor(`#email`, "green");
        changeDisplay(`.box_email .error-input`, 'none');
    }

    if(!validateEmail(PARAM['email'])) {
        error= true;
        changeBorderColor(`#email`, "red");
        changeDisplay(`.box_email .error-input`, 'block');  
    } else {
        changeBorderColor(`#email`, "green");
        changeDisplay(`.box_email .error-input`, 'none');
    }

    if(PARAM['subject'] === "") {
        error= true;
        changeBorderColor(`#subject`, "red");
        changeDisplay(`.box_subject .error-input`, 'block');            
    } else {
        changeBorderColor(`#subject`, "green");
        changeDisplay(`.box_subject .error-input`, 'none');
        //$(`.box_${key} i`).css('opacity', '1');
    }
        
    if(PARAM['message'] === "") {
        error= true;
        changeBorderColor(`#message`, "red");
        changeDisplay(`.box_message .error-input`, 'block');            
    } else {
        changeBorderColor(`#message`, "green");
        changeDisplay(`.box_message .error-input`, 'none');
        //$(`.box_${key} i`).css('opacity', '1');
    }
    
    //if error is false => request AJAX
    if(!error) {  
        requestAjax(PARAM);
    }        
}

//blur event on input (handling directly control over inputs)
let formInputs = document.querySelectorAll('input');

formInputs.forEach(element => {
    element.addEventListener('blur', (e) => {
        // retrieve element via its ID
        let elementID = e.target.id;
        let valueInput = document.getElementById(elementID).value;
        
        if (valueInput == "" || (elementID == "email" && !validateEmail(valueInput))) {           
            changeBorderColor(`#${elementID}`, "red");
            changeDisplay(`.box_${elementID} .error-input`, 'block');   
        } else {
            changeBorderColor(`#${elementID}`, "green");
            changeDisplay(`.box_${elementID} .error-input`, 'none');
        }    
    })
});

// fonction qui contrôle si email est valide
function validateEmail(email) {
    const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
    return re.test(String(email).toLowerCase());
}

// affichage bordure coloré
function changeBorderColor (element, color) {
    document.querySelector(element).style.borderColor = color;
}

// change display or error message
function changeDisplay (element, display) {
    document.querySelector(element).style.display = display;
}

//function display success message after sending
function messageMail(data) {
    // retrieve message box
    const PARENT = document.getElementById('messageResultat');
    const CONTENT = document.getElementById('messageResultatContent');
    // RAZ content message box
    CONTENT.innerHTML = "";
    // retrieve informations from mail.php (errorcode and message)
    const ERRORCODE = data["errorCode"];
    const MESSAGE = data["message"];
      
    // creating message based on returned value of MESSAGE
    let text = document.createElement('p');
    let textContentBox = document.createTextNode(MESSAGE);
    text.append(textContentBox);
    let icon;

    switch(ERRORCODE) {
        case "0":
            icon = document.createElement('i');
            icon.classList.add('fas');
            icon.classList.add('fa-check');
            PARENT.style.border = '0.1rem solid green';
            PARENT.style.color = 'green';
            text.style.color = 'green';         
            break;
        case "1":
            icon = document.createElement('i');
            icon.classList.add('fas');
            icon.classList.add('fa-times');
            PARENT.style.border = '0.1rem solid red';
            PARENT.style.color = 'red';
            text.style.color = 'red'; 
            break;
    }   

    CONTENT.append(text, icon);
    // fadein - fadeout animation based on function fadeInOut
    fadeInOut(PARENT, 200, 3500);
    // reset values and bordercolor of form inputs
    setTimeout(function() {
        resetForm();
    }, 2000);    
}

//function te reset form after sending
function resetForm () {
    
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let message = document.getElementById('message');
    let subject = document.getElementById('subject');

    [name, email, message, subject].forEach((element) => {
        element.value = "";
        element.style.borderColor = "rgb(0, 122, 126)"; // same color as in variables scss    
    })
}

//function fadeIn-fadeOut element
function fadeInOut(elem, speed1, speed2) {
    
    var inInterval = setInterval(function() {
        elem.style.display = "block";
        if (elem.style.display == "block") {
            clearInterval(inInterval);
            var outInterval = setInterval(function() {
                elem.style.display = "none";
                if (elem.style.display == "none");
                    clearInterval(outInterval);
            }, speed2 );
        } // end if
    }, speed1 );
} 

