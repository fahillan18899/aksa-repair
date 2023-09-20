@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Lembar Kerja')
<style>
  /* Ubah warna border input yang tidak valid menjadi merah */
  .form-control.is-invalid {
    border-color: red;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <div class="p-l-30 p-r-30">
      <div class="header-icon"><i class="pe-7s-world"></i></div>
      <div class="header-title">
        <h1>Lembar Kerja</h1>
        <small>Form Lembar Kerja Alat</small>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <div class="content">
    <!-- demo mode enable alert -->
    <div id="demoModeEnable"></div>
    <!-- alert message -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">rdioto
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">

          <div class="panel-body">
            <!-- Nav tabs -->
            <!-- Tab panes -->
            <div class="col-xs-6 tab-content">
              <label for="floorplanSelect">Pilih Lembar Kerja</label>
              <select id="floorplanSelect" class="form-control" name="floorplan">
                <option value="AED">AED</option>
                <option value="amasthesi">Anasthesi</option>
                <option value="AnesthesiUnit">Anesthesi Unit</option>
                <option value="Audiometer">Audiometer</option>
                <option value="autoclave">Autoclave</option>
                <option value="binocularTHT">Binocular THT</option>
                <option value="blood_bank">Blood Bank</option>
                <option value="blood_plasma_freezer">Blood Plasma Freezer</option>
                <option value="BloodWarmer">Blood Warmer</option>
                <option value="BSC">BSC</option>
                <option value="cardiotocograph">Cardiotocograph</option>
                <option value="centrifuge">Centrifuge</option>
                <option value="chemistry">Chemistr</option>
                <option value="chiller">Chiller</option>
                <option value="cold_chain">Cold Chain</option>
                <option value="CPAP"> CPAP</option>
                <option value="Defibrilator">Defibrilator</option>
                <option value="DefibrilatorMonitor">Defibrilator Monitor</option>
                <option value="DentalPanoramic"> Dental Panoramic</option>
                <option value="DentralUnit"> Dentral Unit</option>
                <option value="language">ECG</option>
                <option value="electro_surgery_unit">Electro Surgery Unit (ESU)</option>
                <option value="Electrolit">Electrolit</option>
                <option value="ElectroSimulator">ElectroSimulator (EST)</option>
                <option value="Elektrostimulator">Elektrostimulator</option>
                <option value="endoscopy_light">Endoscopy Light</option>
                <option value="ENT">ENT Treatment</option>
                <option value="FetalDoplerBaterai"> Fetal Dopler Baterai</option>
                <option value="dopler">Fetal Dopler</option>
                <option value="flow_meter">Flow Meter</option>
                <option value="freezer">Freezer</option>
                <option value="Hematoloy">Hematoloy</option>
                <option value="hfnc">HFNC</option>
                <option value="IncubatorTransport">Incubator Transport</option>
                <option value="infant_warmer"> infant_warmer</option>
                <option value="infraredLamp"> Infrared Lamp</option>
                <option value="InfusePump">Infuse Pum</option>
                <option value="inkubator">inkubator</option>
                <option value="KLS">KLS Kelistrikan</option>
                <option value="kulkas_vaksin">Kulkas Vaksin</option>
                <option value="laminar_air">Laminar Air Flow</option>
                <option value="lampu_oprasi">Lampu Oprasi</option>
                <option value="LampuOperasi">Lampu Operasi 2 kepala</option>
                <option value="lampu_tindakan">Lampu Tindakan</option>
                <option value="micropipet">Micropipet Variable</option>
                <option value="MicropipetFix">Microscope Fix</option>
                <option value="microscope_mata">Microscope Mata</option>
                <option value="Microscope">Microscope</option>
                <option value="MWD">MWD</option>
                <option value="nebulizer">Nebulizer</option>
                <option value="neo_puff">Neo Puff</option>
                <option value="otoscope">Otoscope</option>
                <option value="oven">Oven</option>
                <option value="OxygenConcentrator">Oxygen Concentrator</option>
                <option value="patient_monitor">Patient Monitor</option>
                <option value="Photometer">Photometer</option>
                <option value="Phototeraphy">Phototeraphy</option>
                <option value="PulseOxymetry">ulse Oxymetry</option>
                <option value="refigretor">refigretor</option>
                <option value="refrakto_keratometer">Refrakto Keratometer</option>
                <option value="Rotator"> Rotator</option>
                <option value="scaller">Scaller</option>
                <option value="sepeda_treadmil">Sepeda Treadmi</option>
                <option value="slit_lamp">Slit Lamp</option>
                <option value="Spirometri"> Spirometri</option>
                <option value="home">Sphygmomanometer</option>
                <option value="SpygmomanometerAneroid">Spygmomanometer Aneroid</option>
                <option value="Sterilisator">Sterilisator</option>
                <option value="suction_pump_InHg"> suction_pump_InHg</option>
                <option value="suction_pump_mmhg">suction_pump_mmhg</option>
                <option value="SuctionPumpKpa">SuctionPumpKpa</option>
                <option value="SWD">SWD</option>
                <option value="syringe_pump">Syringe Pump</option>
                <option value="TENS">Transcutaneous Electrical Nerve Stimulation (TENS)</option>
                <option value="Termohygrometer">Termohygrometer</option>
                <option value="TermometerDigital">Termometer Digital</option>
                <option value="TermometerKlinik">Termometer Klinik</option>
                <option value="TermometerKulkas">Termometer Kulkas</option>
                <option value="thermometer_infrared">Thermometer Infrared</option>
                <option value="timbanganDewasa">timbangan Dewasa</option>
                <option value="Ultrasonograph">Ultrasonograph (USG)</option>
                <option value="UltrasoundTeraphy ">Ultrasound Teraphy </option>
                <option value="urine_analyzer"> Urine Analizer</option>
                <option value="USG">USG</option>
                <option value="uv">UV</option>
                <option value="vaporizer_isoflurane">Vapolizer Isoflurane</option>
                <option value="vaporizer_sevoflurane">Vapolizer Sevoflurane</option>
                <option value="vital_monitor">Presentation</option>
                <option value="vortex">Vortex</option>
                <option value="WaterBath">Water Bath</option>
                <option value="x_ray">X-Ra</option>

              </select>
            </div>
            <div class="col-xs-12 tab-content">
              <br>
              @include('pages.kalibrasi.admin.lembar_kerja.spygmo')
              @include('pages.kalibrasi.admin.lembar_kerja.elecrtocardiograph')
              @include('pages.kalibrasi.admin.lembar_kerja.centrifuge')
              @include('pages.kalibrasi.admin.lembar_kerja.inkubator')
              @include('pages.kalibrasi.admin.lembar_kerja.uv_sterialsator')
              @include('pages.kalibrasi.admin.lembar_kerja.anesthesi')
              @include('pages.kalibrasi.admin.lembar_kerja.patient_monitor')
              @include('pages.kalibrasi.admin.lembar_kerja.vital_monitor')
              @include('pages.kalibrasi.admin.lembar_kerja.chemistry_analaizer')
              @include('pages.kalibrasi.admin.lembar_kerja.cardiotocograph')
              @include('pages.kalibrasi.admin.lembar_kerja.defibrilator')
              @include('pages.kalibrasi.admin.lembar_kerja.defibrilatorMonitor')
              @include('pages.kalibrasi.admin.lembar_kerja.dentralUnit')
              @include('pages.kalibrasi.admin.lembar_kerja.electrolit')
              @include('pages.kalibrasi.admin.lembar_kerja.ENT')
              @include('pages.kalibrasi.admin.lembar_kerja.hematoloy')
              @include('pages.kalibrasi.admin.lembar_kerja.incubatorTransport')
              @include('pages.kalibrasi.admin.lembar_kerja.infusePump')
              @include('pages.kalibrasi.admin.lembar_kerja.spirometri')
              @include('pages.kalibrasi.admin.lembar_kerja.suctionpumpKpa')
              @include('pages.kalibrasi.admin.lembar_kerja.infant_warmer')
              @include('pages.kalibrasi.admin.lembar_kerja.suction_pump_InHg')
              @include('pages.kalibrasi.admin.lembar_kerja.suction_pump_mmhg')
              @include('pages.kalibrasi.admin.lembar_kerja.timbanganDewasa')
              @include('pages.kalibrasi.admin.lembar_kerja.USG')
              @include('pages.kalibrasi.admin.lembar_kerja.WaterBath')
              @include('pages.kalibrasi.admin.lembar_kerja.DentalPanoramic')
              @include('pages.kalibrasi.admin.lembar_kerja.Rotator')
              @include('pages.kalibrasi.admin.lembar_kerja.SWD')
              @include('pages.kalibrasi.admin.lembar_kerja.syringe_pump')
              @include('pages.kalibrasi.admin.lembar_kerja.urine_analyzer')
              @include('pages.kalibrasi.admin.lembar_kerja.AED')
              @include('pages.kalibrasi.admin.lembar_kerja.refrakto_keratometer')
              @include('pages.kalibrasi.admin.lembar_kerja.Audiometer')
              @include('pages.kalibrasi.admin.lembar_kerja.CPAP')
              @include('pages.kalibrasi.admin.lembar_kerja.OxygenConcentrator')
              @include('pages.kalibrasi.admin.lembar_kerja.FetalDoplerBaterai')
              @include('pages.kalibrasi.admin.lembar_kerja.infraredLamp')
              @include('pages.kalibrasi.admin.lembar_kerja.BSC')
              @include('pages.kalibrasi.admin.lembar_kerja.vortex')
              @include('pages.kalibrasi.admin.lembar_kerja.flow_meter')
              @include('pages.kalibrasi.admin.lembar_kerja.dopler')
              @include('pages.kalibrasi.admin.lembar_kerja.hfnc')
              @include('pages.kalibrasi.admin.lembar_kerja.MWD')
              @include('pages.kalibrasi.admin.lembar_kerja.KLS')
              @include('pages.kalibrasi.admin.lembar_kerja.LampuOperasi')
              @include('pages.kalibrasi.admin.lembar_kerja.Phototeraphy')
              @include('pages.kalibrasi.admin.lembar_kerja.binocularTHT')
              @include('pages.kalibrasi.admin.lembar_kerja.Microscope')
              @include('pages.kalibrasi.admin.lembar_kerja.laminar_air')
              @include('pages.kalibrasi.admin.lembar_kerja.microscope_mata')
              @include('pages.kalibrasi.admin.lembar_kerja.nebulizer')
              @include('pages.kalibrasi.admin.lembar_kerja.MicropipetFix')
              @include('pages.kalibrasi.admin.lembar_kerja.PulseOxymetry')
              @include('pages.kalibrasi.admin.lembar_kerja.Termohygrometer')
              @include('pages.kalibrasi.admin.lembar_kerja.BloodWarmer')
              @include('pages.kalibrasi.admin.lembar_kerja.micropipet')
              @include('pages.kalibrasi.admin.lembar_kerja.autoclave')
              @include('pages.kalibrasi.admin.lembar_kerja.chiller')
              @include('pages.kalibrasi.admin.lembar_kerja.cold_chain')
              @include('pages.kalibrasi.admin.lembar_kerja.refigretor')
              @include('pages.kalibrasi.admin.lembar_kerja.Sterilisator')
              @include('pages.kalibrasi.admin.lembar_kerja.TermometerDigital')
              @include('pages.kalibrasi.admin.lembar_kerja.TermometerKlinik')
              @include('pages.kalibrasi.admin.lembar_kerja.oven')
              @include('pages.kalibrasi.admin.lembar_kerja.kulkas_vaksin')
              @include('pages.kalibrasi.admin.lembar_kerja.thermometer_infrared')
              @include('pages.kalibrasi.admin.lembar_kerja.freezer')
              @include('pages.kalibrasi.admin.lembar_kerja.TermometerKulkas')
              @include('pages.kalibrasi.admin.lembar_kerja.ElectroSimulator')
              @include('pages.kalibrasi.admin.lembar_kerja.TENS')
              @include('pages.kalibrasi.admin.lembar_kerja.blood_bank')
              @include('pages.kalibrasi.admin.lembar_kerja.blood_plasma_freezer')
              @include('pages.kalibrasi.admin.lembar_kerja.vaporizer_isoflurane')
              @include('pages.kalibrasi.admin.lembar_kerja.vaporizer_sevoflurane')
              @include('pages.kalibrasi.admin.lembar_kerja.electro_surgery_unit')
              @include('pages.kalibrasi.admin.lembar_kerja.lampu_oprasi')
              @include('pages.kalibrasi.admin.lembar_kerja.lampu_tindakan')
              @include('pages.kalibrasi.admin.lembar_kerja.slit_lamp')
              @include('pages.kalibrasi.admin.lembar_kerja.Photometer')
              @include('pages.kalibrasi.admin.lembar_kerja.AnesthesiUnit')
              @include('pages.kalibrasi.admin.lembar_kerja.sepeda_treadmil')
              @include('pages.kalibrasi.admin.lembar_kerja.neo_puff')
              @include('pages.kalibrasi.admin.lembar_kerja.SpygmomanometerAneroid')
              @include('pages.kalibrasi.admin.lembar_kerja.scaller')
              @include('pages.kalibrasi.admin.lembar_kerja.x_ray')
              @include('pages.kalibrasi.admin.lembar_kerja.Elektrostimulator')
              @include('pages.kalibrasi.admin.lembar_kerja.ultrasonograph')
              @include('pages.kalibrasi.admin.lembar_kerja.endoscopy_light')
              @include('pages.kalibrasi.admin.lembar_kerja.otoscope')
              @include('pages.kalibrasi.admin.lembar_kerja.ultrasound_teraphy ')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var inputElements50 = document.getElementsByClassName("input-number-50");
  var inputElements100 = document.getElementsByClassName("input-number-100");
  var inputElements150 = document.getElementsByClassName("input-number-150");
  var inputElements200 = document.getElementsByClassName("input-number-200");
  var inputElements250 = document.getElementsByClassName("input-number-250");
  var inputElements260 = document.getElementsByClassName("input-number-260");

  for (var i = 0; i < inputElements50.length; i++) {
    inputElements50[i].addEventListener("input", validateNumber);
  }

  for (var i = 0; i < inputElements100.length; i++) {
    inputElements100[i].addEventListener("input", validateNumber);
  }

  for (var i = 0; i < inputElements150.length; i++) {
    inputElements150[i].addEventListener("input", validateNumber);
  }

  for (var i = 0; i < inputElements200.length; i++) {
    inputElements200[i].addEventListener("input", validateNumber);
  }

  for (var i = 0; i < inputElements250.length; i++) {
    inputElements250[i].addEventListener("input", validateNumber);
  }
  for (var i = 0; i < inputElements260.length; i++) {
    inputElements260[i].addEventListener("input", validateNumber);
  }

  function validateNumber() {
    for (var i = 0; i < inputElements50.length; i++) {
      var inputValue = inputElements50[i].value;

      if (inputValue < 45 || inputValue > 55) {
        inputElements50[i].classList.add("is-invalid");
      } else {
        inputElements50[i].classList.remove("is-invalid");
      }
    }
    for (var i = 0; i < inputElements100.length; i++) {
      var inputValue100 = inputElements100[i].value;
      if (inputValue100 < 95 || inputValue100 > 105) {
        inputElements100[i].classList.add("is-invalid");
      } else {
        inputElements100[i].classList.remove("is-invalid");
      }
    }
    for (var i = 0; i < inputElements150.length; i++) {
      var inputValue150 = inputElements150[i].value;
      if (inputValue150 < 145 || inputValue150 > 155) {
        inputElements150[i].classList.add("is-invalid");
      } else {
        inputElements150[i].classList.remove("is-invalid");
      }
    }
    for (var i = 0; i < inputElements200.length; i++) {
      var inputValue200 = inputElements200[i].value;
      if (inputValue200 < 195 || inputValue200 > 205) {
        inputElements200[i].classList.add("is-invalid");
      } else {
        inputElements200[i].classList.remove("is-invalid");
      }
    }
    for (var i = 0; i < inputElements250.length; i++) {
      var inputValue250 = inputElements250[i].value;
      if (inputValue250 < 245 || inputValue250 > 255) {
        inputElements250[i].classList.add("is-invalid");
      } else {
        inputElements250[i].classList.remove("is-invalid");
      }
    }
    for (var i = 0; i < inputElements260.length; i++) {
      var inputValue260 = inputElements260[i].value;
      if (inputValue260 < 255 || inputValue260 > 265) {
        inputElements260[i].classList.add("is-invalid");
      } else {
        inputElements260[i].classList.remove("is-invalid");
      }
    }
  }

  $('#floorplanSelect').on('change', function(e) {
    $('.tab-pane').removeClass('active in')
    $('#' + $(e.currentTarget).val()).addClass("active in");
  })
</script>

@endsection