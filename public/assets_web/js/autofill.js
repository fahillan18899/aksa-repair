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
