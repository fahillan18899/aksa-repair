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
        <small>Dashboard Repair Aksa Akuntan</small>
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
            <span class="info-box-text"><?= "JUMLAH BARANG SELESAI REPAIR" ?></span>
            <span class="info-box-number" id="id_selesaiA">0</span>
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
              <a href="#" style="color: white"><?= "JUMLAH BARANG PROSES REPAIR" ?></a>
            </span>
            <span class="info-box-number" id="id_prosesA">0</span>
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
      <!-- CARD -->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default thumbnail">
            <div class="panel-heading no-print">
              <div class="row">
                <div class="col-md-5">
                  <h2>Daftar barang repair</h2>
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
                        <th>No Urut</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>No Seri</th>
                        <th>Type</th>
                        <th>Kerusakan</th>
                        <th>Instansi</th>
                        <th>Status</th>
                        <th>Keterangan</th>
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
                  <h2>Daftar barang proses repair</h2>
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
                        <th>No Urut</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>No Seri</th>
                        <th>Type</th>
                        <th>Kerusakan</th>
                        <th>Instansi</th>
                        <th>Status</th>
                        <th>Keterangan</th>
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
<!-- Day.js + Plugin timezone -->
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/utc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/timezone.js"></script>

<script>
  dayjs.extend(dayjs_plugin_utc);
  dayjs.extend(dayjs_plugin_timezone);
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

        // Format tanggal created_at
        const formattedDate = dayjs(item.created_at)
          .tz("Asia/Jakarta")
          .format("DD-MM-YYYY HH:mm");

          rows += `
          <tr>
            <td>${item.no_urut}</td>
            <td>${formattedDate}</td>
            <td>${item.nama_alat}</td>
            <td>${item.no_seri}</td>
            <td>${item.type}</td>
            <td>${item.kerusakan_alat}</td>
            <td>${item.instansi}</td>
            <td>
              <button class="btn btn-sm ${item.status == 0 ? 'btn-danger' : 'btn-success' }" disabled>
                ${item.status == 0 ? 'Kembali' : 'Approve'}
              </button>
            </td>
            <td>
              <button class="btn btn-sm ${item.ket == 0 ? 'btn-success' : 'btn-success'}" disabled>
                ${item.ket == 0 ? 'Selesai' : 'Selesai'}
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

        // Format tanggal created_at
        const formattedDate = dayjs(item.created_at)
          .tz("Asia/Jakarta")
          .format("DD-MM-YYYY HH:mm");

          rows += `
          <tr>
            <td>${item.no_urut}</td>
            <td>${formattedDate}</td>
            <td>${item.nama_alat}</td>
            <td>${item.no_seri}</td>
            <td>${item.type}</td>
            <td>${item.kerusakan_alat}</td>
            <td>${item.instansi}</td>
            <td>
              <button class="btn btn-sm ${item.status == 0 ? 'btn-danger' : 'btn-success'}" disabled>
                ${item.status == 0 ? 'Kembali' : 'Approve'}
              </button>
            </td>
            <td>
              <button class="btn btn-sm 
              ${item.ket == 1 ? 'btn-danger' : 
                item.ket == 2 ? 'btn-warning' : 
                item.ket == 3 ? 'btn-info' :
                item.ket == 4 ? 'btn-secondary' : 
                item.ket == 5 ? 'btn-success' :
                'btn-light'}" disabled>

                ${item.ket == 1 ? 'Trouble' :  
                  item.ket == 2 ? 'Proses' :
                  item.ket == 3 ? 'Dalam Perbaikan' :
                  item.ket == 4 ? 'Rusak' :
                  item.ket == 5 ? 'Selesai' :
                  'Tidak diketahui'
                }
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
@endpush