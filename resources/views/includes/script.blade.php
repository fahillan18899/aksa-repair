<!-- jquery-ui js -->
<script src="{{ url('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- pace js -->
<script src="{{ url('assets/js/pace.min.js') }}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ url('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

<!-- bootstrap timepicker -->
<script src="{{ url('assets/js/jquery-ui-sliderAccess.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/jquery-ui-timepicker-addon.min.js') }}" type="text/javascript"></script>
<!-- select2 js -->
<script src="{{ url('assets/js/select2.min.js') }}" type="text/javascript"></script>

<script src="{{ url('assets/js/sparkline.min.js') }}" type="text/javascript"></script>
<!-- Counter js -->
<script src="{{ url('assets/js/waypoints.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/jquery.counterup.min.js') }}" type="text/javascript"></script>

<!-- ChartJs JavaScript -->
<script src="{{ url('assets/js/Chart.min.js') }}" type="text/javascript"></script>

<!-- semantic js -->
<script src="{{ url('assets/js/semantic.min.js') }}" type="text/javascript"></script>
<!-- DataTables JavaScript -->
<script src="{{ url('assets/datatables/js/dataTables.min.js') }}"></script>
<!-- tinymce texteditor -->
<script src="{{ url('assets/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
<!-- Table Head Fixer -->
<script src="{{ url('assets/js/tableHeadFixer.js') }}" type="text/javascript"></script>

<!-- Admin Script -->
<script src="{{ url('assets/js/frame.js') }}" type="text/javascript"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('assets/js/custom.js') }}" type="text/javascript"></script>
<!-- jstree view -->
<script src="{{ url('assets/vakata-jstree/dist/jstree.min.js') }}"></script>
<script src="{{ url('assets/js/instascan.min.js') }}"></script>

