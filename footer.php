<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid p-3 p-md-5 bg-dark text-center mt-3">
<div class="alert text-light text-center" id="demo" role="alert">
    Change Background Color:  &nbsp;Select &nbsp;
    <input type="color" name="" id="colorInputColor">
    <input type="button" id="colorButton" value="Change" onclick='changeColor()'>
    &nbsp;&nbsp;&nbsp;You Choose  
    <input type="text" name="" id="colorInputText">
</div>
<ul class="bd-footer-links d-flex list-unstyled justify-content-center">
      <li class="mx-2"><a class="text-decoration-none" target="_blank" href="https://github.com/twbs">GitHub</a></li>
      <li class="mx-2"><a class="text-decoration-none" target="_blank" href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li class="mx-2"><a class="text-decoration-none" target="_blank" href="https://facebook.com">Facebook</a></li>
      <li class="mx-2"><a class="text-decoration-none" target="_blank" href="https://www.youtube.com">Youtube</a></li>
    </ul>
    <ul class="bd-footer-links d-flex list-unstyled justify-content-center">
      <li><a class="text-light p-2 "  href="resturant.php">| Go to Resturants </a></li>
      <li><a class="text-light p-2 "  href="hotels.php">| Go to Hotels</a></li>
      <li><a class="text-light p-2 "  href="gallery.php">| Go to Gallery</a></li>
      <li><a class="text-light p-2 "  href="contact.php">| Contact us |</a></li>
    </ul>
    <p class="text-light">Designed and built with all the love in the world by the Adventure</a>.</p>
  </div>
  <script>
    function changeColor() {
        let color = document.getElementById('colorInputColor').value;
        document.body.style.backgroundColor = color;
        document.getElementById('colorInputText').value = color;
    }
    </script>
</body>
</html>