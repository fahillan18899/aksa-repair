<div role="tabpanel" class="tab-pane" id="x_ray">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-heading no-print">
            <h1>Lembar Kerja Pengujian dan Kalibrasi X-Ray</h1>
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
                        <td class="table-info" colspan="1" align="left"><b>Alamat</b></td>
                        <td><input name="alamat" type="text" style="border: 0" placeholder="-"></td>
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
                    </tbody>

                  </table>

                  <h3>C. Standar dan Peralatan yang Digunakan</h3>
                  <h5>Prengujian</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>kolimator</b></td>
                        <td class="table-info" colspan="" align="left"> <b>visible</b> </td>
                        <td class="table-info" colspan="" align="left"> <b>x-ray</b> </td>
                        <td class="table-info" colspan="" align="left"> <b>selisih</b> </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="center"><b>x1</b></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="" align="center"><b>-1</b> </td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="center"><b>x2</b></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="" align="center"><b>-1</b>-0,4</td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="center"><b>y1</b></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="" align="center"><b>-1</b>-0,7</td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="center"><b>y2</b></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="" align="center"><b>-1</b>-0,6</td>
                      </tr>
                    </tbody>
                  </table>
                  <!---->
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" rowspan="" colspan="4" align="center"><b>kolimator lux</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-info" rowspan="" colspan="4" align="center"><b>kwadran</b></td>
                      </tr>

                      <tr>
                        <td class="table-info" rowspan="" colspan="" align="center"><b>1</b></td>
                        <td class="table-info" rowspan="" colspan="" align="center"><b>2</b></td>
                        <td class="table-info" rowspan="" colspan="" align="center"><b>3</b></td>
                        <td class="table-info" rowspan="" colspan="" align="center"><b>4</b></td>
                        <td class="table-info" rowspan="" colspan="" align="center"><b>sat</b></td>
                        <td class="table-info" rowspan="2" colspan="" align="center"><b>bg</b></td>
                      </tr>
                      <tr>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="" type="text" style="border: 0" placeholder="-"></td>
                        <td class="table-info" colspan="" align="center"><b>lux</b></td>
                      </tr>


                    </tbody>
                  </table>

                  <h3>Kalibrasi</h3>
                  <h5>focus besar mAs 10</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>

                        <td class="table-info" rowspan="3" colspan="" align="left"><b></b></td>
                        <td class="table-info" colspan="" align="left"><b>kV</b></td>
                        <td class="table-info" colspan="" align="left"><b>kV terukur</b></td>
                        <td class="table-info" colspan="" align="left"><b>dosis</b></td>
                        <td class="table-info" colspan="" align="left"><b>s</b></td>
                        <td class="table-info" colspan="" align="left"><b>HVL</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>50</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>60</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" rowspan="5" colspan="" align="left"><b>Repo</b></td>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>


                    </tbody>
                  </table>


                  <h5>focus kecil mAs 10</h5>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>

                        <td class="table-info" rowspan="3" colspan="" align="left"><b></b></td>
                        <td class="table-info" colspan="" align="left"><b>kV</b></td>
                        <td class="table-info" colspan="" align="left"><b>kV terukur</b></td>
                        <td class="table-info" colspan="" align="left"><b>dosis</b></td>
                        <td class="table-info" colspan="" align="left"><b>s</b></td>
                        <td class="table-info" colspan="" align="left"><b>HVL</b></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>50</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>60</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" rowspan="5" colspan="" align="left"><b>Repo</b></td>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b>70</b></td>
                        <td><input name="suhu_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="suhu_2" type="text" style="border: 0" placeholder="-"></td>
                      </tr>


                    </tbody>
                  </table>

                  <h3>Uji Linearitas radiasi</h3>
                  <table class="table table-hover table-bordered" style=" width:100%">
                    <tbody>
                      <tr>
                        <td class="table-info" colspan="" align="left"><b></b></td>
                        <td class="table-info" colspan="" align="left"><b>kV terukur</b></td>
                        <td class="table-info" colspan="" align="left"><b>mAs/mA</b></td>
                        <td class="table-info" colspan="" align="left"><b>pilih ></b></td>
                      </tr>
                      <tr>
                        <td class="table-info" rowspan="5" colspan="" align="left"><b>Linieritas pada 70
                            kV</b></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                      </tr>
                      <tr>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
                        <td><input name="keterangan_1" type="text" style="border: 0" placeholder="-"></td>
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