let font_family = document.getElementById("font_family");
let font_size = document.getElementById("font_size");
let font_italic= document.getElementById("font_italic");
let font_bold= document.getElementById("font_bold");
let font_underline= document.getElementById("font_underline");
let text= document.getElementById("text");

function updateText() {
    text.style.fontFamily = font_family.value;
    text.style.fontSize = font_size.value;
    text.style.fontStyle = font_italic.checked ? "italic" : "normal";
    text.style.fontWeight = font_bold.checked ? "bold" : "normal";
    text.style.textDecoration = font_underline.checked ? "underline" : "none";
  }
  
  font_family.addEventListener("change", updateText);
  font_size.addEventListener("change", updateText);
  font_italic.addEventListener("change", updateText);
  font_bold.addEventListener("change", updateText);
  font_underline.addEventListener("change", updateText);
  

  