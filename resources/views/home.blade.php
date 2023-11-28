@extends('layout.base')

@section('base-layout')
    <header class="col-12 d-flex justify-content-center align-items-center py-4 bg-white shadow-sm position-fixed">
        <section class="col-9 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-5">
                <div class="d-flex align-items-center gap-2 text-success text-decoration-none">
                    <i class="bi bi-chat-square-text-fill fs-2"></i>
                    <h4 class="fw-bold">Laporin!</h4>
                </div>
                <a class="text-success text-decoration-none fs-6 fw-medium" href="#tentang">Tentang laporin</a>
                <a class="text-success text-decoration-none fs-6 fw-medium" href="#faq">FAQ</a>
            </div>
            @auth
                <div>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->nama }}
                        </button>
                        <form action="/logout" method="post">
                            @csrf
                            <ul class="dropdown-menu">
                                <button style="submit" class="dropdown-item">logout</button>
                            </ul>
                        </form>
                    </div>
                </div>
            @endauth
        </section>
    </header>
    <main style="margin-top: 150px;" class="col-12 d-flex flex-column align-items-center">
        <div class="col-12 text-center">
            <h1 class="text-success">Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
            <p class="fs-5">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
        </div>
        <div class="col-6 mt-5">
            <form action="/home" method="post" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Judul aduan</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan judul aduan"
                        name="judulAduan" autofocus>
                </div>
                <div class="col-12">
                    <label for="floatingTextarea2">Isi aduan</label>
                    <textarea class="form-control" placeholder="Jelaskan aduan dengan rinci" id="floatingTextarea2" style="height: 100px"
                        name="isiAduan"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Lokasi kejadian</label>
                    <input type="text" class="form-control" placeholder="Masukkan lokasi kejadian" name="lokasiKejadian">
                </div>
                <div class="col-12">
                    <button class="w-100 btn btn-success">Lapor</button>
                </div>
            </form>
        </div>
        <div id="tentang" style="height: 100vh;" class="col-9 d-flex flex-row justify-content-between align-items-center">
            <div class="col-6">
                <h3 class="text-success fw-bold">Tentang Laporin!</h3>
                <p class="fs-5 mt-4">
                    <b class="text-success">Laporin</b> merupakan platform pengaduan bagi masyarakat Indonesia seperti KDRT
                    atau hal lainnya. Sudah lebih dari 2.000 laporan yang diterima dan kelola serta di tindak lanjuti oleh
                    pihak berwenang, membantu masyarakat Indonesia untuk kehidupan yang lebih baik.
                </p>
            </div>
            <div class="col-4">
                <img class="img-fluid" src={{ asset('asset/family.png') }} alt="">
            </div>
        </div>
        <div style="margin: 200px 0;" id="faq" class="col-6 d-flex flex-column align-items-center">
            <h1 class="text-success">Frequently Asked Question</h1>
            <p>Mungkin ini dapat menjawab beberapa pertanyaan anda.</p>
            <div class="accordion mt-4" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah korban akan mendapat keamanan jika pelaku dilaporkan?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Tentu saja.</strong> Setelah kamu melaporkan aduan, kamu akan mendapat jaminan keamanan
                            seperti tinggal di kantor polisi.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apa saja tindak lanjut yang akan dilakukan pihak berwenang?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setelah menerima laporan aduan dari kamu, <strong>1 x 24 jam</strong> kami akan langsung
                            menindak lanjuti laporan seperti menbawa 5 orang anggota pemuda pancasila ke rumah anda, untuk
                            keamanan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apa saja benefit yang didapatkan pengadu?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            tidak ada
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
