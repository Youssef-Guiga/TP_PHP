
 



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

 function filterItems() {
    // Get the input value from the search bar
    var input = document.getElementById("searchInput").value.trim().toLowerCase();
    
    // Get all elements with the class name matching the input value
    var trikouetItems = document.querySelectorAll(".trikouet .card-items");
    var klassetItems = document.querySelectorAll(".klasset .card-items");
    var firstContainer = document.querySelector(".first");
    var secondContainer = document.querySelector(".second");
  
    // Hide all items and both containers
    hideAllItems();
    firstContainer.style.display = "none";
    secondContainer.style.display = "none";

    // Show only the items and container corresponding to the search term
    if (input === "trikouet") {
      trikouetItems.forEach(function(item) {
        item.style.display = ""; // Empty string removes inline display style
      });
      firstContainer.style.display = "block"; // Show the first container
    } else if (input === "klasset") {
      klassetItems.forEach(function(item) {
        item.style.display = ""; // Empty string removes inline display style
      });
      secondContainer.style.display = "block"; // Show the second container
    } else if (input === "") {
      // If the search bar is empty, show all items and containers
      showAllItems();
      firstContainer.style.display = "block";
      secondContainer.style.display = "block";
    }
}

function hideAllItems() {
    // Get all elements with the class "card-items"
    var allItems = document.querySelectorAll(".card-items");
    
    // Hide all items
    allItems.forEach(function(item) {
        item.style.display = "none";
    });
}

function showAllItems() {
    // Get all elements with the class "card-items"
    var allItems = document.querySelectorAll(".card-items");
    
    // Show all items
    allItems.forEach(function(item) {
        item.style.display = "";
    });
}   