<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("input:text").val("Glenn Quagmire");
  });
});
</script>
</head>
<body>

<p>Name: <input type="text" name="user"></p>

<button>Set the value of the input field</button>

</body>
</html>
