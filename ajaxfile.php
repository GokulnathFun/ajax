<?php
include 'db.php';

$name = $_POST['head_name'];

$sql = "select count(heading) from content where heading='".$name."'";
$stmt = $conn->query($sql);
$res = $stmt->FetchColumn();

if($res==1){
    $get_sql="select * from content where heading='".$name."'";
    $get_stmt = $conn->query($get_sql);
    $get_res = $get_stmt->FetchAll();
}
else{
    echo "no";
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

.modal-body{
    font-size: 17px;
    background-color: #e9ecef;
}

.highlight_text{
	color: crimson;
    font-family: myTamilFont;
}

@font-face
{
    font-family: myTamilFont;
    src: url(Valluvar\Valluvar.ttf);
}
.heading{
   color: #d5ff00;
}

</style>

</head>

<body>

<div class="container-fluid">
<?php 

    foreach($get_res as $row){
?>
<pre> 

    <center><b>திருச்சிற்றம்பலம்</b></center>

    <center class="highlight_text"> பன்னிரு திருமுறை</center>

    <center><b><?php echo $name; ?></b></center>

<b>முதல் திருமுறை</b>

<center class="highlight_text"> <?php echo $row['place_1']; ?> </center>

<p><?php echo $row['content_1']; ?></p>

<b>இரண்டாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_2']; ?></center>

<p><?php echo $row['content_2']; ?></p>

<b>மூன்றாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_3']; ?></center>

<p><?php echo $row['content_3']; ?></p>


    <?php } ?>

<b>நான்காம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_4']; ?></center>
<p><?php echo $row['content_4']; ?></p>

<b>ஐந்தாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_5']; ?></center>

<p><?php echo $row['content_5']; ?></p>

<b>ஆறாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_6']; ?></center>

<p><?php echo $row['content_6']; ?></p>

<b>ஏழாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_7']; ?></center>

<p><?php echo $row['content_7']; ?></p>

<b>எட்டாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_8']; ?></center>

<p><?php echo $row['content_8']; ?></p>

<center class="highlight_text"><?php echo $row['place_9']; ?></center>

<p><?php echo $row['content_9']; ?></p>


<b>ஒன்பதாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_10']; ?></center>

<p><?php echo $row['content_10']; ?></p>

<center class="highlight_text"><?php echo $row['place_11']; ?></center>

<p><?php echo $row['content_11']; ?></p>

<b>பத்தாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_12']; ?></center>

<p><?php echo $row['content_12']; ?></p>

<b>பதினோராம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_13']; ?></center>

<p><?php echo $row['content_13']; ?></p>

<b>பன்னிரண்டாம் திருமுறை</b>

<center class="highlight_text"><?php echo $row['place_14']; ?></center>

<p><?php echo $row['content_14']; ?></p>


<center><b>திருச்சிற்றம்பலம்</b></center>
 
                   </pre>

</div>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


</html>

