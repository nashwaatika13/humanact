@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://lh3.googleusercontent.com/p/AF1QipORx0Dk1YQ9laan8FLlc7bNZopFsa2QwWR-1hr4=s1360-w1360-h1020" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Panti Asuhan Anak Yatim Piatu & Terlantar Masjid Gelora Indah</div>
                            <h2 class="card-title">Sumbangan untuk Panti Asuhan Anak Yatim Piatu & Terlantar Masjid Gelora Indah</h2>
                            <p class="card-text">“Bulan Ramadhan adalah bulan sabar, pahala sabar adalah surga. Bulan Ramadhan adalah bulan solidaritas (tolong-menolong), dan bulan dimana rezeki orang mukmin bertambah. Barang siapa memberi buka puasa, maka baginya maghfirah (ampunan) bagi dosa-dosanya dan bebas dirinya dari api neraka. Ia mendapat pahala seperti pahala orang yang berpuasa itu tanpa mengurangi sedikitpun pahala orang yang berpuasa.”</p>
                            <a class="btn btn-primary" href="/donasi">Donasi →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://www.yabangkit.or.id/wp-content/uploads/2019/03/IMG-20190323-WA0002-1024x768.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Source: KitaBisa.com</div>
                                    <h2 class="card-title h4">Sedekah Jariyah Bagikan Al-Quran</h2>
                                    <p class="card-text">Assalamualaikum #OrangBaik, Alhamdulillah kita sedang dalam bulan penuh berkah, bulan seribu bulan, bulan Ramadhan. Bulan ini tentunya sudah selayaknya dipenuhi dengan riang gembira umat muslim yang menyambutnya dengan berbagai amal-amal kebaikan.</p>
                                    <a class="btn btn-primary" href="/tutup">Donasi →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://img.kitabisa.cc/size/1000/ca7796db-77af-4bef-a71f-565d30026d0a.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Source: KitaBisa.com</div>
                                    <h2 class="card-title h4">5 Tahun Tanpa Masjid, 164 Warga Ibadah di Lapangan</h2>
                                    <p class="card-text">Mereka adalah 164 korban bencana alam pergeseran tanah dan longsor tahun 2018. Mereka harus meninggalkan kampung yang sudah tidak layak huni dan pindah ke lahan yang lebih aman. Namun, 5 tahun mereka ibadah tanpa masjid.</p>
                                    <a class="btn btn-primary" href="/tutup">Donasi →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://lh7-us.googleusercontent.com/biHe_tvG4EDVHZ0uJ6I_90rtZfxpvPhJuH_p1hmXZZoMwKiCMl9G0eCbrabZgty-TT5gWlRSmeJZAsy_JAkP9_ThXFGZXoimM2ioyjZl4dG2ckCnva6XxFxdoH21_yGsPhfVvP-huCWICDUwtmkmF24" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Source: KitaBisa.com</div>
                                    <h2 class="card-title h4">PDARURAT ! Dampak Gempa 6.5 magnitudo ratakan tuban</h2>
                                    <p class="card-text">Evakuasi terus dilakukan, tercatat telah terjadi gempa susulan sebanyak 238 kali di 132km Timur Laut Tuban. (Laporan BPBD Jawa Timur pada 24 Maret 2024)</p>
                                    <a class="btn btn-primary" href="/tutup">Donasi →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://img.kitabisa.cc/size/512/68a67286-0473-44d9-89fa-762cd7baa36a.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Source: KitaBisa.com</div>
                                    <h2 class="card-title h4">Bantuan Pakan untuk Hewan Liar dan Terlantar</h2>
                                    <p class="card-text">Lewat program TemanHewan, kami mau mengajak teman-teman untuk menolong hewan-hewan liar dan terlantar di luar sana mulai dari kucing, anjing, dan hewan-hewan lainnya yang membutuhkan dengan bantuan pakan gratis.</p>
                                    <a class="btn btn-primary" href="/tutup">Donasi →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Logo HumanAct</div>
                        <div class="card-body">
                            <img src="{{ asset('admin/images/icon/humanact.jpeg')}}" style="width: 300px" alt="...">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Pengertian HumanAct</div>
                        <div class="card-body">Humanact adalah sebuah platform daring yang memungkinkan individu untuk berpartisipasi dalam aksi kemanusiaan dengan memberikan donasi secara mudah dan transparan.</div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Bentuk Pengajuan Donasi</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>Kebakaran</li>
                                        <li>Banjir</li>
                                        <li>Tanah Longsor</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>Panti Asuhan</li>
                                        <li>Erupsi Gunung Berapi</li>
                                        <li>Penyakit</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection