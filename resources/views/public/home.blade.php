@extends('layout.main')

@section('content')

    <section id="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-11 ms-5 mb-3 pt-5" style="max-width: 1260px;">
                    <div class="mb-3">
                        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active ms-5 p-5" style="background-color: #0b9c84">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('img/attackontitans4.jpg') }}" style="width: 270px" alt="" class="d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body ms-5 bg-transparent">
                                                <h3 class="card-title fw-bold mb-5">Attack on Titan: Final Season (Season 4)</h3>
                                                <p class="card-text fw-bold">Penulis &nbsp;&nbsp;&nbsp; : Hajime Isayama</p>
                                                <p class="card-text fw-bold">Penerbit &nbsp; : Kodansha</p>
                                                <p class="card-text fw-bold">Tema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Aksi, Drama, Fantasi, Militer, Misteri, Shounen, Kekuatan Super</p>
                                                <p class="card-text fw-bold">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : On Going</p>
                                                <a href="http://127.0.0.1:8000/manga/show/4" class="btn btn-dark mt-4 py-2 px-3"><i class="bi bi-card-text"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ms-5 p-5" style="background-color: #ffc117">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('img/haikyuu!!.jpg') }}" style="width: 270px" alt="" class="d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body ms-5 bg-transparent">
                                                <h3 class="card-title fw-bold mb-5">Haikyuu!!</h3>
                                                <p class="card-text fw-bold">Penulis &nbsp;&nbsp;&nbsp; : Haruichi Furudate</p>
                                                <p class="card-text fw-bold">Penerbit &nbsp; : Shueisha</p>
                                                <p class="card-text fw-bold">Tema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Komedi, Drama, Sekolah, Shounen, Olahraga</p>
                                                <p class="card-text fw-bold">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Completed</p>
                                                <a href="http://127.0.0.1:8000/manga/show/6" class="btn btn-dark mt-4 py-2 px-3"><i class="bi bi-card-text"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ms-5 p-5" style="background-color: #1d95cc">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('img/narutoshippuden.jpg') }}" style="width: 270px" alt="" class="d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body ms-5 bg-transparent">
                                                <h3 class="card-title fw-bold mb-5">Masashi Kishimoto</h3>
                                                <p class="card-text fw-bold">Penulis &nbsp;&nbsp;&nbsp; : Shueisha</p>
                                                <p class="card-text fw-bold">Penerbit &nbsp; : Kodansha</p>
                                                <p class="card-text fw-bold">Tema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Petualangan, Komedi, Seni Bela Diri, Perang</p>
                                                <p class="card-text fw-bold">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Completed</p>
                                                <a href="http://127.0.0.1:8000/manga/show/5" class="btn btn-dark mt-4 py-2 px-3"><i class="bi bi-card-text"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection