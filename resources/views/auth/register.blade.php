@extends('layout.base')

@section('base-layout')
    <div class=" d-flex justify-content-center align-items-center">
        <div class="col-6 d-flex justify-content-center p-0">
            <div class="col-7 bg-white rounded-2 shadow-lg p-4">
                <h6 class="fw-semibold text-success m-0">Ayo cegah kekerasan dalam rumah tangga!</h6>
                <h1 class="fw-bold text-success m-0">Register</h1>
                <h6 class="fw-normal mt-3">Selamat datang kembali, ayo login</h6>
                <form class="d-flex flex-column gap-4 mt-4" action="/register" method="post">
                    @csrf
                    <ul class="p-0 d-flex flex-column gap-4">
                        <li class="form-floating list-unstyled">
                            <input id="nama" class="form-control" type="text" placeholder="Nama lengkap"
                                name="nama" autofocus required>
                            <label for="nama">Nama</label>
                        </li>
                        <li class="form-floating list-unstyled">
                            <input id="nik" class="form-control" type="text" placeholder="Nama lengkap"
                                name="nik" maxlength="16" autofocus required>
                            <label for="nik">NIK</label>
                        </li>
                        <li class="form-floating list-unstyled">
                            <input id="password" class="form-control" type="text" placeholder="Password" name="password"
                                required>
                            <label for="password">Password</label>
                        </li>
                        <li class="list-unstyled">
                            <button class="w-100 py-2 btn btn-success">Register</button>
                        </li>
                    </ul>
                </form>
                <p>Sudah punya akun? <a class="text-decoration-none" href="/">Login</a></p>
            </div>
        </div>
        <div style="height: 100vh;" class="col-6 p-0">
            <img class="h-100 w-100 object-fit-cover" src={{ asset('asset/banner.jpg') }} alt="">
        </div>
    </div>
@endsection
