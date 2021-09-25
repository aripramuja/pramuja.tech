@extends('basic/layout')

@section('title', 'pramuja.tech | Profile')

@section('container')
  <div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/gambar1.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Let's Join Us</h3>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <div class="about-us">
    <h1>MORE ABOUT US?</h1>
  </div>
  <div class="row g-0">
    <div class=" col-md-4 ms-4  pt-4" id="content">
      <img src="{{ asset('images/histories.png') }}" class="d-block w-100" alt="History of Kawokito">
    </div>
    <aside class="col-md-7 ms-5 ">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About Us</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Value</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Organizations</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">Vision & Mission</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <iframe width=100% height="460" src="https://www.youtube.com/embed/uWJ3vtU0OZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h3>PRAMUJA</h3>
          <p style="text-align:justify">
              PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%, sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia (BEI) dengan kode “TLKM” dan New York Stock Exchange (NYSE) dengan kode “TLK”.
              Dalam upaya bertransformasi menjadi digital telecommunication company, TelkomGroup mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented). Transformasi tersebut akan membuat organisasi TelkomGroup menjadi lebih lean (ramping) dan agile (lincah) dalam beradaptasi dengan perubahan industri telekomunikasi yang berlangsung sangat cepat. Organisasi yang baru juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan customer experience yang berkualitas.
              Kegiatan usaha TelkomGroup bertumbuh dan berubah seiring dengan perkembangan teknologi, informasi dan digitalisasi, namun masih dalam koridor industri telekomunikasi dan informasi. Hal ini terlihat dari lini bisnis yang terus berkembang melengkapi legacy yang sudah ada sebelumnya.
              Telkom mulai saat ini membagi bisnisnya menjadi 3 Digital Business Domain:
              Digital Connectivity: Fiber to the x (FTTx), 5G, Software Defined Networking (SDN)/ Network Function Virtualization (NFV)/ Satellite
              Digital Platform: Data Center, Cloud, Internet of Things (IoT), Big Data/ Artificial Intelligence (AI), Cybersecurity
              Digital Services: Enterprise, Consumer. (https://www.telkom.co.id/sites)
          </p>
        </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <h4>Logo philoshopy</h4>
        <img src="{{ asset('images/pramuja.png') }}" alt=""  class="d-inline-block align-top">
        <h6>Pramuja</h6>
        <p>Ari Rahman Pramuja</p>
        <h6>RA</h6>
        <p>Ari Rahman Pramuja</p>
        <hr>
        <h4>Core Value</h4>
        <h6>profesional</h6>
        <hr>
        <p>Halo, harus profesional ya</p>
        <h6>profesional</h6>
        <hr>
        <p>Halo, harus profesional ya</p>
        <h6>profesional</h6>
        <hr>
        <p>Halo, harus profesional ya</p>
        <h6>profesional</h6>
        <hr>
        <p>Halo, harus profesional ya</p>
        <hr>
        <h6>profesional</h6>
        <p>Halo, harus profesional ya</p>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <h4>Stucture</h4>
        <img src="{{ asset('images/structure.png') }}" alt="" width="100%" class="d-inline-block align-top">
      </div>
      <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
        <h4>Vision</h4>
        <p>Be Global Leader</p>
        <hr>
        <h4>Mission</h4>
        <ol>
          <li>Pengetahuan</li>
          <li>Penelitian</li>
          <li>Pengabdian</li>
        </ol>
      </div>
    </aside>       
  </div>
@endsection