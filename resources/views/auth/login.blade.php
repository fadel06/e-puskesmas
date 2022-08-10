@extends('master')

@section('title')
    Login
@endsection

@section('body')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" width="64" height="64"
                                                x="0" y="0" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                class="">
                                                <rect width="512" height="512" fill="#ffffff" shape="square"
                                                    transform="matrix(1,0,0,1,0,0)"></rect>
                                                <g transform="matrix(0.7,0,0,0.7,76.80000000000001,76.80000000000001)">
                                                    <g xmlns="http://www.w3.org/2000/svg" id="_x32_1_Emergency_call">
                                                        <g id="Emergency_call">
                                                            <path
                                                                d="m291 226h-17.5c-4.142 0-7.5-3.358-7.5-7.5v-17.5c0-5.514-4.486-10-10-10s-10 4.486-10 10v17.5c0 4.142-3.358 7.5-7.5 7.5h-17.5c-5.514 0-10 4.486-10 10s4.486 10 10 10h17.5c4.142 0 7.5 3.358 7.5 7.5v17.5c0 5.514 4.486 10 10 10s10-4.486 10-10v-17.5c0-4.142 3.358-7.5 7.5-7.5h17.5c5.514 0 10-4.486 10-10s-4.486-10-10-10z"
                                                                fill="#007a64" data-original="#000000" class="">
                                                            </path>
                                                            <path
                                                                d="m203.5 31c0 5.523 4.477 10 10 10h85c5.523 0 10-4.477 10-10v-19c0-3.314-2.686-6-6-6h-93c-3.314 0-6 2.686-6 6z"
                                                                fill="#007a64" data-original="#000000" class="">
                                                            </path>
                                                            <path
                                                                d="m343.5 6h-14c-3.314 0-6 2.686-6 6v19c0 13.807-11.193 25-25 25h-85c-13.807 0-25-11.193-25-25v-19c0-3.314-2.686-6-6-6h-14c-23.472 0-42.5 19.028-42.5 42.5v415c0 23.472 19.028 42.5 42.5 42.5h175c23.472 0 42.5-19.028 42.5-42.5v-415c0-23.472-19.028-42.5-42.5-42.5zm-17.5 465h-140c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h140c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5zm-70-140c-52.383 0-95-42.617-95-95s42.617-95 95-95 95 42.617 95 95-42.617 95-95 95z"
                                                                fill="#007a64" data-original="#000000" class="">
                                                            </path>
                                                            <path
                                                                d="m256 156c-44.112 0-80 35.888-80 80s35.888 80 80 80 80-35.888 80-80-35.888-80-80-80zm34.432 105h-6.432c-1.657 0-3 1.343-3 3v6.432c0 13.986-11.445 25.801-25.429 25.565-13.588-.23-24.571-11.355-24.571-24.997v-7c0-1.657-1.343-3-3-3h-6.432c-13.986 0-25.801-11.445-25.565-25.429.23-13.588 11.355-24.571 24.997-24.571h7c1.657 0 3-1.343 3-3v-6.432c0-13.986 11.445-25.801 25.429-25.565 13.588.23 24.571 11.355 24.571 24.997v7c0 1.657 1.343 3 3 3h7c13.642 0 24.767 10.983 24.996 24.571.237 13.984-11.578 25.429-25.564 25.429z"
                                                                fill="#007a64" data-original="#000000" class="">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <h3 class="text-white mt-2 font-weight-bold">E-Puskesmas</h3>
                                    </div>
                                    <h5 class="text-center mb-4 text-white">Masuk Menuju Panel</h5>
                                    <form action="{{ route('authenticated') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text"
                                                class="form-control text-black @error('username') is-invalid @enderror"
                                                placeholder="Masukkan username" value="{{ old('username') }}"
                                                name="username">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password"
                                                class="form-control text-black @error('password') is-invalid @enderror"
                                                placeholder="******" name="password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Ingatkan
                                                        Saya!</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-white text-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
