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
      url: '{{ url("/dashboard/ppm/autofill/") }}/' + idars,
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        $("#Nama_Alat_reg").val(data.nama_alat_reg);
        $("#Merek_Alat_reg").val(data.merek_alat_reg);
        $("#Serial_Number_reg").val(data.serial_number_reg);
        $("#Lokasi_Alat_reg").val(data.lokasi_alat_reg);
        $("#Type_Alat_reg").val(data.type);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<!--AutoFill Registrasi end-->


<!--AutoFill Registrasi end-->


<!--AutoFill Registrasi-->
<script type="text/javascript">
  function autofillPemelihara() {
    let idars = $("#id_ase1t").val();
    $.ajax({
      url: '{{ url("/dashboard/ppm/autofill/") }}/' + idars,
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        idars: idars
      },
      dataType: 'json',
      success: function(data) {
        $("#nama_alat1").val(data.nama_alat_reg);
        $("#merek1").val(data.merek_alat_reg);
        $("#serial_number1").val(data.serial_number_reg);
        $("#tipe1").val(data.type);
        $("#ruangan1").val(data.lokasi_alat_reg);

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
</script>
<script type="text/javascript">
  function autofillPemeliharaTeknisi() {
    let idars = $("#id_ase1t").val();
    $.ajax({
      url: '{{ url("/dashboard_teknisi/autofill/") }}/' + idars,
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        idars: idars
      },
      dataType: 'json',
      success: function(data) {
        $("#nama_alat1").val(data.nama_alat_reg);
        $("#merek1").val(data.merek_alat_reg);
        $("#serial_number1").val(data.serial_number_reg);
        $("#tipe1").val(data.type);
        $("#ruangan1").val(data.lokasi_alat_reg);

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
      url: '{{ url("/dashboard/ppm/autofill_pengiriman/") }}/' + Id_Perbaikan_reg,
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
        $("#Teknisi_3_reg1").val(data.Teknisi_3_reg);
        $("#Keterangan_Kondisi_Alat_reg1").val(data.Keterangan_Kondisi_Alat_reg);
        $("#KA_Instalasi_reg1").val(data.Ka_Instalasi_reg);
        $("#nama_sukucadang").val(data.suku_cadang);
        $("#volume").val(data.volume);
        $("#harga_satuan").val(data.harga_satuan);
        $("#jumlah_harga").val(data.jumlah_harga);

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
      url: '{{ url("/dashboard/ppm/autofill_pengiriman/") }}/' + Id_Perbaikan_reg,
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
        $("#teknisi3_reg2").val(data.Teknisi_3_reg);
        $("#keterangan_reg2").val(data.Keterangan_Kondisi_Alat_reg);
        $("#ka_instalasi_reg2").val(data.Ka_Instalasi_reg);
        $("#nama_sukucadang2").val(data.suku_cadang);
        $("#volume2").val(data.volume);
        $("#harga_satuan2").val(data.harga_satuan);
        $("#jumlah_harga2").val(data.jumlah_harga);

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
      url: '{{ url("/dashboard/ppm/autofill_pengiriman/") }}/' + Id_Perbaikan_reg,
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
        $("#Teknisi_3_reg3").val(data.Teknisi_3_reg);
        $("#KA_Instalasi_reg3").val(data.Ka_Instalasi_reg);
        $("#nama_sukucadang3").val(data.suku_cadang);
        $("#volume3").val(data.volume);
        $("#harga_satuan3").val(data.harga_satuan);
        $("#jumlah_harga3").val(data.jumlah_harga);

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
    let Id_Perbaikan_un = $("#id_perbaikan_un1").val();
    $.ajax({
      url: '{{ url("/dashboard/ppm/autofill_pengirimanUn/") }}/' + Id_Perbaikan_un,
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_un: Id_Perbaikan_un
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#tanggal_perbaikan_un1").val(data.tanggal_perbaikan_un);
        $("#nama_alat_un1").val(data.nama_alat_un);
        $("#merek_alat_un1").val(data.merek_alat_un);
        $("#type_alat_un1").val(data.type_alat_un);
        $("#serial_number_un1").val(data.serial_number_un);
        $("#lokasi_alat_un1").val(data.lokasi_alat_un);
        $("#pelapor_un1").val(data.pelapor_un);
        $("#teknisi_1_un1").val(data.teknisi_1_un);
        $("#keterangan_un1").val(data.keterangan_un);
        $("#teknisi_2_un1").val(data.teknisi_2_un);
        $("#teknisi_3_un1").val(data.teknisi_3_un);
        $("#ka_instalasi_un1").val(data.ka_instalasi_un);

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
    let Id_Perbaikan_un = $("#id_perbaikan_un2").val();
    $.ajax({
      url: '{{ url("/dashboard/ppm/autofill_pengirimanUn/") }}/' + Id_Perbaikan_un,
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_un: Id_Perbaikan_un
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#tanggal_perbaikan_un2").val(data.tanggal_perbaikan_un);
        $("#nama_alat_un2").val(data.nama_alat_un);
        $("#merek_alat_un2").val(data.merek_alat_un);
        $("#type_alat_un2").val(data.type_alat_un);
        $("#serial_number_un2").val(data.serial_number_un);
        $("#lokasi_alat_un2").val(data.lokasi_alat_un);
        $("#pelapor_un2").val(data.pelapor_un);
        $("#teknisi_1_un2").val(data.teknisi_1_un);
        $("#keterangan_un2").val(data.keterangan_un);
        $("#teknisi_2_un2").val(data.teknisi_2_un);
        $("#teknisi_3_un2").val(data.teknisi_3_un);
        $("#ka_instalasi_un2").val(data.ka_instalasi_un);

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
    let Id_Perbaikan_un = $("#id_perbaikan_un3").val();
    $.ajax({
      url: '{{ url("/dashboard/ppm/autofill_pengirimanUn/") }}/' + Id_Perbaikan_un,
      method: 'GET', // HTTP method (e.g., GET, POST)
      data: {
        Id_Perbaikan_un: Id_Perbaikan_un
      },
      dataType: 'json',
      success: function(data) {
        console.log(data.Nama_Alat_reg)
        $("#tanggal_perbaikan_un3").val(data.tanggal_perbaikan_un);
        $("#nama_alat_un3").val(data.nama_alat_un);
        $("#merek_alat_un3").val(data.merek_alat_un);
        $("#type_alat_un3").val(data.type_alat_un);
        $("#serial_number_un3").val(data.serial_number_un);
        $("#lokasi_alat_un3").val(data.lokasi_alat_un);
        $("#pelapor_un3").val(data.pelapor_un);
        $("#teknisi_1_un3").val(data.teknisi_1_un);
        $("#teknisi_2_un3").val(data.teknisi_2_un);
        $("#teknisi_3_un3").val(data.teknisi_3_un);
        $("#ka_instalasi_un3").val(data.ka_instalasi_un);

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
    video: document.getElementById('preview'),
    mirror: false
  });
  scanner.addListener('scan', function(content) {
    const fruits = content.split(',');
    $("#id_aset_reg").val(fruits[0]);
    $("#Merek_Alat_reg").val(fruits[3]);
    $("#Nama_Alat_reg").val(fruits[2]);
    $("#Serial_Number_reg").val(fruits[5]);
    $("#Lokasi_Alat_reg").val(fruits[6]);
    $("#Type_Alat_reg").val(fruits[4]);

    // $("#id_ase1t").val(fruits[0]);
    // $("#merek1").val(fruits[1]);
    // $("#nama_alat").val(fruits[2]);
    // $("#Tanggal_Perbaikan_reg").val(fruits[3]);
    // $("#serial_number1").val(fruits[4]);
    // $("#ruangan1").val(fruits[5]);
    // $("#tipe1").val(fruits[5]);
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