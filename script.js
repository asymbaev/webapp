/* Add an active class to the current navbar link */
var navbarLinks = document.querySelectorAll(".navbar a");

navbarLinks.forEach(function(link) {
  link.addEventListener("click", function() {
    navbarLinks.forEach(function(link) {
      link.classList.remove("active");
    });
    this.classList.add("active");
  });
});

/* CTA */
  const form = document.getElementById('newsletter-form');
  const email = document.getElementById('email');
  const response = document.getElementById('response');

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const emailVal = email.value;
    if (validateEmail(emailVal)) {
      response.innerHTML = 'Thank you for subscribing!';
      response.style.color = '#00b894';
      email.value = '';
    } else {
      response.innerHTML = 'Please enter a valid email address.';
      response.style.color = '#d63031';
    }
  });

  function validateEmail(email) {
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
  }


  //Checkout and AddtoCart

  $(document).ready(function() {
    // Handle add-to-cart button click
    $('.add-to-cart').on('click', function() {
      // Get the product ID from the data attribute
      var productId = $(this).data('product-id');

      // Send an AJAX request to the server to add the item to the cart
      $.ajax({
        type: 'POST',
        url: 'add_to_cart.php',
        data: { product_id: productId },
        success: function(response) {
          // Show a success message or update the cart count
          alert(response.message);
        },
        error: function(xhr, status, error) {
          // Show an error message
          alert('An error occurred while adding the item to the cart.');
        }
      });
    });

    // Handle checkout button click
    $('.checkout').on('click', function() {
      // Send an AJAX request to the server to process the checkout
      $.ajax({
        type: 'POST',
        url: 'checkout.php',
        success: function(response) {
          // Redirect the user to the thank you page or show a success message
          window.location.href = 'thank_you.php';
        },
        error: function(xhr, status, error) {
          // Show an error message
          alert('An error occurred while processing the checkout.');
        }
      });
    });
  });


  //checkout
  