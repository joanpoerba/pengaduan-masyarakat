@extends('layout.base')

@section('base-layout')
    <div class="row d-flex justify-content-center align-items-center m-0 p-0">
        <div class="col-6 d-flex justify-content-center p-0">
            <div class="col-7 bg-white rounded-2 shadow-lg p-4">
                <h6 class="fw-semibold text-success m-0">Ayo cegah kekerasan dalam rumah tangga!</h6>
                <h1 class="fw-bold text-success m-0">Login</h1>
                <h6 class="fw-normal mt-3">Selamat datang kembali, ayo login</h6>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger d-flex items-center gap-2 mt-4" role="alert">
                        <i class="bi bi-exclamation-triangle text-danger"></i>
                        <p class="text-danger fst-italic m-0">{{ session('loginError') }}</p>
                    </div>
                @endif
                <form class="d-flex flex-column gap-4 mt-4" action="/" method="post">
                    @csrf
                    <ul class="p-0 d-flex flex-column gap-4">
                        <li class="form-floating list-unstyled">
                            <input id="nama" class="form-control" type="text" placeholder="Nama lengkap"
                                name="nama" autofocus required>
                            <label for="nama">Nama</label>
                        </li>
                        <li class="form-floating list-unstyled">
                            <input id="password" class="form-control" type="text" placeholder="Password" name="password"
                                required>
                            <label for="password">Password</label>
                        </li>
                        <li class="list-unstyled">
                            <button class="w-100 py-2 btn btn-success">Login</button>
                        </li>
                    </ul>
                </form>
                <p>Belum punya akun? <a class="text-decoration-none" href="/register">Register</a></p>
            </div>
        </div>
        <div style="height: 100vh;" class="col-6 p-0">
            <img class="h-100 w-100 object-fit-cover" src={{ asset('asset/banner.jpg') }} alt="">
        </div>
    </div>
@endsection
