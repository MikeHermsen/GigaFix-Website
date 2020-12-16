/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() // When the user starts scrolling it automaticly will run the function
{
  var currentScrollPos = window.pageYOffset; 
  if (prevScrollpos > currentScrollPos)
  {
    document.getElementsByTagName("HEADER")[0].style.top = "0";
  } else {
    document.getElementsByTagName("HEADER")[0].style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
} 