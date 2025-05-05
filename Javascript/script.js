$(document).ready(function() {
    $('#contactForm').submit(function(e) {
      e.preventDefault();
      $.post("php/contact.php", $(this).serialize(), function(response) {
        alert(response);
      });
    });
  });
  