@extends('layouts.akuntan')
@section('content')
@section('title', 'Dashboard')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa ti-home"></i></div>
      <div class="header-title">
        <h1>Dashboard</h1>
        <small>Dashboard Monitoring Kalibrasi</small>
      </div>
    </div>
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <!-- Box Selesai -->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="info-box bg-olive">
          <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><?= "JUMLAH INSTANSI SELESAI KALIBRASI" ?></span>
            <span class="info-box-number" id="id_selesaiA">(╥﹏╥)</span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
        </div>
      </div>
      <!-- Box Selesai end -->

      <!-- Box Proses -->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class=" info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-wrench"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">
              <a href="#" style="color: white"><?= "JUMLAH INSTANSI PROSES KALIBRASI" ?></a>
            </span>
            <span class="info-box-number" id="id_prosesA">(╥﹏╥)</span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?= date('j F, Y'); ?>
            </span>
          </div>
        </div>
      </div>
      <!-- Box Proses End -->
      <!-- CARD -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-5">
                  <h2>Daftar Instansi Selesai Kalibrasi</h2>
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
                        <th>Marketing</th>
                        <th>Instansi</th>
                        <th>Jumlah</th>
                        <th>Nominal</th>
                        <th>Tanggal Bayar</th>
                        <th>System Bayar</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody id="id_selesai">
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
                  <h2>Daftar Instansi Proses Kalibrasi</h2>
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
                        <th>Instansi</th>
                        <th>Jadwal</th>
                        <th>Proses</th>
                      </tr>
                    </thead>
                    <tbody id="id_proses">
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
<script>
  function count_selesaiA(){
    $.ajax({
      url: '{{ route("akuntan.count.selesaiA") }}',
      method: 'GET',
      success: function(response){
        $('#id_selesaiA').text(response.countSelesaiA)
      },
      error: function(xhr, status, error){
        console.log("Gagal memuat data", error)
      }
    });
  }
  $(document).ready(function(){
    count_selesaiA();
    setInterval(count_selesaiA, 3000);
  })
</script>
<script>
  function count_prosesA(){
    $.ajax({
      url: '{{ route("akuntan.count.prosesA") }}',
      method: 'GET',
      success: function(response){
        $('#id_prosesA').text(response.countProsesA)
      },
      erro: function(xhr, status, error){
        console.log("Gagal memuat data", errro)
      }
    });
  }
  $(document).ready(function(){
    count_prosesA();
    setInterval(count_prosesA, 3000);
  })
</script>
<script>
  function real_selesai(){
    $.ajax({
      url: '{{ route("akuntan.real.selesai") }}',
      method: 'GET',
      dataType: 'json',
      success: function(data){
        let rows = '';
        data.forEach(item =>{
          rows += `
          <tr>
            <td>${item.marketing}</td>
            <td>${item.instansi}</td>
            <td>${item.jumlah}</td>
            <td>${item.nominal}</td>
            <td>${item.tanggal}</td>
            <td>${item.sistem}</td>
            <td>
              <button class="btn btn-sm ${item.status == 0 ? 'btn-danger' : 'btn-success'}" disabled>
                ${item.status == 0 ? 'Proses /Termin' : 'Selesai / Lunas'}
              </button>
            </td>
          </tr>
          `;
        });
        $('#id_selesai').html(rows);
      },
      error:function(xhr, status, error){
        console.log("Gagal memuat data", error);
      }
    })
  }
  $(document).ready(function(){
    real_selesai();
    setInterval(real_selesai, 3000);
  })
</script>
<script>
  function real_proses(){
    $.ajax({
      url: '{{ route("akuntan.real.proses") }}',
      method: 'GET',
      dataType: 'json',
      success: function(data){
        let rows = '';
        data.forEach(item=> {
          rows += `
          <tr>
            <td>${item.instansi}</td>
            <td>${item.jadwal}</td>
            <td>
              <button class="btn btn-sm ${item.pengerjaan == 0 ? 'btn-success' : 'btn-danger'}" disabled>
                ${item.pengerjaan == 0 ? 'Selesai' : 'Pengerjaan'}
              </button>
            </td>
          </tr>
          `;
        });
        $('#id_proses').html(rows);
      },
      error: function(xhr, status, error){
        console.log("Gagal memuat data", error);
      }
    })
  }
  $(document).ready(function(){
    real_proses();
    setInterval(real_proses, 3000)
  })
</script>
@endpush