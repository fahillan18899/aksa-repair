@extends('layouts.teknisi')
@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard PPM Teknisi</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <!-- Box Jumlah Alat -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?= "JUMLAH ALAT TERGESITRASI" ?></span>
              <span class="info-box-number">{{ $registrasi }}</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Alat end -->

      <!-- Box Jumlah Aset Perbaikan Regis -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class=" info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="dashboard_teknisi/view_tabelT" style="color: white"><?= "JUMLAH ASSET PERBAIKAN TERGESITRASI" ?></a>
              </span>
              <span class="info-box-number" id="count_perbaikan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah Aset Perbaikan Regis End -->

      <!-- Box Jumlah permintaan perbaikan -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-navy-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="dashboard_teknisi/view_tabelT2" style="color: white"><?= "JUMLAH PERMINTAAN PERBAIKAN USER" ?></a>
              </span>
              <span class="info-box-number" id="count_permintaan">0</span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>
      <!-- Box Jumlah permintaan perbaikan end  -->

      <!-- Box Jumlah Aset Terkalibrasi -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="info-box bg-light-green">
            <span class="info-box-icon"><i class="fa fa-cogs"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">
                <a href="dashboard_teknisi/view_tabelT3" style="color: white"><?= "JUMLAH ALAT TERKALIBRASI"?></a>
              </span>
              <span class="info-box-number">{{ $alatTerkalibrasi }} / {{ $registrasi }} </span>
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                <?= date('j F, Y'); ?>
              </span>
            </div>
          </div>
        </div>

      <!-- Box Jumlah Aset Terkalibrasi end  -->

      <!-- CARD -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default thumbnail">
              <div class="panel-heading no-print">
                <div class="row">
                  <div class="col-md-5">
                    <h2>Daftar permintaan perbaikan</h2>
                  </div>
                </div>
              </div>
              <div class="panel-body panel-form">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <!-- TABEL -->
                    <table class="datatable table table-striped table-bordered" style="width: 100%">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Serial Number</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Tanggal</th>
                        </tr>
                      </thead>
                      <tbody id="permintaanUserBody">
                        <!-- DATA AJAX -->
                      </tbody>
                    </table> 
                    <!-- TABEL -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- CARD N-->

      <!-- CARD -->
       <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-5">
                  <h2>Daftar perbaikan alat</h2>
                </div>
              </div>
            </div>
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!-- TABEL -->
                   <table class="datatable table table-striped table-bordered" style="width: 100%">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Type</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody id="perbaikanTabelBody">
                      <!-- DATA AJAX -->
                    </tbody>
                   </table>
                  <!-- TABEL -->
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      <!-- CARD N-->
    </div>
  </div>
  <!-- /.content -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>
@endsection

@push('addon-script')
<!-- AJAX PERMINTAAN PERBAIKAN -->
  <script>
    function loadPermintaanUser() {
      // console.log("Memulai loadPermintaanUser"); //Debug fungsi berjalan / tidak
      
      $.ajax({
        url: '{{route("teknisi.permintaanUser.data")}}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // console.log("Data berhasil diterima:", data) //Debug tampilan data yang di geet dari Ajax

          let rows='';
          data.forEach(item => {
            // console.log(item);
            rows += `
            <tr>
              <td>${item.id_req}</td>
              <td>${item.nama_req}</td>
              <td>${item.merek_req}</td>
              <td>${item.type_req}</td>
              <td>${item.sn_req}</td>
              <td>${item.pelapor_req}</td>
              <td>${item.tanggal_req}</td>
            </tr>
            `;
          });

          $('#permintaanUserBody').html(rows);
          // console.log("Tabel berhasil diperbaharui"); //Debug konfirmasi update
        },
        error: function(xhr, status, error){
          console.log("Gagal memuat data", error)
        }
      });
    }
    $(document).ready(function(){
      // console.log("Dokumen siap, mulai polling...");
      loadPermintaanUser();
      setInterval(loadPermintaanUser, 3000);
    });
  </script>
<!-- AJAX PERMINTAAN PERBAIKAN N-->

<!-- AJAX PERBAIKAN -->
  <script>
    function loadPerbaikan() {
      // console.log("Mulai loadPerbaikan"); //Debug fungsi berjalan / tidak

      $.ajax({
        url: '{{route("teknisi.perbaikanTeknisi.data")}}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // console.log("Data berhasil diterima:",data)// Debug tampilan data yang di get oleh ajax

          let rows='';
          data.forEach(item => {
            // console.log(item);
            rows +=`
            <tr>
              <td>${item.id_perbaikan_reg}</td>
              <td>${item.nama_alat_reg}</td>
              <td>${item.merek_alat_reg}</td>
              <td>${item.type_alat_reg}</td>
              <td>${item.serial_number_reg}</td>
              <td>${item.lokasi_alat_reg}</td>
              <td>${item.tanggal_perbaikan_reg}</td>
            </tr>
            `;
          });

          $('#perbaikanTabelBody').html(rows);
          // console.log("Table berhasil diperbaharui"); //Debug konfirmasi update
        },
        error: function(xhr, status, error){
          console.log("Gagal memuat data", error)
        }
      });
    }
    $(document).ready(function(){
      console.log("Dokument siap, mulai polling...");
      loadPerbaikan();
      setInterval(loadPerbaikan, 3000);
    });
  </script>
<!-- AJAX PERBAIKAN N-->

<!-- COUNT PERMINTAAN PERBAIAK -->
 <script>
  function jumlahPermintaan() {
    $.ajax({
      url: '{{ route("teknisi.permintaanTeknisi.count") }}',
      method: 'GET',
      success: function(response) {
        $('#count_permintaan').text(response.countPermintaan);
      },
      error: function(xhr, status, error) {
        console.log("Gagal mengambil data permintaan:", error);
      }
    });
  }

  $(document).ready(function() {
    jumlahPermintaan();
    setInterval(jumlahPermintaan, 3000);
  })
 </script>
<!-- COUNT PERMINTAAN PERBAIAK N-->

<!-- COUNT PERBAIKAN  -->
  <script>
    function jumlahPerbaikan() {
      $.ajax({
        url: '{{ route("teknisi.perbaikanTeknisi.count") }}',
        method: 'GET',
        success: function(response) {
          $('#count_perbaikan').text(response.countPerbaikan);
        },
        error: function(xhr, status, error) {
          console.log("Gagal mengambil data perbaikan:", error);
        }
      });
    }

    $(document).ready(function() {
      jumlahPerbaikan();
      setInterval(jumlahPerbaikan, 3000);
    })
  </script>
<!-- COUNT PERBAIKAN N -->
@endpush