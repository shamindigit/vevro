<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  
  
      <link rel="stylesheet" href="metaball/metaball.css">

  
</head>

<body>

  <div id="particles"></div>
<div class="background"></div>
<svg>
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" />
      <feColorMatrix in="blur" result="colormatrix" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" />
      <feBlend in="SourceGraphic" in2="colormatrix" />
    </filter>
  </defs>
</svg>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

    <script  src="metaball/metaball.js"></script>




</body>

</html>
