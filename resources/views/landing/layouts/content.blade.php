<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('landingpage-rujak') }}/img/fotoproduk4 bagus.JPG" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown text-white"
                                    style="text-shadow: 5px 5px #FF0000">
                                    Fresh Rujak Klasik</h1>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('landingpage-rujak') }}/img/fotoubi3.JPG" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown text-white"
                                    style="text-shadow: 5px 5px rgb(129, 0, 129)">Bubur Ubi Ungu</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<div class="container-fluid bg-light bg-icon py-6 mb-5" st>
    <div class="container" id="kastemer">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Promo Kami!!!</h1>

        </div>

        <div class="container">
            <div class="row d-flex">
                @foreach ($promos as $promo)
                    <div class="col-md-6">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0 align-items-center">
                            <img class="img-fluid w-60" width="250" height="250"
                                src="{{ asset('storage/promo/' . $promo->gambar) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center">{{ $promo->Menu->nama }}</h5>
                        <div class="text-center mt-2">
                            <span class="text-primary me-1">Rp {{ number_format($promo->harga, 2) }}</span>
                            <span class="text-body text-decoration-line-through">Rp
                                {{ number_format($promo->Menu->harga, 2) }}</span>
                        </div>
                        <p class="text-justify">
                            <strong style="font-size: 20px; color: #ff0000;">
                                {{ $promo->deskripsi }}
                            </strong>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- About Start --}}
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-60" src="{{ asset('rujak dan ubi/img/fotobuAyu.jpeg') }}" width="300"
                        height="200">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="text-align:justify;">
                <h1 class="display-5 mb-4">Tentang Kami</h1>
                <p class="mb-4"> Merk Rujak Klasik merupakan produk unggulan Ibu Ayu Putu Setuti Asih, sudah dinikmati
                    sejak 9 Mei 2018. <br>
                    &nbsp; &nbsp; &nbsp; <strong> Rujak Klasik </strong>dibuat dari buah segar pilihan, diantaranya :
                    buah mangga, kedondong, bengkoang, nanas, timun dan ubi merah dengan sambal yang terbuat dari cabai
                    dan bahan pilihan, level kepedasan yang bervariasi dan nikmat disantap dalam suhu ruang dan dingin
                    yang lebih memberikan rasa segarnya.
                    Selain rujak klasik dan sambal rujak, produk unggulan lainnya adalah Bubur Ubi Ungu. <br>
                    &nbsp; &nbsp; &nbsp; <strong> Bubur Ubi Ungu </strong> atau sering disingkat dengan Burbiu merupakan
                    olahan kuliner yang bisa dinikmati oleh segala usia, bermanfaat dan menyehatkan.
                    Untuk mengolah ubi ungu menjadi Burbiu ini sangat mudah membuatnya, perpaduan rasa manis dan
                    gurihnya santan yang diolah dari fiber cream dan rich cream menjadikan sensasi rasa tersendiri jika
                    disantap pada suhu ruang , hangat ataupun dingin. <br>
                    &nbsp; &nbsp; &nbsp; <strong> Rujak klasik, sambal rujak dan bubur ubi ungu </strong> tersedia dalam
                    berbagai variasi ukuran, berat dan cocok untuk berbagai acara seperti arisan, acara pernikahan,
                    reuni, rapat dan berbagai acara lainnya.
                    Proses pengiriman dan bertransaksi sangat mudah sehingga kesegaran Rujak klasik, sambal klasik dan
                    bubur ubi ungu terjaga sampai di tangan konsumen.
                </p>

            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('rujak dan ubi') }}/img/fotologoestetik.JPG">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="text-align:justify;">

                <p class="mb-4"><strong>#Kepoin Kuy apa itu Rujak Klasik#</strong><br><br>

                    Rujak Klasik adalah rujak buah seperti pada umumnya.
                    Dibuat dari aneka buah segar pilihan yaitu mangga, kedondong, bengkoang, nanas, timun dan ubi merah,
                    yang diserut dan dibumbui dengan sambal rujak original dari campuran gula merah,gula putih, cabai,
                    asam jawa,dan garam.
                    Bumbu rujak klasik tanpa dicampur dengan terasi dan kacang tanah sehingga memiliki citarasa
                    tersendiri yang bisa dipilih level kepedasannya sehingga menjadikan rujak klasik lebih nikmat dan
                    segar.
                    Rujak Klasik ini bertahan sekitar 24 jam pada suhu ruang, 7-10 hari di kulkas dan 1 bulan di
                    freezer.
                    Rujak Klasik dikemas dalam toples, box mika dan plastik pouch atau sesuai dengan permintaan
                    konsumen.
                    Dan yang pasti rujak klasik ini sudah bersertifikat Halal. <br><br>
                    <strong> untuk 250 g rujak klasik dibandrol dengan harga 15K dan 25K untuk 430 gr.<br><br></strong>
                    Untuk pemesanan sesuai permintaan konsumen bisa dengan harga khusus.
                    Apapun kemasannya dijamin rasa rujak klasik tetep SEGER deh. <br><br>
                    <strong>#Reseller Welcome#</strong>
                </p>

            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('rujak dan ubi') }}/img/fotoubi3.JPG">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="text-align:justify;">

                <p class="mb-4"><strong>#Bubur Ubi Ungu alias Burbiu#<br></strong>

                    Bubur Ubi Ungu alias Burbiu, terbuat dari ubi jalar yang berwarna ungu, yang direbus kemudian
                    dicampur tepung sagu, gula putih dan sedikit garam.
                    Dihidangkan dengan santan yang dibuat dari Fiber Cream atau Rich Cream yang kaya akan serat sehingga
                    aman untuk dikonsumsi.
                    Bubur ubi ungu aman dikunsumsi dalam batas maksimal 12 jam pada suhu ruang atau 3 hari jika disimpan
                    di kulkas.
                    Proses pembuatannya yang mudah, bisa dinikmati oleh segala usia serta kaya manfaat antara lain ubi
                    ungu sebagai anti oksidan dan anti kanker menjadi alasan bubur ubi ungu ini diproduksi dan disantap
                    dingin lebih menambah cita rasa perpaduan manis dan gurihnya.<br>
                    <strong> Burbiu dalam kemasan 150 gram hanya dengan harga 6K dan harga 10K bisa menikmati 300 gram
                        burbiu.</strong>


                <p><i class="fa fa-check text-primary me-3"></i>Berkualitas</p>
                <p><i class="fa fa-check text-primary me-3"></i>Murah</p>
                <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container" id="prodak">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Produk Kami</h1>
                    <p>Produk Kami sangat Berkualitas dan juga fresh tentunya</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                            href="#tab-1">Rujak</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Ubi </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @foreach ($menuRujak as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100 ratio ratio-1x1"
                                        src="{{ asset('storage/menu/' . $item->gambar) }}" alt="">

                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">{{ $item->nama }}</a>
                                    <span class="text-primary me-1">Rp {{ number_format($item->harga, 2) }}</span>
                                    <span class="text-body text-decoration-line-through">Rp
                                        {{ number_format($item->harga + 10000, 2) }}</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href=""><i
                                                class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" target="_blank"
                                            href="https://wa.me/6285210303732?text=saya%20ingin%20memesan%20ukuran%20250g%20rujak%20klasik"><i
                                                class="fab fa-whatsapp fa-2x text-primary me-2"></i>Pesan Disini</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    @foreach ($menuUbi as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('storage/menu/' . $item->gambar) }}"
                                        alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">{{ $item->nama }}</a>
                                    <span class="text-primary me-1">Rp {{ number_format($item->harga, 2) }}</span>
                                    <span class="text-body text-decoration-line-through">
                                        {{ number_format($item->harga + 10000, 2) }}</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href=""><i
                                                class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" target="_blank"
                                            href="https://wa.me/6285210303732?text=saya%20ingin%20memesan%20150g%20produk%20bubur%20ubi"><i
                                                class="fab fa-whatsapp fa-2x text-primary me-2"></i>Pesan Disini</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Firm Visit Start -->

    <!-- Firm Visit End -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5" st>
        <div class="container" id="kastemer">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Testimoni Customer!</h1>
                <p>Penilaian terhadap costumer yang sudah membeli produk kami.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div id="review-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('landingpage-rujak') }}/img/fotowhatsapp.jpeg"
                                        class="d-block w-50" alt="Review Foto 1">
                                </div>
                                @foreach ($testimonis as $testimoni)
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/testimoni/' . $testimoni->gambar) }}"
                                            class="d-block w-50" alt="Review Foto 3">
                                    </div>
                                @endforeach

                            </div>
                            <div class="carousel-control-prev" type="button" data-bs-target="#review-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </div>
                            <div class="carousel-control-next" type="button" data-bs-target="#review-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5" st>
        <div class="container" id="kastemer">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Penilaian terhadap costumer yang sudah membeli produk kami.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s"
                style="text-align: left;">
                @foreach ($reviews as $review)
                    <div class="testimonial-item position-relative bg-white p-5 mt-4">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                        <p class="mb-4">{{ $review->comments }}</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle"
                                src="{{ asset('Assets/person_circle_icon.svg') }}" alt="">
                            <div class="ms-3">
                                <h5 class="mb-1">{{ $review->name }}</h5>
                                <span>
                                    @if ($review->star_rating == '5')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                    @elseif ($review->star_rating == '4')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @elseif ($review->star_rating == '3')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @elseif ($review->star_rating == '2')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @else
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Projek Kami</h1>
                <p>Rujak buah menjadi salah satu alternatif buat kamu yang ingin dapet nutrisi dari berbagai macam buah.
                    Beli sekarang disini</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landingpage-rujak') }}/img/project1.jpeg"
                            alt="">
                        <h4 class="mb-3">Kebersamaan Kami</h4>
                        <p class="mb-4">Kompak, kreatif, dan inovatif.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read
                            More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landingpage-rujak') }}/img/project2.jpeg"
                            alt="">
                        <h4 class="mb-3">Mengecek Produk</h4>
                        <p class="mb-4">Menjaga kualitas produk.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read
                            More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landingpage-rujak') }}/img/project3.jpeg"
                            alt="">
                        <h4 class="mb-3">Mencicipi Produk</h4>
                        <p class="mb-4">Memastikan kelezatan, rasa, dan kesegaran produk.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Address Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Alamat Kami</h1>
            <p>Berisikan alamat rumah kami</p>
        </div>
        <iframe class="w-100" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3965.140257839093!2d106.87631487499168!3d-6.375888393614385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjInMzMuMiJTIDEwNsKwNTInNDQuMCJF!5e0!3m2!1sid!2sid!4v1700008741181!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
    <!-- Address End -->
