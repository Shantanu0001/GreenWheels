$(document).ready(function() {
    // Button click event handler
    $("#redirectButton").click(function() {
      $.ajax({
        url: "session_decider.php",
        type: "POST",
        success: function(response) {
          // Redirect to the returned URL
          window.location.href = response;
        }
      });
    });
  });
  