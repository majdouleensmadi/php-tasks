
let showlink1=document.getElementsByClassName("showlink1");
// let showlink2=document.getElementsByClassName("showlink2");
let p2_show= document.getElementById("p2_show");
let showlink3=document.getElementsByClassName("showlink3");
let hidelink=document.getElementsByClassName("hidelink");
let hidelink2=document.getElementsByClassName("hidelink2");
let hidelink3=document.getElementsByClassName("hidelink3");
 let p1_text=document.getElementById("p1_text");
 let p2_text=document.getElementById("p2_text");
 let p3_text=document.getElementById("p3_text");

 hidelink2.addEventListener("onclick", function() {
    document.getElementById("p2_text").style.display = "none";
  });


 p2_text.style.backgroundColor="red";