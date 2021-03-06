/* When the user scrolls down, hide the navbar. When the user scrolls up, show the header */
var prevScrollpos = window.pageYOffset; 
window.onscroll = function() 
{
  var currentScrollPos = window.pageYOffset; 
  if (prevScrollpos > currentScrollPos && document.getElementById("container-side-nav").style.width != "100%")  
  {
    document.getElementsByTagName("HEADER")[0].style.top = "0px";
    document.getElementsByTagName("NAV")[0].style.top = "40px";
  } else {
    document.getElementsByTagName("HEADER")[0].style.top = "-40px";
    document.getElementsByTagName("NAV")[0].style.top = "0px"; 
  }
  prevScrollpos = currentScrollPos; 
} 


/* This will make the nav bar popup when clicked on the 3 lined button in the nav */
function switchNav() 
{
  if (document.getElementById("container-side-nav").style.width == "100%") {
      document.getElementById("container-side-nav").style.width = "0";
      document.getElementsByTagName("NAV")[0].style.top = "40px";
      document.getElementsByTagName("HEADER")[0].style.top = "0px";

  } else {
      document.getElementById("container-side-nav").style.width = "100%";
      document.getElementsByTagName("NAV")[0].style.top = "0px"; 
      document.getElementsByTagName("HEADER")[0].style.top = "-40px";
  }
}

