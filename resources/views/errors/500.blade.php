@extends('master')

@section('title', __('Server Bermasalah'))

@section('body')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">500</h1>
                        <h4><i class="fa fa-times-circle text-danger"></i> Kesalahan Internal Server</h4>
                        <p>Anda tidak dapat melihat hasilnya</p>
                        <div>
                            <a class="btn btn-primary" href="./index.html">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
