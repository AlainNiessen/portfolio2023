// retrieve elements for the animation 
const HAMBURGER = document.querySelector('.hamburger');
const NAV = document.querySelector('.nav-links'); // all the nav menu
const NAV_LINKS = document.querySelectorAll('.nav-links li'); // all the nav-links individually

  

const NAV_SLIDE = () => {
    // add EventListener click on Hamburger Element (TOGGLE NAV + LINK ANIMATION
    HAMBURGER.addEventListener('click', () => {

        // FADE IN/OUT
        NAV.classList.toggle('nav-active');

        // BURGER TO CROSS ANIMATION
        HAMBURGER.classList.toggle('cross');
    })

    NAV_LINKS.forEach(element => {
        element.addEventListener('click', () => {
            // FADE IN/OUT
            if(window.innerWidth <= 768) {
                NAV.classList.toggle('nav-active');            

                // BURGER TO CROSS ANIMATION
                HAMBURGER.classList.toggle('cross');
            }                      
        })
    });
}
// call function
NAV_SLIDE();


if (NAV_LINKS.length) {
    NAV_LINKS.forEach((link) => {
      link.addEventListener('click', (e) => {
        NAV_LINKS.forEach((link) => {
            link.classList.remove('active');
        });
        //e.preventDefault();
        link.classList.add('active');
      });
    });
  }






