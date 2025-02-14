@extends('guest.layouts.main')
@section('container')
    <!-- Banner -->
    <div class="container-fluid banner d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container text-center">
            <h3 class="display-1">SELAMAT DATANG DI DESA GUGAH SEJAHTERA</h3>
        </div>
    </div>

    <!-- Pengumuman Terbaru -->
    <!-- Konten Pengumuman -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Pengumuman Terbaru</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pengumuman Kegiatan Gotong Royong</h5>
                        <p class="card-text">
                            <small class="text-muted">January 25, 2024</small><br>
                            Pengumuman untuk seluruh warga Desa Gugah Sejahtera, akan diadakan kegiatan gotong royong pada hari
                            Minggu, 28 Januari 2024, pukul 07:00 WIB. Seluruh warga diharapkan dapat berpartisipasi...
                        </p>
                        <a href="detail_pengumuman.php?id=1" class="btn btn-link">Read More</a>
                        <!-- Link ke halaman detail pengumuman -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pengumuman Pembagian BLT</h5>
                        <p class="card-text">
                            <small class="text-muted">January 20, 2024</small><br>
                            Pembagian Bantuan Langsung Tunai (BLT) bagi warga yang memenuhi syarat akan dilakukan pada
                            tanggal 30 Januari 2024 di Balai Desa Gugah Sejahtera. Pastikan membawa dokumen yang diperlukan...
                        </p>
                        <a href="detail_pengumuman.php?id=2" class="btn btn-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Maps Alamat Kantor Desa dan Kontak -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Alamat Kantor Desa</h2>
        <div class="row">
            <!-- Kolom yang lebih besar untuk Google Maps -->
            <div class="col-md-8">
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/place/Kantor+Desa+Gugah+Sejahtera/@1.1739275,108.9797407,15z/data=!4m6!3m5!1s0x31e482dcb850fccd:0x1a8004554ae57e14!8m2!3d1.1739275!4d108.9797407!16s%2Fg%2F11c5_vrll7?hl=id&entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D" 
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Kolom yang lebih kecil untuk Kontak dan Media Sosial -->
            <div class="col-md-4">
                <div class="p-3">
                    <h4>Kontak Kami</h4>
                    <ul class="list-unstyled">
                        <li><strong>Alamat:</strong> 5XFH+HVH, Jl. Anom, Pemangkat Kota, Kec. Pemangkat, Kabupaten Sambas, Kalimantan Barat</li>
                        <li><strong>Email:</strong> info@desagugahsejahtera.go.id</li>
                        <li><strong>Telepon:</strong> (021) 12345678</li>
                        <li><strong>Jam Operasional:</strong> Senin - Jumat, 08:00 - 13:00 WIB</li>
                    </ul>

                    <h4>Ikuti Kami</h4>
                    <div class="d-flex justify-content-start">
                        <a href="#" class="btn btn-outline-secondary me-2"><img src="facebook-icon.png" alt="Facebook" width="24"></a>
                        <a href="#" class="btn btn-outline-secondary me-2"><img src="twitter-icon.png" alt="Twitter" width="24"></a>
                        <a href="#" class="btn btn-outline-secondary me-2"><img src="instagram-icon.png" alt="Instagram" width="24"></a>
                        <a href="#" class="btn btn-outline-secondary"><img src="youtube-icon.png" alt="YouTube" width="24"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
