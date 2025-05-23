document.addEventListener("DOMContentLoaded", function() { 
  mobileNav();

  const shapeIds = ['green1', 'pink', 'green2'];

  shapeIds.forEach(id => {
    const shape = document.getElementById(id);
    if (shape) {
        shape.style.position = 'absolute';

        const shapeWidth = shape.clientWidth || 50;
        const shapeHeight = shape.clientHeight || 50;

        const viewportWidth = window.innerWidth;
        const viewportHeight = window.innerHeight;

        const maxX = viewportWidth - (shapeWidth * 2);
        const maxY = viewportHeight - (shapeHeight * 2);

        let x, y;

        // Generate positions until they're NOT in the top-left quadrant

        if (isSkinny()) {
          console.log("Mobile device detected");
          do {
            x = Math.floor(Math.random() * maxX);
            y = Math.floor(Math.random() * maxY);
          } while (x < viewportWidth && y < viewportHeight / 2);
        } else {
          console.log("Mobile device detected");
          do {
            x = Math.floor(Math.random() * maxX);
            y = Math.floor(Math.random() * maxY);
          } while (x < viewportWidth / 2 && y < viewportHeight / 2);
        }
        
        shape.style.left = `${x}px`;
        shape.style.top = `${y}px`;
    }
  });

  
});

function isSkinny() {
  const minWidth = 768; // Minimum width for desktop devices
  return window.innerWidth < minWidth || screen.width < minWidth;
}


function mobileNav() {
  let nav = document.querySelector('ul.nav');
  let hamb = document.querySelector('.hamb');
  let doll = document.querySelector('.doll a');

  doll.onclick = function(e) {
    e.preventDefault;
    // console.log('book clicked!')
    return false;
  }

  document.addEventListener('click', function(event) {
    if (nav.classList.contains('show')) {
      if (event.target !== nav && !nav.contains(event.target)) {
        // console.log('outside element');
        nav.classList.remove('show');
      }
    } else {
      // console.log('the nav is closed');
      if (event.target == hamb || hamb.contains(event.target)) {
        event.preventDefault;
        // console.log('burger clicked')
        nav.classList.toggle('show');
      }    
    }
  });

}