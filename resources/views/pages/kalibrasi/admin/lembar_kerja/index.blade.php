@extends('layouts.admin_kalibrasi')

@section('content')
@section('title', 'Lembar Kerja')

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
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default thumbnail">
    
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="col-xs-12 nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Sphygmomanometer</a>
              </li>
              <li role="presentation">
                <a href="#language" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  ECG</a>
              </li>
              <li role="presentation">
                <a href="#centrifuge" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Centrifuge</a>
              </li>
              <li role="presentation">
                <a href="#inkubator" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  inkubator</a>
              </li>
              <li role="presentation">
                <a href="#uv" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> UV</a>
              </li>
              <li role="presentation">
                <a href="#amasthesi" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Amasthesi</a>
              </li>
              <li role="presentation">
                <a href="#patient_monitor" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Patient Monitor</a>
              </li>
              <li role="presentation">
                <a href="#vital_monitor" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Presentation</a>
              </li>
              <li role="presentation">
                <a href="#chemistry" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Chemistr</a>
              </li>
              <li role="presentation">
                <a href="#cardiotocograph" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Cardiotocograph</a>
              </li>
              <li role="presentation">
                <a href="#Defibrilator" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Defibrilator</a>
              </li>
              <li role="presentation">
                <a href="#DefibrilatorMonitor" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>
                  Defibrilator Monitor</a>
              </li>
              <li role="presentation">
                <a href="#DentralUnit" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Dentral Unit</a>
              </li>
              <li role="presentation">
                <a href="#Electrolit" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Electrolit</a>
              </li>
              <li role="presentation">
                <a href="#ENT" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> ENT
                  Treatment</a>
              </li>
              <li role="presentation">
                <a href="#Hematoloy" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Hematoloy</a>
              </li>
              <li role="presentation">
                <a href="#IncubatorTransport" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>
                  Incubator Transport</a>
              </li>
              <li role="presentation">
                <a href="#InfusePump" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Infuse Pump</a>
              </li>
              <li role="presentation">
                <a href="#Spirometri" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Spirometri</a>
              </li>
              <li role="presentation">
                <a href="#SuctionPumpKpa" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  SuctionPumpKpa</a>
              </li>
              <li role="presentation">
                <a href="#infant_warmer" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  infant_warmer</a>
              </li>
              <li role="presentation">
                <a href="#suction_pump_InHg" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>
                  suction_pump_InHg</a>
              </li>
              <li role="presentation">
                <a href="#suction_pump_mmhg" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>
                  suction_pump_mmhg</a>
              </li>
              <li role="presentation">
                <a href="#timbanganDewasa" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  timbangan Dewasa</a>
              </li>
              <li role="presentation">
                <a href="#USG" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> USG</a>
              </li>
              <li role="presentation">
                <a href="#WaterBath" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Water Bath</a>
              </li>
              <li role="presentation">
                <a href="#DentalPanoramic" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Dental Panoramic</a>
              </li>
              <li role="presentation">
                <a href="#Rotator" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Rotator</a>
              </li>
              <li role="presentation">
                <a href="#SWD" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> SWD</a>
              </li>
              </li>
              <li role="presentation">
                <a href="#syringe_pump" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Syringe Pump</a>
              </li>
    
              <li role="presentation">
                <a href="#urine_analyzer" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Urine Analizer</a>
              </li>
    
              <li role="presentation">
                <a href="#AED" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> AED</a>
              </li>
    
              <li role="presentation">
                <a href="#refrakto_keratometer" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>
                  Refrakto Keratometer</a>
              </li>
              <li role="presentation">
                <a href="#Audiometer" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Audiometer</a>
              </li>
              <li role="presentation">
                <a href="#CPAP" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  CPAP</a>
              </li>
              <li role="presentation">
                <a href="#OxygenConcentrator" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i> Oxygen
                  Concentrator</a>
              </li>
              <li role="presentation">
                <a href="#FetalDoplerBaterai" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i> Fetal
                  Dopler Baterai</a>
              </li>
              <li role="presentation">
                <a href="#infraredLamp" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Infrared Lamp</a>
              </li>
              <li role="presentation">
                <a href="#BSC" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> BSC</a>
              </li>
    
              <li role="presentation">
                <a href="#vortex" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Vortex</a>
              </li>
    
              <li role="presentation">
                <a href="#flow_meter" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Flow
                  Meter</a>
              </li>
    
              <li role="presentation">
                <a href="#dopler" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Fetal
                  Dopler</a>
              </li>
    
              <li role="presentation">
                <a href="#hfnc" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>HFNC</a>
              </li>
              <li role="presentation">
                <a href="#MWD" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>MWD</a>
              </li>
              <li role="presentation">
                <a href="#KLS" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>KLS
                  Kelistrikan</a>
              </li>
              <li role="presentation">
                <a href="#LampuOperasi" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Lampu
                  Operasi</a>
              </li>
              <li role="presentation">
                <a href="#Phototeraphy" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Phototeraphy</a>
              </li>
              <li role="presentation">
                <a href="#binocularTHT" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Binocular
                  THT</a>
              </li>
              <li role="presentation">
                <a href="#Microscope" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>
                  Microscope</a>
              </li>
              <li role="presentation">
                <a href="#laminar_air" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Laminar Air
                  Flow</a>
              </li>
    
              <li role="presentation">
                <a href="#microscope_mata" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Microscope
                  Mata</a>
              </li>
    
              <li role="presentation">
                <a href="#nebulizer" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Nebulizer</a>
              </li>
              <li role="presentation">
                <a href="#MicropipetFix" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Microscope
                  Fix</a>
              </li>
              <li role="presentation">
                <a href="#PulseOxymetry" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Pulse
                  Oxymetry</a>
              </li>
              <li role="presentation">
                <a href="#Termohygrometer" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Termohygrometer</a>
              </li>
              <li role="presentation">
                <a href="#BloodWarmer" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Blood
                  Warmer</a>
              </li>
              <li role="presentation">
                <a href="#micropipet" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Micropipet
                  Variable</a>
              </li>
    
              <li role="presentation">
                <a href="#autoclave" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Autoclave</a>
              </li>
    
              <li role="presentation">
                <a href="#chiller" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Chiller</a>
              </li>
    
              <li role="presentation">
                <a href="#cold_chain" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Cold
                  Chain</a>
              </li>
              <li role="presentation">
                <a href="#refigretor" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>refigretor</a>
              </li>
              <li role="presentation">
                <a href="#Sterilisator" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Sterilisator</a>
              </li>
              <li role="presentation">
                <a href="#TermometerDigital" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Termometer Digital</a>
              </li>
              <li role="presentation">
                <a href="#TermometerKlinik" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Termometer Klinik</a>
              </li>
    
              <li role="presentation">
                <a href="#oven" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Oven</a>
              </li>
    
              <li role="presentation">
                <a href="#kulkas_vaksin" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Kulkas
                  Vaksin</a>
              </li>
    
              <li role="presentation">
                <a href="#thermometer_infrared" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Thermometer Infrared</a>
              </li>
    
              <li role="presentation">
                <a href="#freezer" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Freezer</a>
              </li>
              <li role="presentation">
                <a href="#TermometerKulkas" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Termometer Kulkas</a>
              </li>
              <li role="presentation">
                <a href="#ElectroSimulator" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>ElectroSimulator (EST)</a>
              </li>
              <li role="presentation">
                <a href="#TENS" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Transcutaneous
                  Electrical Nerve Stimulation (TENS)</a>
              </li>
    
              <li role="presentation">
                <a href="#blood_bank" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Blood
                  Bank</a>
              </li>
    
              <li role="presentation">
                <a href="#blood_plasma_freezer" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Blood
                  Plasma Freezer</a>
              </li>
    
              <li role="presentation">
                <a href="#vaporizer_isoflurane" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Vapolizer Isoflurane</a>
              </li>
    
              <li role="presentation">
                <a href="#vaporizer_sevoflurane" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Vapolizer Sevoflurane</a>
              </li>
    
              <li role="presentation">
                <a href="#electro_surgery_unit" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Electro Surgery Unit (ESU)</a>
              </li>
    
              <li role="presentation">
                <a href="#lampu_oprasi" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Lampu
                  Oprasi</a>
              </li>
    
              <li role="presentation">
                <a href="#lampu_tindakan" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Lampu
                  Tindakan</a>
              </li>
    
              <li role="presentation">
                <a href="#slit_lamp" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Slit
                  Lamp</a>
              </li>
    
              <li role="presentation">
                <a href="#sepeda_treadmil" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Sepeda
                  Treadmil</a>
              </li>
    
              <li role="presentation">
                <a href="#neo_puff" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>Neo
                  Puff</a>
              </li>
              <li role="presentation">
                <a href="#SpygmomanometerAneroid" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Spygmomanometer Aneroid</a>
              </li>
    
              <li role="presentation">
                <a href="#scaller" aria-controls="language" role="tab" data-toggle="tab"> <i
                    class="fa fa-list"></i>Scaller</a>
              </li>
    
              <li role="presentation">
                <a href="#x_ray" aria-controls="language" role="tab" data-toggle="tab"> <i class="fa fa-list"></i>X-Ray</a>
              </li>
            </ul>
            <br>
            <!-- Tab panes -->
            <div class="col-xs-12 tab-content">
              <br>
              <!-- INFORMATION -->

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
              @include('pages.kalibrasi.admin.lembar_kerja.sepeda_treadmil')
              @include('pages.kalibrasi.admin.lembar_kerja.neo_puff')
              @include('pages.kalibrasi.admin.lembar_kerja.SpygmomanometerAneroid')
              @include('pages.kalibrasi.admin.lembar_kerja.scaller')
              @include('pages.kalibrasi.admin.lembar_kerja.x_ray')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function validasi() {
    const inputN = document.getElementById('input').value;
    const inputN3 = document.getElementById('input')

    if (inputN > 55 || inputN < 45 ) {
       inputN3.style.backgroundColor = 'red';
    } else {
       inputN3.style.backgroundColor = 'transparent';
    }
  }
</script>
@endsection