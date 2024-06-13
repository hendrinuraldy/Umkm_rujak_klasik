    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6" style="text-align: justify;">
                    <h1 class="fw-bold text-danger m-0"> <span style="color: red;">Rujak Klasik</span> <span
                            class="text-primary">&</span> <span style="color: purple;">Bubur Ubi</span></h1>
                    <p>Rujak serut, minuman sehat yang cocok dikonsumsi kapan aja dan dimana aja. Makin enak lagi
                        dikonsumsi pas lagi dingin-dinginnya. Boleh banget loh request ekstra es batu, gratis tanpa
                        biaya tambahan</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1"
                            href="https://youtube.com/@kbmayuarraffah8886"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-light rounded-circle me-1"
                            href="https://youtube.com/@kbmayuarraffah8886"><i class="fab fa-youtube"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-light rounded-circle me-0"
                            href="https://www.instagram.com/rujak.klasik/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Depok, Indonesia</p>
                    <p><i class="fa fa-phone-alt me-3"></i>085210303732</p>
                    <p><i class="fa fa-envelope me-3"></i>ayusurya954@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('login.page') }}">Admin</a>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#contact">Contact Us</a>
                    <a class="btn btn-link" href="#kastemer">Costumer</a>


                </div>
                {{-- Form --}}
                <div class="col-lg-3 col-md-6">
                    <div class="form-review">
                        <h4 class="text-light mb-4">Beri Kami Penilaian!</h4>
                        <form action="{{ route('review.post') }}" method="POST">
                            @csrf
                            @if (session('flash_msg_success'))
                                <div>
                                    <p>{{ session('flash_msg_success') }}</p>
                                </div>
                            @endif
                            @if (session('flash_msg_error'))
                                <div>
                                    <ul>
                                        <li>{{ session('flash_msg_error') }}</li>
                                    </ul>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div>
                                    <ul>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>

                                    </ul>
                                </div>
                            @endif
                            <div class="stars">
                                <input type="radio" name="star_rating" value="1" required />
                                <input type="radio" name="star_rating" value="2" />
                                <input type="radio" name="star_rating" value="3" />
                                <input type="radio" name="star_rating" value="4" />
                                <input type="radio" name="star_rating" value="5" />
                                <i></i>
                            </div>
                            <div class="form-group rating-star row">
                                <div class="col-lg-12 col-6 mb-3 mt-2">
                                    {{-- <label for="name" class="form-label">Nama</label> --}}
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Nama" required autocomplete="off">
                                </div>
                                <div class="col-lg-12 col-6 mb-3">
                                    {{-- <label for="no_telepon" class="form-label">No. Telepon</label> --}}
                                    <input type="text" class="form-control" name="no_telepon"
                                        placeholder="No. Telepon" value="{{ old('no_telepon') }}" required
                                        autocomplete="off">
                                </div>
                                <div class="col-lg-12 col-6 mb-3">
                                    {{-- <label for="no_telepon" class="form-label">Komen</label> --}}
                                    <textarea name="comments" cols="24" rows="4" required placeholder="Komen kamu" class="comment-input">{{ old('comments') }}</textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill py-2 px-3 mt-1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Raldy dan Fabian</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                        Designed By <a href="https://freewebsitecreate.net"> Website Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
