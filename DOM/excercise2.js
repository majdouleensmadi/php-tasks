


// Get the box element
let mydiv= document.getElementById("mydiv");

// Define an array of colors
var colors = ["red", "green", "blue", "yellow"];

// Set a counter for the current color index
var colorIndex = 0;

// Add a click event listener to the box
mydiv.addEventListener("click", function() {
  // Get the next color from the array
  var color = colors[colorIndex];
  
  // Change the background color of the box
  mydiv.style.backgroundColor = color;
  
  // Increment the color index
  colorIndex++;
  
  // If we've reached the end of the array, start over from the beginning
  if (colorIndex === colors.length) {
    colorIndex = 0;
  }
});




