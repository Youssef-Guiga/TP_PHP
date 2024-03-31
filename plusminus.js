document.addEventListener('DOMContentLoaded', function() {
    const minusBtns = document.querySelectorAll('.minus-btn');
    const plusBtns = document.querySelectorAll('.plus-btn');
  
    minusBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const input = btn.nextElementSibling;
        let value = parseInt(input.value);
        if (value > 1) {
          input.value = value - 1;
        }
      });
    });
  
    plusBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const input = btn.previousElementSibling;
        let value = parseInt(input.value);
        if (value < 10) {
          input.value = value + 1;
        }
      });
    });
  });



  document.getElementById('generate-receipt-btn').addEventListener('click', function() {

    var doc = new jsPDF();

    var y = 10;
    doc.setFontSize(16);
    doc.text('Receipt', 60, y);
    y += 10;
    var productRows = document.querySelectorAll('.product');
    console.log("Product rows:", productRows);


    var totalPrice = 0;
 
    for (var i = 0; i < productRows.length; i++) {
        var productRow = productRows[i];
        var productNameElement = productRow.querySelector('.name');
        var productPriceElement = productRow.querySelector('.price');
        var quantityInput = productRow.querySelector('.quantity input[type="number"]');
        
     
        console.log("Product Name Element:", productNameElement);
        console.log("Product Price Element:", productPriceElement);
        console.log("Quantity Input:", quantityInput);

       
        if (productNameElement && productPriceElement && quantityInput) {
            var productName = productNameElement.textContent.replace('Name: ', '');
            var productPrice = parseFloat(productPriceElement.textContent.replace('Price: ', '').replace('DT', ''));
            var quantity = parseInt(quantityInput.value);
            var productTotalPrice = quantity * productPrice;

           
            console.log("Product Name:", productName);
            console.log("Product Price:", productPrice);
            console.log("Quantity:", quantity);
            console.log("Product Total Price:", productTotalPrice);

           
            totalPrice += productTotalPrice;
        } else {
            console.log("Error: Missing or invalid element.");
        }
    }

    console.log("Total Price:", totalPrice);

    doc.setFontSize(14);
    doc.text('Total Price: ' + totalPrice + 'DT', 10, y);

    doc.save('receipt.pdf');
});





