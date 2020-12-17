/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset; // Created the variable that will be needed later
window.onscroll = function() // When the user starts scrolling it automaticly will run the function
{
  var currentScrollPos = window.pageYOffset; // Safes the current position in an variable
  if (prevScrollpos > currentScrollPos) // Checks if the user is scrolling up then do :
  {
    document.getElementsByTagName("HEADER")[0].style.top = "0"; // Make the header visible
  } else {
    document.getElementsByTagName("HEADER")[0].style.top = "-50px"; // Make the header invisible by swiping it up
  }
  prevScrollpos = currentScrollPos; // Safes the current scroll to compare it later
} 