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

                              $kodeqr =   $item['id_aset'] . ","
                                . $item['jenis_alat'] . ","
                                . $item['nama_alat'] . ","
                                . $item['merek'] . ","
                                . $item['type'] . ","
                                . $item['serial_number'] . ","
                                . $item['lokasi_alat'] . ","
                                . $item['tanggal_kalibrasi'] . ","
                                . $item['tanggal_kalibrasi'] . ","
                                . $item['distributor'] . ","
                                . $item['alamat_distributor'] . ","
                                . $item['tlp_distributor'] . ","
                                . $item['email_distributor'] . ","
                                . $item['teknisi_distributor'] . ","
                                . $item['tlp_t_distributor'] . ","
                                . $item['teknisi_ppm'] . ","
                                . $item['harga_perolehan'] . ","
                                . $item['sumber_dana'] . ","
                                . $item['tahun_pembuatan'] . ","
                                . $item['tahun_perolehan'] . ","
    . $item['jadwal_pemeliharaan'];
  ?>


  <div class="container">
    <div class="row  justify-content-center mt-5">
      <div class="col-md-6" id="qrContainer">
    <div id="qr">
        <center  class="mt-3">
            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($kodeqr)) !!} ">
            <h3 class="my-2"><?php echo $item['id_aset'] ?></h3>
        </center>
    </div>
    <div class="text-center">
        <div>
            <a href="#" class="btn btn-primary" onclick="downloadQR()">Download</a>
        </div>
    </div>
</div>
      </div>
    </div>
  </div>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    function downloadQR() {
        var container = document.getElementById('qr');

        html2canvas(container).then(function(canvas) {
            var link = document.createElement('a');
            link.href = canvas.toDataURL();
            link.download = 'qr_code_with_text.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    }
</script>

</body>

</html>