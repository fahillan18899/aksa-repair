// FUNGSI AUTOFILL
$(document).ready(function() {
    $('select[id="lokasi_alat"]').on('change', function() {
      var stateID = $(this).val();
      if (stateID) {
        $.ajax({
          url: '/dashboard/ppm/lk_inspeksi/' + stateID,
          type: "GET",
          dataType: "json",
          success: function(data) {
            if (data.length > 0) {
              data.forEach((item, index) => {
                let i = index + 1; // Mulai dari 1
                $('input[id="nama_alat_' + i + '"]').val(item.id_aset + '_' + item.nama_alat);
                $('input[id="nomer_seri_' + i + '"]').val(item.serial_number);
              });
            } else {
              $('input[id^="nama_alat_"]').val('');
              $('input[id^="nomer_seri_"]').val('');
            }
          }
        });
      }
    });
  });
  // FUNGSI AUTOFILL END
  
  // FUNGSI BUAT ROW
  $(document).ready(function() {
    let rowCount = 1; // Menyimpan jumlah baris
    const maxRows = 50; // Maksimal baris
  
    // Fungsi untuk menambah baris ke tabel
    $("#addRow").click(function() {
      if (rowCount > maxRows) {
        alert("Maksimal row telah tercapai!");
        return; // Menghentikan eksekusi jika sudah mencapai batas
      }
  
      let newRow =
        `<tr>
            <td>${rowCount}</td>
            <td><input name="nama_alat_${rowCount}" id="nama_alat_${rowCount}" type="text" class="form-control"></td>
            <td><input name="nomer_seri_${rowCount}" id="nomer_seri_${rowCount}" type="text" class="form-control"></td>
            <td><input name="periksa_fisik_${rowCount}" type="checkbox" class="form-check-input" value="Ya" checked></td>
            <td><input name="lengkap_alat_${rowCount}" type="checkbox" class="form-check-input" value="Ya" checked></td>
            <td><input name="fungsi_alat_${rowCount}" type="checkbox" class="form-check-input" value="Ya" checked></td>
            <td><input name="catatan_${rowCount}" type="text" class="form-control"></td>
            <td><button type="button" class="removeRow">Hapus</button></td>
        </tr>`;
  
      // Menambah baris baru ke tbody
      $("#dynamicTable tbody").append(newRow);
      rowCount++; // Menambah nomor ID untuk input berikutnya
    });
  
    // Fungsi untuk menghapus baris
    $(document).on("click", ".removeRow", function() {
      $(this).closest("tr").remove();
      rowCount--; // Mengurangi rowCount ketika baris dihapus
    });
  });
  // FUNGSI BUAT ROW END