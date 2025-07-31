@extends('layouts.akuntan')

@section('content')
@section('title', 'Permohonan Invoice')
<style>
  input[readonly] {
    cursor: not-allowed;
  }

  .invoice-header {
    position: relative;
  }

  .invoice-bg {
    position: absolute;
    top: 0;
    right: 0;
    width: 250px;
    z-index: 0;
  }

  .invoice-header .form-group,
  .invoice-header label,
  .invoice-header input,
  .invoice-header textarea {
    position: relative;
    z-index: 1;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="fa fa-file-o"></i></div>
      <div class="header-title">
        <h1>MENU PEMBUATAN INVOICE</h1>
        <small>Pembuatan invoice</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="row">
              <div class="col-md-4">
                <h1>Daftar SPH</h1>
              </div>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <tr>
                        <th>No Surat</th>
                        <th>Instansi</th>
                        <th>Lokasi, Tanggal</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($sph as $sphs)
                      <tr>
                        <td onclick="paste(this)" title="Klik untuk kirim no surat" style="cursor: pointer;">{{ $sphs->no_surat }}</td>
                        <td>{{ $sphs->yth }}</td>
                        <td>{{ $sphs->lokasi_tanggal }}</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr>
                      @empty
                      @endforelse
                    </tbody>
                  </table>
                  <!--TABEL-->
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan-->
    <!--Form Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
          <div class="panel-heading no-print" id="form1">
            <h1>INVOICE</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-sm-12">
                <form action="{{ route('akuntan.post.invoicePermohonan') }}" class="form-inner" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="invoice-header">
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label class="form-label" for="">Kepada Yth :</label>
                        <textarea name="yth" id="yth" class="form-control" type="text"></textarea>
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Tanggal Invoice :</label>
                        <input name="tgl_invoice" class="form-control" type="date">
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Nomor Invoice :</label>
                        <input name="no_invoice" id="no_invoice" class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label class="form-label" for="">Nomor Pesanan :</label>
                        <input name="no_pesanan" id="no_pesanan" class="form-control" type="text">
                      </div>
                      <div class="col-xs-4">
                        <label class="form-label" for="">Alamat :</label>
                        <input name="alamat" id="alamat" class="form-control" type="text">
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class="form-group row">
                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="no_surat" placeholder="No surat sph" readonly style="cursor: pointer;">
                  </div>
                  </div>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center"><b>BARANG / JASA</b></th>
                        <th class="text-center"><b>KETERANGAN</b></th>
                        <th class="text-center"><b>UNIT</b></th>
                        <th class="text-center"><b>HARGA</b></th>
                        <th class="text-center"><b>TOTAL</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td><input name="barang_jasa" id="barang_jasa" type="text" class="form-control" placeholder="isi barang / jasa"></td>
                        <td><textarea name="keterangan" id="keterangan" class="form-control" placeholder="keterangan perbaikan"></textarea></td>
                        <td><input name="unit" id="unit" class="form-control" type="text" placeholder="Terisi otomatis" readonly></td>
                        <td><input name="harga_satuan" id="harga_satuan" class="form-control" type="text" placeholder="Terisi otomatis" readonly></td>
                        <td><input name="harga" id="harga" class="form-control" type="text" placeholder="Terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="5"><b>Sub total</b></td>
                        <td><input name="harga_tanpa_pajak" id="harga_tanpa_pajak" type="text" class="form-control" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="5"><b>PPN 11%</b></td>
                        <td><input name="pajak" id="pajak" class="form-control" type="text" placeholder="terisi otomatis" readonly></td>
                      </tr>
                      <tr>
                        <td colspan="5"><b>Total</b></td>
                        <td><input name="total" id="total" class="form-control" type="text" placeholder="terisi otomatis" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <div class="ui buttons">
                        <button class="ui positive button">Tambah</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Form Perbaikan end-->
    <!--Tabel Perbaikan-->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <div class="">
              <h1>Daftar Invoice</h1>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <div class="panel-body panel-form">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <!--TABEL-->
                  <table class="datatable table table-striped table-bordered" style="width:100%">
                    <thead class="table-light">
                      <tr>
                        <th>Instansi</th>
                        <th>Tanggal</th>
                        <th>Nomer Invoice</th>
                        <th>Nomer Pesanan</th>
                        <th>Status</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($item as $items)
                      <tr>
                        <td>{{ $items->yth }}</td>
                        <td>{{ $items->tgl_invoice }}</td>
                        <td>{{ $items->no_invoice }}</td>
                        <td>{{ $items->no_pesanan }}</td>
                        <td>
                          <form action="{{ route('akuntan.status.invoicePermohonan', $items->id) }}" class="form-inner" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-{{ $items->status == 0 ? 'success' : 'danger' }}" type="submit">
                              {{ $items->status == 0 ? 'Lunas' : 'Belum Lunas' }}
                            </button>
                          </form>
                        </td>
                        <td>
                          <a href="{{ route('akuntan.print.invoicePermohonan', $items->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="View">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                          </a>
                          <a href="{{ route('akuntan.edit.invoicePermohonan', $items->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>
                          <form action="{{ route('akuntan.delete.invoicePermohonan', $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @empty
                      @endforelse
                    </tbody>
                  </table>
                  <!--TABEL-->
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tabel Perbaikan-->
  </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
@endsection
@push('addon-script')

<!-- PERHITUNGAN PPN -->
  <!-- <script>
    function ppn(input) {

      let angka = input.value.replace(/[^\d]/g, ''); //Hapus semua kecuali angka

      if (!angka) {
        input.value = '';
        return;
      }

      const formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });

      const angkaFloat = parseFloat(angka);
      input.value = formatter.format(angkaFloat);
      // ----------------------------------------------------------- //
      const unit = document.getElementById('unit').value;
      const hargaSatuan = document.getElementById('harga_satuan').value;
      const hargaSatuanR = parseFloat(hargaSatuan.replace(/[^\d]/g, ''));
      const totalHarga = unit * hargaSatuanR;
      document.getElementById('harga').value = totalHarga;
      const harga = document.getElementById('harga').value;
      const hargac = parseFloat(harga.replace(/[^\d]/g, ''));
      const ppn = hargac * 11 / 100;
      const total = hargac + ppn;

      const totalHargaRp = totalHarga.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });
      const hargaRp = hargac.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });
      const pajakRp = ppn.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });
      const totalRp = total.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      });

      document.getElementById('harga').value = totalHargaRp;
      document.getElementById('harga_tanpa_pajak').value = hargaRp;
      document.getElementById('pajak').value = pajakRp;
      document.getElementById('total').value = totalRp;
    }
  </script> -->
