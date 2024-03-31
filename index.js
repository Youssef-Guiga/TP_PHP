
 



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
  var input = document.getElementById('searchInput').value.toUpperCase();

  var titles = document.getElementsByClassName('titre');
  for (var i = 0; i < titles.length; i++) {
    var txtValue = titles[i].textContent || titles[i].innerText;

    if (txtValue.toUpperCase().indexOf(input) > -1) {
      titles[i].parentNode.style.display = "";
    } else {
      titles[i].parentNode.style.display = "none";
    }
  }
}   


