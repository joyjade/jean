document.addEventListener("DOMContentLoaded", function() { 
  const shapeIds = ['green1', 'pink', 'green2'];

  shapeIds.forEach(id => {
    const shape = document.getElementById(id);
    if (shape) {
        shape.style.position = 'absolute';

        const shapeWidth = shape.clientWidth || 50;
        const shapeHeight = shape.clientHeight || 50;

        const viewportWidth = window.innerWidth;
        const viewportHeight = window.innerHeight;

        const maxX = viewportWidth - shapeWidth;
        const maxY = viewportHeight - shapeHeight;

        let x, y;

        // Generate positions until they're NOT in the top-left quadrant
        do {
            x = Math.floor(Math.random() * maxX);
            y = Math.floor(Math.random() * maxY);
        } while (x < viewportWidth / 2 && y < viewportHeight / 2);

        shape.style.left = `${x}px`;
        shape.style.top = `${y}px`;
    }
  });
});


