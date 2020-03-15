<?php

include 'db.php';
echo "<SNn";
if($conn){
    $sql = "SELECT * FROM content";
	$stm = $conn->query($sql);

	$users = $stm->fetchAll();
}

$check = "மயானம்";


function get_content($check, $conn){
  $get_sql = "select count(heading) from content where heading='".$check."'";
  $get_stmt = $conn->query($get_sql);
  $res = $get_stmt->fetchColumn();
  echo $res;
  if($res == 1){
   ShowContent();
  }
  else{
    echo "No";
  }
}

// if ($_GET['test']) {
//   echo "yes";

//   get_content($check, $conn);
// }

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])){
  ob_clean();
  $ch = $_POST['name'];
}


?>


<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>பன்னிரு திருமுறை</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
<br><br>

        
<div class="container">
<form action="" method="post">
    <div class="row justify-content-md-center">
        <?php foreach ($users as $row) { ?>
   
            <div class="col">
                  <button id ="<?php echo $row["heading"]; ?>" name="name" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                     <?php echo $row["heading"]; ?>
                  </button>
            </div>

            <div class="col"></div>
   
        <?php } ?>            
   
    </div>
    </form>


    <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> <?php echo $ch ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

 


</div>


<script>

$(document).ready(function() {
    $("button[name = 'name']").click(function(e) {
      var name = $(e.target).attr('id');
      console.log(name);
        $.ajax({
          type: 'POST',
          url: 'index.php',
          data: ({"name": name}),
          success: function(result){
            console.log(result);
            alert(result);  
          }
        });
    });
});


</script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>

