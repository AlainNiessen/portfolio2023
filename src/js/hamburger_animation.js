const NAV_SLIDE = () => {
    // retrieve elements for the animation 
    const HAMBURGER = document.querySelector('.hamburger');
    const NAV = document.querySelector('.nav-links'); // all the nav menu
    const NAV_LINKS = document.querySelectorAll('.nav-links li'); // all the nav-links individually

    // add EventListener click on Hamburger Element (TOGGLE NAV + LINK ANIMATION
    HAMBURGER.addEventListener('click', () => {

        // FADE IN/OUT
        NAV.classList.toggle('nav-active');

        // LINK ANIMATION
        NAV_LINKS.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = ""
            } else {        
                link.style.animation = `navLinkFade .5s ease forwards ${index / 7 + 0.5}s`;
            }
        })

        // BURGER TO CROSS ANIMATION
        HAMBURGER.classList.toggle('cross');
    })
}

// call function
NAV_SLIDE();

