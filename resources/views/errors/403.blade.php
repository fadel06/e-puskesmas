{{-- @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}
@extends('master')

@section('title', __('Terlarang'))

@section('body')
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text  font-weight-bold">403</h1>
                        <h4><i class="fa fa-times-circle text-danger"></i> Terlarang!</h4>
                        <p>Anda tidak memiliki akses untuk menuju halaman ini</p>
                        <div>
                            <a class="btn btn-primary"
                                @role('admin') href="{{ route('dashboard_admin') }}" @elserole('user') href="{{ route('dashboard_user') }}" @endrole>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
