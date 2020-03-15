<?php

include 'db.php';
if($conn){
    $conn_sql = "SELECT * FROM content";
	$stm = $conn->query($conn_sql);
	$users = $stm->fetchAll();
}
?>


<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>பன்னிரு திருமுறை</title>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<style>
  body{
    background-image: url("256781.jpg");
    background-position: center;
    background-size: cover;
  }
  h3{
    font-weight: bolder;
  }
</style>
</head>

<body>
<br><br>

        
<div class="container">

<div class="row">
  <div class="col"></div>
  <div class="col">
    <center><h3>பன்னிரு திருமுறை</h3></center>
  </div>
  <div class="col"></div>
</div>

    <div class="row justify-content-md-center">
        <?php foreach ($users as $row) { ?>
            <div class="col">
                  <button  id="<?php echo $row["heading"]; ?>" class="name btn btn-primary">
                     <?php echo $row["heading"]; ?>
                  </button>
            </div>

            <div class="col"></div>
   
        <?php } ?>            
   
    </div>


    <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id=title> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


</div>
</body>

<script>    

$(document).ready(function(){

$('.name').click(function(e){
  var name = $(e.target).attr('id');
  console.log(name);
  document.getElementById("title").innerHTML = name; 
  // AJAX request
  $.ajax({
   url: 'ajaxfile.php',
   type: 'post',
   data: {head_name: name},
   success: function(response){ 
     // Add response in Modal body
     $('.modal-body').html(response);

     // Display Modal
     $('#myModal').modal('show'); 
   }
 });
});
});

</script>



<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

