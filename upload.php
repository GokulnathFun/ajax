<?php

include 'db.php';

if(isset($_POST['submit'])) {
    $heading = $_POST['heading'];
    $place_1 = $_POST['place_1'];
    $place_2 = $_POST['place_2'];
    $place_3 = $_POST['place_3'];
    $place_4 = $_POST['place_4'];
    $place_5 = $_POST['place_5'];
    $place_6 = $_POST['place_6'];
    $place_7 = $_POST['place_7'];
    $place_8 = $_POST['place_8'];
    $place_9 = $_POST['place_9'];
    $place_10 = $_POST['place_10'];
    $place_11 = $_POST['place_11'];
    $place_12 = $_POST['place_12'];
    $place_13 = $_POST['place_13'];
    $place_14 = $_POST['place_14'];
    
    $content_1 = $_POST['content_1'];
    $content_2 = $_POST['content_2'];
    $content_3 = $_POST['content_3'];
    $content_4 = $_POST['content_4'];
    $content_5 = $_POST['content_5'];
    $content_6 = $_POST['content_6'];
    $content_7 = $_POST['content_7'];
    $content_8 = $_POST['content_8'];
    $content_9 = $_POST['content_9'];
    $content_10 = $_POST['content_10'];
    $content_11 = $_POST['content_11'];
    $content_12 = $_POST['content_12'];
    $content_13 = $_POST['content_13'];
    $content_14 = $_POST['content_14'];    

    echo $place_2, $place_5, $place_8;
        
    
    
    $sql = "insert into content(`heading`, `place_1`, `content_1`, place_2, `content_2`, `place_3`, `content_3`, `place_4`, `content_4`,
                                 `place_5`, `content_5`, `place_6`, `content_6`, `place_7`, `content_7`, `place_8`, `content_8`, `place_9`, `content_9`, `place_10`,
                                 `content_10`, `place_11`, `content_11`, `place_12`, `content_12`, `place_13`, `content_13`, `place_14`, `content_14`)
                        values('$heading', '$place_1', '$content_1', '$place_2', '$content_2', '$place_3', '$content_3', '$place_4',
                                '$content_4', '$place_5', '$content_5', '$place_6', '$content_6', '$place_7', '$content_7', '$place_8', '$content_8', '$place_9', '$content_9', '$place_10', '$content_10',
                                '$place_11', '$content_11', '$place_12', '$content_12', '$place_13', '$content_13', '$place_14', '$content_14')";

    if($conn->query($sql)){
        echo "<script> alert(Inserted Successfully) </script>";
    }
    else{
        echo "<script> alert(UnSuccessfully) </script>";
    }
}

?>



<html>
<head>
    <title>Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    
<div class="container">

    <div class="row">
        <div class="col"></div>
        <div style="margin-left: 10px;">
        <h1 style="font-family: fantasy">Upload here !</h1>
        </div>   
        <div class="col"></div>
    </div>

<br><br>
<form action="" method="post" enctype="multipart/form-data">


    <div class="row">
        <div class="col"></div>
        <div class="col">
            <p><h3><center><b>திருச்சிற்றம்பலம்</b></center></h3></p>
        </div>
        <div class="col"></div>
    </div>

    <div class=row>
        <div class="col"> </div>
        <div class="col">
            <label for="sell">heading</label>
            <input type="text" name="heading" class="form-control" required>
        </div>
        <div class="col"></div>
    </div>


    <div class="row">
        <div class="col"></div>
        <div class="col">
            <p><center class="highlight_text"> <br><br>பன்னிரு திருமுறை</center></p>
        </div>
        <div class="col"></div>
    </div>

<!--1-->
    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>முதல் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 1 :</label>
            <input type="text" name="place_1" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">1st Paragraph</label> <br>
            <textarea name="content_1" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<br> <hr><!--2-->

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>இரண்டாம் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 2 :</label>
            <input type="text" name="place_2" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">2nd Paragraph</label> <br>
            <textarea name="content_2" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<br> <hr><!--3-->

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>மூன்றாம்  திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 3 :</label>
            <input type="text" name="place_3" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">3rd Paragraph</label> <br>
            <textarea name="content_3" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<br> <hr><!--4-->

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>நான்காம்  திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 4 :</label>
            <input type="text" name="place_4" class="form-control" require/>    
        </div>
        <div class="col-md-5">
            <label for="sell">4th Paragraph</label> <br>
            <textarea name="content_4" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<!--5--><br> <hr>

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>ஐந்தாம் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 5 :</label>
            <input type="text" name="place_5" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">5th Paragraph</label> <br>
            <textarea name="content_5" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<!--6--><br> <hr>

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>ஆறாம் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 6 :</label>
            <input type="text" name="place_6" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">6th Paragraph</label> <br>
            <textarea name="content_6" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<!--7--><br> <hr>

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>ஏழாம்  திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 7 :</label>
            <input type="text" name="place_7" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">7th Paragraph</label> <br>
            <textarea name="content_7" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

 <!--8 & 9--> <br> <hr>
 
 <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>எட்டாம் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 8 :</label>
            <input type="text" name="place_8" class="form-control" required>    
<br><br>
            <label for="sell">Place 9 :</label>
            <input type="text" name="place_9" class="form-control" required>    

        </div>
        <div class="col-md-5">
            <label for="sell">8th Paragraph</label> <br>
            <textarea name="content_8" cols="50" rows="10" class="form-control" required></textarea>
<br>
            <label for="sell">9th Paragraph</label> <br>
            <textarea name="content_9" cols="50" rows="10" class="form-control" required></textarea>

        </div>
    </div>
  
 <!--10 & 11 --> <br> <hr>
    
    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>ஒன்பதாம்  திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 10 :</label>
            <input type="text" name="place_10" class="form-control" required>    
<br>
            <label for="sell">Place 11 :</label>
            <input type="text" name="place_11" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">10th Paragraph</label> <br>
            <textarea name="content_10" cols="50" rows="10" class="form-control" required></textarea>
<br>        
            <label for="sell">11th Paragraph</label> <br>
            <textarea name="content_11" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>
 
<!--12--> <br> <hr>
 
    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>பத்தாம் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 12 :</label>
            <input type="text" name="place_12" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">12th Paragraph</label> <br>
            <textarea name="content_12" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<!--13--> <br> <hr>

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>பபதினோராம்  திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 13 :</label>
            <input type="text" name="place_13" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">13th Paragraph</label> <br>
            <textarea name="content_13" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>

<!--14--> <br> <hr>

    <div class="row">
        <div class="col-md-5"> <br><br><br><br>
            <p><b><h2>பன்னிரண்டாம் திருமுறை</h2></b></p>
        </div>
        <div class="col-md-5"> <br><br><br><br>
            <label for="sell">Place 14 :</label>
            <input type="text" name="place_14" class="form-control" required>    
        </div>
        <div class="col-md-5">
            <label for="sell">14th Paragraph</label> <br>
            <textarea name="content_14" cols="50" rows="10" class="form-control" required></textarea>
        </div>
    </div>
<br><br><br>
<center><input type="submit" class="btn btn-success btn-lg" name="submit"></center>
<br><br><br>
</form>
</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>