<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill() {
    let idars = $("#id_aset_reg").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        idars: idars
      },
      dataType: 'json',
      success: function(data) {
        console.log(data)
        $("#Merek_Alat_reg").val(data.Merek_Alat_reg);
        $("#Nama_Alat_reg").val(data.Nama_Alat_reg);
        $("#Serial_Number_reg").val(data.Serial_Number_reg);
        $("#Lokasi_Alat_reg").val(data.Lokasi_Alat_reg);
        $("#Type_Alat_reg").val(data.Type);


      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->

<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofillPemelihara() {
    let idars = $("#id_ase1t").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        idars: idars
      },
      dataType: 'json',
      success: function(data) {
        console.log(data)
        $("#merek1").val(data.Merek_Alat_reg);
        $("#serial_number1").val(data.Serial_Number_reg);
        $("#ruangan1").val(data.Lokasi_Alat_reg);
        $("#tipe1").val(data.Type);


      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->

<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill_Pengiriman() {
    let Id_Perbaikan_reg = $("#Perbaikan_reg").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill_perbaikan.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_reg: Id_Perbaikan_reg
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#Tanggal_Perbaikan_reg1").val(data.Tanggal_Perbaikan_reg);
        $("#Id_Aset_reg1").val(data.ID_Aset_reg);
        $("#Nama_Alat_reg1").val(data.Nama_Alat_reg);
        $("#Merek_Alat_reg1").val(data.Merek_Alat_reg);
        $("#Type_Alat_reg1").val(data.Type_Alat_reg);
        $("#Seri_Number_reg1").val(data.Serial_Number_reg);
        $("#Lokasi_Alat_reg1").val(data.Lokasi_Alat_reg);
        $("#Teknisi_1_reg1").val(data.Teknisi_1_reg);
        $("#Pelapor_reg1").val(data.Pelapor_reg);
        $("#Teknisi_2_reg1").val(data.Teknisi_2_reg);
        $("#Keterangan_Kondisi_Alat_reg1").val(data.Keterangan_Kondisi_Alat_reg);
        $("#KA_Instalasi_reg1").val(data.Ka_Instalasi_reg);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->

<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill_Pengembalian() {
    let Id_Perbaikan_reg = $("#id_perbaikan_reg2").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill_perbaikan.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_reg: Id_Perbaikan_reg
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#tanggal_perbaikan_reg2").val(data.Tanggal_Perbaikan_reg);
        $("#Id_Aset_reg2").val(data.ID_Aset_reg);
        $("#nama_alat_reg2").val(data.Nama_Alat_reg);
        $("#merek_reg2").val(data.Merek_Alat_reg);
        $("#tipe_reg2").val(data.Type_Alat_reg);
        $("#serial_number_reg2").val(data.Serial_Number_reg);
        $("#lokasi_alat_reg2").val(data.Lokasi_Alat_reg);
        $("#teknisi1_reg2").val(data.Teknisi_1_reg);
        $("#pelapor_reg2").val(data.Pelapor_reg);
        $("#teknisi2_reg2").val(data.Teknisi_2_reg);
        $("#keterangan_reg2").val(data.Keterangan_Kondisi_Alat_reg);
        $("#ka_instalasi_reg2").val(data.Ka_Instalasi_reg);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->

<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill_Penghapusan() {
    let Id_Perbaikan_reg = $("#Id_Perbaikan_reg3").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill_perbaikan.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_reg: Id_Perbaikan_reg
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#Tanggal_Perbaikan_reg3").val(data.Tanggal_Perbaikan_reg);
        $("#Nama_Alat_reg3").val(data.Nama_Alat_reg);
        $("#Merek_Alat_reg3").val(data.Merek_Alat_reg);
        $("#Type_Alat_reg3").val(data.Type_Alat_reg);
        $("#Serial_Number_reg3").val(data.Serial_Number_reg);
        $("#Lokasi_Alat_reg3").val(data.Lokasi_Alat_reg);
        $("#Teknisi_1_reg3").val(data.Teknisi_1_reg);
        $("#Pelapor_reg3").val(data.Pelapor_reg);
        $("#Teknisi_2_reg3").val(data.Teknisi_2_reg);
        $("#KA_Instalasi_reg3").val(data.Ka_Instalasi_reg);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->


<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill_Pengiriman_un() {
    let Id_Perbaikan_un = $("#Id_perbaikan_un1").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill_perbaikan_un.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_un: Id_Perbaikan_un
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#Tanggal_Perbaikan_un1").val(data.Tanggal_Perbaikan_un);
        $("#Nama_Alat_un1").val(data.Nama_Alat_un);
        $("#Merek_Alat_un1").val(data.Merek_Alat_un);
        $("#Type_Alat_un1").val(data.Type_Alat_un);
        $("#Serial_Number_un1").val(data.Serial_Number_un);
        $("#Lokasi_Alat_un1").val(data.Lokasi_Alat_un);
        $("#Pelapor_un1").val(data.Pelapor_un);
        $("#Teknisi_1_un1").val(data.Teknisi_1_un);
        $("#Keterangan_un1").val(data.Keterangan_un);
        $("#Teknisi_2_un1").val(data.Teknisi_2_un);
        $("#KA_Instalasi_un1").val(data.KA_Instalasi_un);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->

<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill_Pengembalian_un() {
    let Id_Perbaikan_un = $("#Id_Perbaikan_un2").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill_perbaikan_un.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_un: Id_Perbaikan_un
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#Tanggal_Perbaikan_un2").val(data.Tanggal_Perbaikan_un);
        $("#Nama_Alat_un2").val(data.Nama_Alat_un);
        $("#Merek_Alat_un2").val(data.Merek_Alat_un);
        $("#Type_Alat_un2").val(data.Type_Alat_un);
        $("#Serial_Number_un2").val(data.Serial_Number_un);
        $("#Lokasi_Alat_un2").val(data.Lokasi_Alat_un);
        $("#Pelapor_un2").val(data.Pelapor_un);
        $("#Teknisi_1_un2").val(data.Teknisi_1_un);
        $("#Keterangan_un2").val(data.Keterangan_un);
        $("#Teknisi_2_un2").val(data.Teknisi_2_un);
        $("#Ka_Instalasi_un2").val(data.KA_Instalasi_un);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->


<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofill_Penghapusan_un() {
    let Id_Perbaikan_un = $("#Id_Perbaikan_un3").val();
    $.ajax({
      url: 'http://localhost/wyasa-sim-rs/fill_perbaikan_un.php',
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_un: Id_Perbaikan_un
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#Tanggal_Perbaikan_un3").val(data.Tanggal_Perbaikan_un);
        $("#Nama_Alat_un3").val(data.Nama_Alat_un);
        $("#Merek_Alat_un3").val(data.Merek_Alat_un);
        $("#Type_Alat_un3").val(data.Type_Alat_un);
        $("#Serial_Number_un3").val(data.Serial_Number_un);
        $("#Lokasi_Alat_un3").val(data.Lokasi_Alat_un);
        $("#Pelapor_un3").val(data.Pelapor_un);
        $("#Teknisi_1_un3").val(data.Teknisi_1_un);
        $("#Teknisi_2_un3").val(data.Teknisi_2_un);
        $("#KA_Instalasi_un3").val(data.KA_Instalasi_un);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->

<!--Camera-->
<script>
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview')
  });
  scanner.addListener('scan', function(content) {
    const fruits = content.split(',');
    $("#id_aset_reg").val(fruits[0]);
    $("#Merek_Alat_reg").val(fruits[1]);
    $("#Nama_Alat_reg").val(fruits[2]);
    $("#Tanggal_Perbaikan_reg").val(fruits[3]);
    $("#Serial_Number_reg").val(fruits[4]);
    $("#Lokasi_Alat_reg").val(fruits[5]);

    $("#id_ase1t").val(fruits[0]);
    $("#merek1").val(fruits[1]);
    $("#nama_alat").val(fruits[2]);
    $("#Tanggal_Perbaikan_reg").val(fruits[3]);
    $("#serial_number1").val(fruits[4]);
    $("#ruangan1").val(fruits[5]);
    $("#tipe1").val(fruits[5]);
  });

  Instascan.Camera.getCameras().then(cameras => {
    if (cameras.length > 0) {
      scanner.start(cameras[1]);
    } else {
      console.error("Please enable Camera!");
    }
  });
</script>
<!--Camera-->
<script type="text/javascript">
  $('#scollDatatable').DataTable({
    scrollX: true
  });
</script>