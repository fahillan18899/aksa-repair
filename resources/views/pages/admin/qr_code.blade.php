<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
 <title>Buat QR</title>
</head>
<style>
 /*  */

 img {
  /* border: dashed 0.6px #000; */
  padding: 1px;
  padding-bottom: 15px;
  display: inline-block;
  --b: 0.5px;
  /* thickness of the border */
  --c: black;
  /* color of the border */
  --w: 5px;
  /* width of border */


  border: var(--b) solid #0000;
  /* space for the border */
  --_g: #0000 90deg, var(--c) 0;
  --_p: var(--w) var(--w) border-box no-repeat;
  background:
   conic-gradient(from 90deg at top var(--b) left var(--b), var(--_g)) 0 0 / var(--_p),
   conic-gradient(from 180deg at top var(--b) right var(--b), var(--_g)) 100% 0 / var(--_p),
   conic-gradient(from 0deg at bottom var(--b) left var(--b), var(--_g)) 0 100% / var(--_p),
   conic-gradient(from -90deg at bottom var(--b) right var(--b), var(--_g)) 100% 100% / var(--_p);

  /*Irrelevant code*/
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 15px;
  display: inline-flex;
  font-size: 3px;
  justify-content: center;
  align-items: center;
  text-align: center;
 }
</style>


<body onload="autoClick();">

 <div class="d-flex flex-row bd-highlight">
  <?php

  function generateQRCode($i)
  {
   return '<div class="bd-highlight" >
          <img src="data:image/png;base64,' . base64_encode(QrCode::format('png')->margin(1.5)->size(60)->generate(base_convert('W24' . $i, 10, 36))) . '">
          <p class="text-center " style="font-size: 8px; margin-top: -31px; padding-bottom: 5px; margin-left: 5px; important"><b>W24' . $i . '</b></p>
         </div>';
  }

  $row_counter = 1;

  for ($i = 1; $i <= 2; $i++) : ?>

   <?php echo generateQRCode($i); ?>

   <?php
   if ($row_counter % 4 == 0) {
    echo '</div><div class="d-flex flex-row bd-highlight" style="margin-top: -18px;">';
   }
   $row_counter++;
   ?>

  <?php endfor; ?>

 </div>


</body>

</html>