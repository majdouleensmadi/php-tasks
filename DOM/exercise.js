let mydiv= document.getElementById("mydiv");
mydiv.addEventListener("mouseover", function() {
    document.getElementById("mydiv").innerHTML = "can i help u";
  });
  mydiv.addEventListener("mouseout", function() {
    document.getElementById("mydiv").innerHTML = "hello world";
  });


