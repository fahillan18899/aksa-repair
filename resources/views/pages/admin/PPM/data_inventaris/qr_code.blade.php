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
  <style>

    img {
    border: dashed 0.6px #000;
    padding: 1px;
    padding-bottom: 20px;
    display: inline-block
  }
  </style>
</head>

<body onload="autoClick();">

      <div class="d-flex flex-row bd-highlight">
          <?php $row_counter = 1;

            for ($i = 1; $i <= 8; $i++) : ?>
              <div class="bd-highlight">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(60)->generate($i)) !!} ">
                <p class="text-center" style="font-size: 10px; margin-top: -20px; important"><?php echo "P2400".$i."D"?></p>
                </div>

                <?php
                if ($row_counter % 4 == 0) {
                  echo '</div><div class="d-flex flex-row bd-highlight" style="margin-top: -11px;">';
                }
                $row_counter++;
                ?>
            <?php endfor; ?>
      </div>
      
</body>

</html>