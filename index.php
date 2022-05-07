<!DOCTYPE html>
<html>
  <head>
    <title>jQuery Form Example</title>
    <link rel="stylesheet"href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="form.js"></script>

    <script>
      $(function(){
  var hidestuff = function(){
    $(".Birthday-form,.animal-form").hide();
  }
  
  $("select[name='eventtype']").change(function(){
    hidestuff();
    
    var value = $(this).val();
    if(value == "Birthday"){
      $(".Birthday-form").show();
    }
    if(value == "c-bd", value == "k-bd", value == "debut"){
        $(".Birthday-form").show();    
    }
   
  });
  hidestuff();
});
  </script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>



</head>

<?php



?>

  <body>
    <div class="col-sm-6 col-sm-offset-3">
      <h1>Booking</h1>

      <form action="process.php" method="POST">

      

        <div id="name-group" class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Full Name"
          />
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="email@example.com"
          />
        </div>

 

        <div id="event-group" class="form-group">
          <label for="eventtype">Choose Event Type</label>
          <select class="form-control" name="eventtype" >
            <option value="">- Choose - </option>
            <option value="Birthday" >Birthday</option>
            <option value="Wedding">Wedding</option>
            <option value="Conference" >Conference</option>
          </select>
        </div>

        <div class="Birthday-form">
          <div class="form-group">
            <select class="form-control"  name="bdtype">
                <option value="">- Choose - </option>
                <option value="c-bd">Car surprise birthday </option>
                <option value="k-bd">Kids birthday</option>
                <option value="debut">Debut</option>
              </select>
          </div>
        </div>


          <div id="date-group" class="form-group">
            <label for="Date">Date</label>
            <input type="text" name="Date" id="Date" class="form-control datepicker" autocomplete="off">
          </div>

          <div id="venue-group" class="form-group">
            <label for="venue">venue</label>
            <input
              type="text"
              class="form-control"
              id="venue"
              name="venue"
              placeholder="venue"
            />
          </div>
    

        

       

          <div class="col-lg-6 col-md-3 mb-5">
            <label for="validationCustom06" class="form-label">ESTIMATED GUEST COUNT</label>
            <select class="form-select" id="validationCustom06" name="Guest" >
              <option selected disabled value="">Choose...</option>
              <option >0-49</option>
              <option >50-74</option>
              <option >75-99</option>
            </select>
        
          </div>

          <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input class="form-control" id="phone" name="Pnumber" type="number" onKeyPress="if(this.value.length==11) return false;"  >
            <div class="invalid-feedback">
              Please provide a valid Phone Number.
            </div>
          </div>

        <button type="submit" class="btn btn-success" name="Register" formaction="index.php">
          Submit
        </button>
      </form>
    </div>
  </body>

  <script type="text/javascript">
   
    $('.datepicker').datepicker({ 
        startDate: '+5d',
        changeMonth: true,
        todayHighlight : true
    });
  
  
</script>
</html>