<!-- PERHITUNGAN PPN -->

<!-- PASTE NO SURAT -->
<script>
  function paste(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
    document.getElementById('no_surat').value = inp.value = that.textContent;
  }
</script>
<!-- PASTE NO SURAT -->

<!-- AUTOFILL INVOICE -->
<script>
  $(document).ready(function(){
    $('#no_surat').on('click', function(){
      let noUrut = $(this).val().trim();
      console.log("ID yang dimasukan :", noUrut);

      if(!noUrut) return;

      let encodedId = encodeURIComponent(noUrut);  // penting!
      fetch(`/dashboard_akuntan/link_invoice_permohonan/data_sph/${encodeURIComponent(noUrut)}`)
      .then(response => response.json())
      .then(data => {
        console.log("Data dari server :", data);
        let item = Array.isArray(data) ? data[0] : data || {};
        $('#unit').val(item.jumlah || '');
        $('#harga_satuan').val(item.harga_tanpa_pajak || '');
        $('#harga').val(item.harga_tanpa_pajak || '');
        $('#harga_tanpa_pajak').val(item.harga_tanpa_pajak || '');
        $('#pajak').val(item.pajak || '');
        $('#total').val(item.total || '');
      })
      .catch(error => console.error("Error AJAX", error));
    });
  });
</script>
<!-- AUTOFILL INVOICE -->

@endpush