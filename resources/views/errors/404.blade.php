@extends('master')

@section('title', __('Tidak Ditemukan'))

@section('body')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> Halaman yang anda ketikan tidak ditemukan!</h4>
                        <p>Mungkin anda salah mengisikan alamat web atau halaman telah dipindahkan.</p>
                        <div>
                            <a class="btn btn-primary" href="./index.html">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
