<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enka Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script-number.jsç.js') }}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  </head>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold custom-primary" href="#home">ENKA TOUR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#find-destination">Destinasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paket-tour">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ulasan">Ulasan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#dokumentasi">Dokumentasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang-kami">Tentang Kami</a></li>
                </ul>
                <form class="d-flex" id="search-form">
                    <input class="form-control me-2" type="search" placeholder="Cari Paket Tour" id="search-input">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section id="home" class="d-flex justify-content-center align-items-center text-center vh-100 position-relative text-white" 
    style="background: url('img/1.jpg') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>
    <div class="position-relative z-2">
        <h1 class="text-uppercase fw-bold">Welcome to <span style="color: orange;">Enka</span> Tour</h1>
        <h3 class="text-uppercase fw-bold">Jelajahi dunia tanpa batas!</h3>
        <p class="lead fs-4">Temukan pengalaman perjalanan tak terlupakan dengan layanan terbaik dari Enka Tour. <br> Dari pantai eksotis hingga petualangan seru, kami siap membawa Anda ke destinasi impian. Yuk, mulai perjalananmu sekarang!</p>
        <a href="{{ route('harga') }}" class="btn btn-lg" style="background-color: orange;">Explore Now</a>
    </div>
</section>

 <!-- Find Your Best Destination Section -->
 <section id="find-destination" class=" best-section py-5" data-aos="zoom-in-down">
    <div class="container text-center">
        <h2 class="mb-2">Find Your Best Destination</h2>
        <p class="mb-4">We have more than 2000 destination you can choose</p>
        <!-- Search Bar -->
        <div class="search-destination mb-5 mx-auto">
            <form class="d-flex justify-content-center">
                <div class="input-group" style="max-width: 400px;">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <input type="text" class="form-control" placeholder="Search Destination">
                    <button class="btn btn-find-more" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>

        <!-- Destination Images -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="outdoor">
                    <img src="{{ asset('img/2.jpg') }}" alt="Destination 1" class="img-fluid">
                    <div class="destination-label">Outdoor</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="lake">
                    <img src="{{ asset('img/4.jpg') }}" alt="Destination 3" class="img-fluid">
                    <div class="destination-label">Indoor</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="beach">
                    <img src="{{ asset('img/3.jpg') }}" alt="Destination 2" class="img-fluid">
                    <div class="destination-label">Beach</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="religi">
                    <img src="{{ asset('img/5.jpg') }}" alt="Destination 4" class="img-fluid">
                    <div class="destination-label">Religi</div>
                </div>
            </div>
        </div>
        <!-- See More Button -->
        <a href="#" class="btn btn-find-more mt-3">See More</a>
    </div>
</section>

<!-- Best Vacation Plan Section -->
<section id="paket-tour" class="paket-section py-5">
    <div class="container text-center">
        <h2 class="mb-2">Best Vacation Plan</h2>
        <p class="mb-5">Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive offer!</p>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card">
                    <img src="{{ asset('img/6.jpg') }}" alt="Bali, Indonesia" class="img-fluid">
                    <div class="vacation-info" data-location="Bali">
                        <h5>Bali Barat /  Bali Utara</h5>
                        <p class="price">Rp 850.000/PAX</p>
                        <p class="deskripsi">Pulau Bali terkenal dengan keindahan alamnya yang menakjubkan, pantai yang indah, serta budaya dan tradisi yang masih kental. Tempat seperti Bedugul, Uluwatu, Ubud, dan Tanah Lot menjadi magnet utama bagi wisatawan lokal maupun mancanegara.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card" data-location="Yogyakarta">
                    <img src="{{ asset('img/7.jpg') }}" alt="Yogyakarta, Indonesia" class="img-fluid">
                    <div class="vacation-info">
                        <h5>Blambangan / Lumajang </h5>
                        <p class="price">Rp 700.000/PAX</p>
                        <p class="deskripsi">Yogyakarta merupakan pusat kebudayaan Jawa yang kaya akan sejarah. Di sini kamu bisa menjelajahi Candi Borobudur dan Prambanan, menikmati kuliner khas seperti gudeg, serta merasakan suasana kota yang ramah dan bersahabat.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card">
                    <img src="{{ asset('img/8.jpg') }}" alt="Lombok, Indonesia" class="img-fluid">
                    <div class="vacation-info" data-location="Lombok">
                        <h5>Bromo - Malang Tour</h5>
                        <p class="price">Rp 1.650.000/PAX</p>
                        <p class="deskripsi">Lombok adalah surga tersembunyi yang siap memanjakan setiap petualang! Dari pantai-pantai eksotis seperti Kuta Lombok dan Tanjung Aan dengan air sebening kristal, hingga puncak megah Gunung Rinjani yang menantang jiwa petualang.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card" data-location="Malang">
                    <img src="{{ asset('img/9.jpg') }}" alt="Malang, Indonesia" class="img-fluid">
                    <div class="vacation-info">
                        <h5>Malang, Tour</h5>
                        <p class="price">Rp 1.500.000/PAX</p>
                        <p class="deskripsi">Kota Malang dikenal dengan udaranya yang sejuk serta pemandangan alam yang indah. Destinasi seperti Gunung Bromo, Jatim Park, dan kampung warna-warni menjadikan Malang tempat yang cocok untuk wisata keluarga maupun petualangan alam.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-find-more mt-3">See More</a>
    </div>
