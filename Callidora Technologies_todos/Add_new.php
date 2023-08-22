<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,600;1,100;1,400;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,900;1,100;1,300;1,500;1,700;1,800;1,900&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="back">
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">Todos</a>
  <a href="#contact">About</a>
  <a href="#about">Contacts</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<form class="text_title">
<label for="fname" class="title">Title</label>
  <input type="text" id="fname" name="fname">
  
  <div class   >
  <label for="fname" class="title">Content</label> <br>
  <textarea name="fname" id="" cols="98" rows="10"></textarea>
  </div>

  <button class="button button1">Submit</button><br>
<button class="button button2">Cancle</button>
</form>


</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>