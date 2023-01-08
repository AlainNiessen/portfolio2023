// retrieve cursor element
const cursor = document.querySelector('.cursor');
const cursor2 = document.querySelector('.cursor2');

// add EventListener for mouseMOVE
document.addEventListener('mousemove', e => {
    // define style attribute for the cursor element
    // pageX and pageY returns the position of the cursor on the page
    // -8 and -12 to ajust cursor to the middle on the cercle
    cursor.setAttribute('style', 'top: '+(e.pageY - 8)+'px; left: '+(e.pageX - 8)+'px;');
    cursor2.setAttribute('style', 'top: '+(e.pageY - 12)+'px; left: '+(e.pageX - 12)+'px;');
})

// add EventListener for click
document.addEventListener('click', e => {
    // add class to the cursor
    cursor.classList.add('clickExpand');
    cursor2.classList.add('clickExpand');

    // remove class "clickExpand" after 700ms
    setTimeout(() => {
        cursor.classList.remove('clickExpand');
        cursor2.classList.remove('clickExpand');
    }, 700);
})