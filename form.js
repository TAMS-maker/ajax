$(document).ready(function () {
  $("form").submit(function (event) {

    //Every time we submit the form, our errors from our previous submission are still there.
    // You will need to clear them by removing them as soon as the form is submitted again.
    $(".form-group").removeClass("has-error");
    $(".help-block").remove();

    var formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      venue: $("#venue").val(),
      Date: $("#Date").val(),
    };

    $.ajax({
      type: "POST",
      url: "process.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
      //In the PHP script, the code checks to ensure that all the fields are required. 
      //If a field is not present, an error is sent back.
      if (!data.success) {
        if (data.errors.name) {
          $("#name-group").addClass("has-error");
          $("#name-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }

        if (data.errors.email) {
          $("#email-group").addClass("has-error");
          $("#email-group").append(
            '<div class="help-block">' + data.errors.email + "</div>"
          );
        }

        if (data.errors.venue) {
          $("#venue-group").addClass("has-error");
          $("#venue-group").append(
            '<div class="help-block">' + data.errors.venue + "</div>"
          );
        }

        if (data.errors.Date) {
          $("#date-group").addClass("has-error");
          $("#date-group").append(
            '<div class="help-block">' + data.errors.Date + "</div>"
          );
        }

        
      } else {
        $("form").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );
      }


    })

    //If there is an error connecting to the server, there will be no JSON response from the AJAX call. 
    //To prevent users from waiting for a response that will never arrive, you can provide an error message for connection failures.
    
    .fail(function (data) {
      $("form").html(
        '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
      );
    });

    event.preventDefault();
  });
});