</section>

    <!-- Ulasan -->
<section id="ulasan" class="py-5" style="background-color:#f8f9fa;">
    <div class="container">
        <div class="row">
            <!-- Form Ulasan -->
            <div class="col-md-4">
                <div class="p-4 text-white rounded" style="background-color: orange;">
                    <h3 class="text-center">TULIS ULASAN ANDA</h3>
                    <form id="ulasanForm">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Institusi (Opsional)</label>
                            <input type="text" id="institusi" class="form-control" placeholder="Institusi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Testimonial</label>
                            <textarea id="testimonial" class="form-control" rows="3" placeholder="Tulis ulasan Anda..." required></textarea>
                        </div>

                        <!-- Bintang Rating -->
                        <div style="text-align: center; margin-top: 20px;">
                            <label class="form-label">Seberapa puas dengan layanan kami?</label>
                            <div class="rating" style="display: flex; justify-content: center; gap: 5px;">
                                <input type="radio" id="star1" name="rating" value="1" style="display: none;">
                                <label for="star1" class="star" data-value="1" style="font-size: 2rem; cursor: pointer;">&#9733;</label>

                                <input type="radio" id="star2" name="rating" value="2" style="display: none;">
                                <label for="star2" class="star" data-value="2" style="font-size: 2rem; cursor: pointer;">&#9733;</label>

                                <input type="radio" id="star3" name="rating" value="3" style="display: none;">
                                <label for="star3" class="star" data-value="3" style="font-size: 2rem; cursor: pointer;">&#9733;</label>

                                <input type="radio" id="star4" name="rating" value="4" style="display: none;">
                                <label for="star4" class="star" data-value="4" style="font-size: 2rem; cursor: pointer;">&#9733;</label>

                                <input type="radio" id="star5" name="rating" value="5" style="display: none;">
                                <label for="star5" class="star" data-value="5" style="font-size: 2rem; cursor: pointer;">&#9733;</label>
                            </div>
                        </div>

                        <button type="submit" class="btn w-100 mt-3" style="background-color: #f8f9fa;">Kirim Testimonial</button>
                    </form>
                </div>
            </div>

            <!-- Bagian Tampilan Ulasan -->
            <div class="col-md-8">
                <h3 class="text-center mb-4">PENDAPAT MEREKA TENTANG KAMI</h3>
                <div class="swiper mySwiper" style="height: 400px; position: relative;">
                    <div class="swiper-wrapper" id="ulasan-wrapper">
                        <div class="swiper-slide">
                            <p>Belum ada ulasan yang tersedia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dokumentasi Section -->
<section id="dokumentasi" class="gallery-section py-5">
    <div class="container text-center">
        <h2 class="m-4">Galeri Perjalanan Kami 📸</h2>
        <p>Intip momen-momen indah dari perjalanan bersama Enka Tour 🍃</p>
        <div class="row gallery-grid">
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('img/11.jpg') }}" alt="Trip 1" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('img/12.jpg') }}" alt="Trip 2" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('img/13.jpg') }}" alt="Trip 3" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('img/14.jpg') }}" alt="Trip 4" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('img/15.jpg') }}" alt="Trip 5" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('img/16.jpg') }}" alt="Trip 6" />
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami Section -->
<section class="about-section py-5" id="tentang-kami">
    <div class="container">
        <p class="text-center m-4 fs-1 fw-bold">Tentang Enka Tour</p>
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img class="img-thumbnail rounded-5" src="{{ asset('img/17.jpg') }}" alt="Enka Tour Team" />
            </div>
            <div class="col-lg-6">
                <div class="row about-container g-4">
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-address-book"></i>
                            <h3>Kualifikasi</h3>
                            <p>Supplier Terpercaya</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-headset"></i>
                            <h3>Layanan</h3>
                            <p>Full Support 24 Jam</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-check-circle"></i>
                            <h3>Kerjasama</h3>
                            <p>Saling Menguntungkan</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-cart-arrow-down"></i>
                            <h3>Persediaan</h3>
                            <p>Sayuran dengan Kualitas Terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="about-paragraf">
                    <p>
                        Enka Tour adalah agen travel terpercaya yang telah melayani ribuan pelanggan sejak 2020. Kami berkomitmen untuk memberikan pengalaman perjalanan yang tak terlupakan dengan destinasi wisata terbaik di seluruh dunia 🌍.
                    </p>
                    <p>
                        Enka Tour siap membantu Anda merencanakan liburan impian. Kami menawarkan paket tour yang fleksibel, harga kompetitif, dan pelayanan penuh kehangatan! ✈️✨
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-3 bg-white shadow" data-bs-theme="light" id="TentangEnkaTour">
        <div class="container-fluid ">
            <span class="navbar-text">
                <p><b>&copy;2025 Enka Tour Travel. All Rights Reserved.</b></p>
                <a href="#" class="kontak mx-2">Instagram</a>
                <a href="#" class="kontak mx-2">Facebook</a>
                <a href="#" class="kontak mx-2">Kontak</a>
                <a href="#" class="kontak mx-2">Alamat</a>
            </span>
        </div>
    </footer>

<!-- SwiperJS dan FontAwesome -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 3,
    spaceBetween: 50,
    mousewheel: true,
    loop: true,
    autoplay: {
    delay: 1000,
    disableOnInteraction: false,
},
    breakpoints: {
    640: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
},
});
</script>
</body>
</html>