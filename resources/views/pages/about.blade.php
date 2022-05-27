@extends('layouts.app')

@section('title')
Store About Us
@endsection

@push('addon-style')
    <link href="{{ url('/style/styleabout.css') }}" rel="stylesheet" />
    <style>
        .banner1 {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("assets/images/bgg2.jpg");
            background-size: cover;
        }
        .testimonials {
            background: url("assets/images/bgt.jpg");
            background-size: cover;
        }
        .team {
            background: url("assets/images/bg11.jpg");
            background-size: cover;
        }
    </style>
@endpush

@section('content')

<section class="banner1" id="banner1">
    <div class="content1">
        <h2 data-aos="fade-down" data-aos-delay="200">
            Futsal Match Hadirkan Solusi Perlengkapan Olahraga Berkualitas Tinggi
        </h2>
        <p>Kami mempunyai tujuan menjadi sebuah marketplace yang dapat menyediakan semua kebutuhan olahraga Anda mulai dari sepatu hingga aksesori berkualitas.</p>
    </div>
</section>

<section class="about" id="about">
    <div class="row1">
        <div class="col50" data-aos="fade-down" data-aos-delay="700">
            <h2 class="tittleText1"><span>S</span>iapa Kami?</h2>
            <p>Selamat datang di situs Futsal Match di mana Anda dapat membeli perlengkapan dan aksesori olahraga berkualitas.
                Toko Online kami menyediakan produk terbaik mulai dari sepatu olahraga, dan sneaker, hingga aksesori olahraga lainnya untuk semua kebutuhan Anda. Kami terus memperbarui daftar produknya sehingga Anda dapat membeli koleksi sepatu, pakaian, aksesori olahraga terbaru kami.
                Temukan sepatu favorit Anda mulai dari sepatu untuk pria, wanita, dan anak-anak hanya di toko online resmi kami.

                <br><br>Kami berfokus pada produk high quality untuk mendapatkan perhatian dari pelanggan yang dapat memuaskan keinginan atau kebutuhan.
            </p>
        </div>
        <div class="col50" data-aos="fade-down" data-aos-delay="250">
            <div class="imgBx">
                <img src="assets/images/2.jpg">
            </div>
        </div>
    </div>
</section>

<section class="team" id="team" >
    <div class="title mb-4" data-aos="fade-down" data-aos-delay="250">
        <h2 class="tittleText"> Our <span>T</span>eam</h2>
    </div>
    <div class="body2 mt-3" data-aos="fade-down" data-aos-delay="500">
        <div class="box1">
            <div class="imgBx" >
                 <img src="assets/images/didik.jpg">
            </div>
            <div class="content2">
                <h2>Didik Wahyudi<br><span>Manajemen Informatika</span></h2>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="title white">
        <h2 class="tittleText" data-aos="fade-down" data-aos-delay="100">They <span>S</span>aid About us</h2>
        <p>Tanggapan selebgram mengenai fitur website futsal match</p>
    </div>
    <div class="content3">
        <div class="hexagon" data-aos="fade-down" data-aos-delay="200">
            <div class="shape">
                <img src="assets/images/angie.jpg">
                <div class="text">
                    <div>
                        <h3>Angie Marcheria</h3>
                        <p>Kualitasnya baguss, bahannya halus, kerenn bangett dehh pokoknya</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon" data-aos="fade-down" data-aos-delay="300">
            <div class="shape">
                <img src="assets/images/tia kartika.jpg">
                <div class="text">
                    <div>
                        <h3>Tia Kartika</h3>
                        <p>Barangnya realpict baguss bangett. Harganya juga terjangkau😅</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon" data-aos="fade-down" data-aos-delay="400">
        <div class="shape">
            <img src="assets/images/alice.jpg">
            <div class="text">
                <div>
                    <h3>Maureen Gabriella</h3>
                    <p>Kerennn!! Barangnya bagus, bahan bajunya nyaman dan original😍</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

