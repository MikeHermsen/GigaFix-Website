/* When the user scrolls down, hide the navbar. When the user scrolls up, show the header */
var prevScrollpos = window.pageYOffset; 
window.onscroll = function() 
{
  var currentScrollPos = window.pageYOffset; 
  if (prevScrollpos > currentScrollPos) 
  {
    document.getElementsByTagName("HEADER")[0].style.top = "0";
    document.getElementsByTagName("NAV")[0].style.top = "50px";
  } else {
    document.getElementsByTagName("NAV")[0].style.top = "0px"; 
    document.getElementsByTagName("SECTION")[0].style.top = "0px"; 
  }
  prevScrollpos = currentScrollPos; 
} 
