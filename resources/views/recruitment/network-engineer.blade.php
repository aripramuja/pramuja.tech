@extends('basic/layout')

@section('title', 'Career | Network Engineer')

@section('container')
    <div class="events">
        <h5>Network Engineer</h5>     
        <p>Let's see what other's say about pramuja Website Enterprise Development!</p>  
    </div>
    <div class="row g-0">
        <div class="col-md-7 ms-4">
            <p> Ari Pramuja | 29 Februari 2020</p>
            <div class="row row-cols-1 row-cols-md-3 g-4 " >
                <div class="col mx-auto">
                    <div class="card h-100">
                        <img src="{{ asset('images/Data Arranging_Monochromatic.png') }}" alt="...">
                    </div>
                </div>
            </div>
            <br>
            <p> <b>Penempatan:</b> Jakarta | <b>Klasifikasi:</b> Freelance</p>
            <hr>
            <h3>Responsibilities</h3>
            <ol>
                <li>Menyediakan, Memelihara, Dan Mengembangkan Infrastruktur Hardware, Software Internetworking Untuk Meningkatkan Efisiensi Dan Efektifitas Teknologi Perusahaan</li>
                <li>Menyediakan, Memelihara, Dan Melakukan Pengembangan Struktur IT Khususnya Dari Sisi Policy, Dan Sistem Administrasi IT Guna Meningkatkan Efisiensi Dan Efektivitas Teknologi Informasi Perusahaan</li>
            </ol>
            <h3>Requirements</h3>
            <ol>
                <li>Pengalaman Min. 3 (Tiga) Tahun Sbg NSE Perusahaan Software (Full TIme)</li>
                <li>Pendidikan Min. D3 / S1 Di Bidang IT</li>
                <li>Menguasai Infrastructure Security System</li>
                <li>Menguasai Sistem Anti-Virus, Anti-Malware, Anti-Spam, Anti-DDOS, Firewall, IPS, IDS, VPN, Web Application Firewall, Dan SIEM</li>
                <li>Menguasai W/LAN & WAN</li>
                <li>Menguasai Voip & IP PABX</li>
                <li>Menguasai Kosep WAN Optimizaton & Wan Acceleration</li>
                <li>Good Attitude</li>
                <li>Pandai Bergaul Dan Bersosialisasi Dengan Siapapun</li>
                <li>Bisa Bekerjasama Serta Berkomitmen Dengan Berbagai Macam Pihak.</li>
            </ol>
            <p>Tulis Kode Lowongan Yang Diinginkan Di Subjek Email Lamaran Yang Akan Dikirim. Lampirkan Surat Lamaran, Curriculum Vitae Terbaru, Fotocopy KTP Dan Pas Foto Terbaru Dan Dikirim Ke Email : rekrutmen@pramuja.com atau Submit Melalui Form Rekrutmen</p>

        </div>
        <div class="col-md-4 ms-5">
            <div class="apply-now">
                <h5 style="text-align:center">APPLY NOW</h5>
                <p style="text-align:center"> <i>E-Recrutment Form </i> </p>
                <form action="/career/network-engineer" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Your Name . . ." maxlength="50" class="form-control" id="exampleInputName" aria-describedby="nameHelp" required>
                        <div id="nameHelp" class="form-text">Write your full name</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" placeholder="Your Email . . ." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputHandphone" class="form-label">No.Handphone</label>
                        <input type="text" name="handphone" placeholder="No. Phone . . ." maxlength="14" onkeyup="phoneValidate(this)" class="form-control" id="exampleInputHandphone" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPosition" class="form-label">Position</label>
                        <select class="form-select" name="position" aria-label="select example" required>
                            <option value="">Position</option>
                            <option value="Network Engineer">Network Engineer</option>
                        </select>
                        <div class="invalid-feedback">Example invalid select feedback</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputClasification" class="form-label">Clasification</label>
                        <select class="form-select" name="clasification" aria-label="select example" required >
                            <option value="">Clasification</option>
                            <option value="Fulltime">Fulltime</option>
                            <option value="Parttime">Parttime</option>
                            <option value="Internship">Internship</option>
                            <option value="Freelance">Freelance</option>
                        </select>
                        <div class="invalid-feedback">Example invalid select feedback</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Personal Document</label>
                        <input class="form-control" name="file" type="file" id="formFile" required>
                    </div>
                    <p>Harap mengisi email dengan benar untuk menerima konfirmasi</p>
                    
                    <div class="card-footer d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>

@endsection