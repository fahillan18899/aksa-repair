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
    input[type=text] {
      border: none;
      outline: 0;
      font-size: 1.5rem;
    }

    #qr {
      border: 2;
      background: white;
      display: flex;
      align-items: center;
      justify-content: center;
      /*width: 270mm;*/
      /*height: 288mm;*/
    }
  </style>
</head>

<body onload="autoClick();">

  <?php
  $no = 1;

  $kodeqr =   $item['Id_Aset'] . ","
    . $item['Jenis_Alat'] . ","
    . $item['Nama_Alat'] . ","
    . $item['Merek'] . ","
    . $item['Type'] . ","
    . $item['Serial_Number'] . ","
    . $item['Lokasi_Alat'] . ","
    . $item['Tanggal_Kalibrasi'] . ","
    . $item['Tanggal_Kalibrasi'] . ","
    . $item['Distributor'] . ","
    . $item['Alamat_Distributor'] . ","
    . $item['TLP_Distributor'] . ","
    . $item['Email_Distributor'] . ","
    . $item['Teknisi_Distributor'] . ","
    . $item['TLP_T_Distributor'] . ","
    . $item['Teknisi_PPM'] . ","
    . $item['Harga_Perolehan'] . ","
    . $item['Sumber_Dana'] . ","
    . $item['Tahun_Pembuatan'] . ","
    . $item['Tahun_Perolehan'] . ","
    . $item['jadwal_pemeliharaan'];
  ?>


  <div class="container">
    <div class="row  justify-content-center mt-5">
      <div class="col-md-6">
        <div id="qr">
          <center>
            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($kodeqr)) !!} ">

            <h3 class="my-2"><?php echo $item['Id_Aset'] ?></h3>
          </center>
        </div>
        <div class="text-center">
          <div> <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($kodeqr)) !!} " class="btn btn-primary" download>Downloads</a></div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>