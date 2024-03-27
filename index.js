
 



 let slideIndex = 1;

 function showSlides(n) {
   let i;
   let slides = document.getElementsByClassName("mySlides");
   let dots = document.getElementsByClassName("dot");
   if (n > slides.length) { slideIndex = 1 }
   if (n < 1) { slideIndex = slides.length }
   for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex - 1].style.display = "block";
   dots[slideIndex - 1].className += " active";
 }

 function plusSlides(n) {
   showSlides(slideIndex += n);
 }

 function currentSlide(n) {
   showSlides(slideIndex = n);
 }

 function showSlides() {
   let i;
   let slides = document.getElementsByClassName("mySlides");
   for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
   }
   slideIndex++;
   if (slideIndex > slides.length) { slideIndex = 1 }
   slides[slideIndex - 1].style.display = "block";
   setTimeout(showSlides, 7000);
 }

 showSlides(slideIndex);

 function filterCards() {
  // Get the search input value
  var input = document.getElementById('searchInput').value.toUpperCase();
  
  // Get all elements with the class name "titre"
  var titles = document.getElementsByClassName('titre');

  // Loop through all titles
  for (var i = 0; i < titles.length; i++) {
    // Get the text content of the title and convert it to uppercase
    var txtValue = titles[i].textContent || titles[i].innerText;
    
    // Check if the title matches the search input
    if (txtValue.toUpperCase().indexOf(input) > -1) {
      // If the title matches, display the parent element
      titles[i].parentNode.style.display = "";
    } else {
      // If the title doesn't match, hide the parent element
      titles[i].parentNode.style.display = "none";
    }
  }
}   