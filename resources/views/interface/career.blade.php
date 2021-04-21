@extends('basic/layout')

@section('title', 'pramuja.tech | Career')

@section('container')
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('images/gambar1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
            </div>
            
            
        </div>
    </div>

    <div class="career-container">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Recrutment Position</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Information & Qualification</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Fasilities Employee</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                
                <div class="events">
                    <h5>Recrutment Position</h5>     
                    <p>Let's see what other's say about pramuja Website Enterprise Development!</p>  
                </div>
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/Data Arranging_Monochromatic.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <small class="text-muted">Berakhir pada 5 April 2021</small>
                                <h5 class="card-title" style="text-align:center">Network Engineer</h5>
                            </div>
                            <div class="card-footer d-grid gap-2">
                                <a href="{{ url('/career/network-engineer') }}" class="btn btn-primary" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/Data Arranging_Isometric.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <small class="text-muted">Berakhir pada 5 April 2021</small>
                                <h5 class="card-title" style="text-align:center">Network Engineer</h5>
                            </div>
                            <div class="card-footer d-grid gap-2">
                            <a href="{{ url('/career/network-engineer') }}"  class="btn btn-primary" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/Statue of liberty_Monochromatic.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <small class="text-muted">Berakhir pada 5 April 2021</small>
                                <h5 class="card-title" style="text-align:center">Network Engineer</h5>
                            </div>
                            <div class="card-footer d-grid gap-2">
                                <a href="{{ url('/career/network-engineer') }}"  class="btn btn-primary" type="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="events">
                    <h5>Information</h5>     
                    <p>Let's see what other's say about pramuja Website Enterprise Development!</p>  
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <h5 style="text-align:center">General</h5>
                            <ul>
                                <li>Rekrutmen tidak dipungut biaya apapun</li>
                                <li>Tahapan rekrutmen :
                                    <ol>
                                        <li>Seleksi berkas dan dokumen pendukung</li>
                                        <li>Tes pengetahuan dan wawasan teknologi</li>
                                        <li>Interview</li>
                                    </ol>
                                </li>
                                <li>Syarat dan ketentuan berlaku</li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <h5 style="text-align:center">Freelance</h5>
                            <ul>
                                <li>Rekrutmen tidak dipungut biaya apapun</li>
                                <li>Tahapan rekrutmen :
                                    <ol>
                                        <li>Seleksi berkas dan dokumen pendukung</li>
                                        <li>Tes pengetahuan dan wawasan teknologi</li>
                                        <li>Interview</li>
                                    </ol>
                                </li>
                                <li>Syarat dan ketentuan berlaku</li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <h5 style="text-align:center">Internship</h5>
                            <ul>
                                <li>Rekrutmen tidak dipungut biaya apapun</li>
                                <li>Tahapan rekrutmen :
                                    <ol>
                                        <li>Seleksi berkas dan dokumen pendukung</li>
                                        <li>Tes pengetahuan dan wawasan teknologi</li>
                                        <li>Interview</li>
                                    </ol>
                                </li>
                                <li>Syarat dan ketentuan berlaku</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="https://www.linkedin.com/in/ari-pramuja/" target="new" class="btn btn-primary" type="button">Download Personal Form</a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="events">
                    <h5>Fasilities Employee</h5>     
                    <p>Let's see what other's say about pramuja Website Enterprise Development!</p>  
                </div>
            </div>
            
        </div>
    </div>

@endsection

