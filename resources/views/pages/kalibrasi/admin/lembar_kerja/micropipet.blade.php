<div role="tabpanel" class="tab-pane" id="micropipet">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi Micropipet Nebulizer</h1>
          </div>

          <div class="panel-body panel-form">
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <form action="{{ route('lembar_kerja.store') }}" class="form-inner"
                  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  @csrf
                  @method('POST')

                  <h3>A. Data Alat Pelanggan</h3>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Milik</b></td>
                        <td><input name="milik" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Merek</b></td>
                        <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tipe / Model</b></td>
                        <td><input name="tipe" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nomor Seri</b></td>
                        <td><input name="no_seri" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Rentang Ukur</b></td>
                        <td><input name="rentang_ukur" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Resolusi</b></td>
                        <td><input name="resolusi" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>B. PELAKSANAAN KALIBRASI</h3>

                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tempat/Ruangan Kalibrasi</b></td>
                        <td><input name="tempat_kalibrasi" type="text" style="border: 0" placeholder="-">
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tanggal</b></td>
                        <td><input name="tanggal" type="date" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Nama Petugas</b></td>
                        <td><input name="nama_petugas" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No Label</b></td>
                        <td><input name="no_label" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>

                  </table>

                  <h3>C. Alat Yang digunakan</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Analitical Balance</b> </td>
                        <td><input name="merek_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"> <b>Thermometer digital</b> </td>
                        <td><input name="merek_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tipe_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="no_seri_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="tertelusur_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>

                    </tbody>
                  </table>

                  <h3>D. Pengukuran Kondisi Ruangan</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Parameter</b></td>
                        <td class="table-info" colspan="2" align="left"><b>Awal</b></td>
                        <td class="table-info" colspan="2" align="left"><b>Akhir</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Rata-rata</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Temperatur Ruangan</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="1" align="left"><b>°C</b></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="1" align="left"><b>°C</b></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Kelembapan Ruangan</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="1" align="left"><b>%</b></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="1" align="left"><b>%</b></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>Tekanan Udara</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="1" align="left"><b>kPa</b></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="1" align="left"><b>kPa</b></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                    </tbody>
                  </table>


                  <h3>E. SYARAT KETIDAKPASTIAN</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>No</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Nama Alat</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Ketidakpastian</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Ambang Batas</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>1</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Analitical Balance</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_1" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_1" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>2</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Thermometer digital</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_2" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_2" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>3</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Hygrometer</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_3" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_3" type="text" style="border: 0"
                            placeholder="-"></td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="1" align="left"><b>4</b></td>
                        <td class="table-info" colspan="1" align="left"><b>Barometer</b></td>
                        <td><input name="hasil_pemeriksaan_fisik_4" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="hasil_pemeriksaan_fungsi_4" type="text" style="border: 0"
                            placeholder="-"></td>

                      </tr>

                    </tbody>
                  </table>

                  <h3>F. HASIL PENGUKURAN KINERJA ALAT </h3>
                  <h4>Volume : 100 µL</h4>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>n</b></td>
                        <td class="table-info" colspan="4" rowspan="" align="center"><b>Volume Air (µL)</b>
                        </td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Suhu Air (°C)</b>
                        </td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,100</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,50</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,100</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="3" rowspan="3" align="center"><b></b></td>=
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,100</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>4</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>0,100</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,100</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,30</b></td>

                      </tr>

                    </tbody>
                  </table>

                  <h4>Volume : 300 µL</h4>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>n</b></td>
                        <td class="table-info" colspan="4" rowspan="" align="center"><b>Volume Air (µL)</b>
                        </td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Suhu Air (°C)</b>
                        </td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,300</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,50</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,300</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="3" rowspan="3" align="center"><b></b></td>=
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,300</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>4</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>0,300</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,300</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,30</b></td>

                      </tr>

                    </tbody>
                  </table>

                  <h4>Volume : 500 µL</h4>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>n</b></td>
                        <td class="table-info" colspan="4" rowspan="" align="center"><b>Volume Air (µL)</b>
                        </td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Suhu Air (°C)</b>
                        </td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,500</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,50</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,499</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="3" rowspan="3" align="center"><b></b></td>=
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,499</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>4</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>0,499</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,499</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,30</b></td>

                      </tr>

                    </tbody>
                  </table>

                  <h4>Volume : 750 µL</h4>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>n</b></td>
                        <td class="table-info" colspan="4" rowspan="" align="center"><b>Volume Air (µL)</b>
                        </td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Suhu Air (°C)</b>
                        </td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,998</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,50</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,998</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="3" rowspan="3" align="center"><b></b></td>=
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,749</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>4</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>0,749</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,749</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,30</b></td>

                      </tr>

                    </tbody>
                  </table>

                  <h4>Volume : 1000 µL</h4>
                  <table class="table table-hover table-bordered" style="width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>n</b></td>
                        <td class="table-info" colspan="4" rowspan="" align="center"><b>Volume Air (µL)</b>
                        </td>
                        <td class="table-info" colspan="3" rowspan="" align="center"><b>Suhu Air (°C)</b>
                        </td>

                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,998</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,50</b></td>

                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>2</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,998</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="3" rowspan="3" align="center"><b></b></td>=
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>3</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,997</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                      </tr>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>4</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>0,998</b></td>
                      <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                          placeholder="-"></td>
                      </tr>

                      <tr>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>1</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>0,998</b></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>g</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>Awal :</b></td>
                        <td><input name="BIL_2" maxlength="" size="" type="text" style="border: 0"
                            placeholder="-"></td>
                        <td class="table-info" colspan="" rowspan="" align="center"><b>23,30</b></td>

                      </tr>

                    </tbody>
                  </table>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>