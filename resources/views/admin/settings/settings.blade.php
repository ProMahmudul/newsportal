@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/datatables/dataTables.bootstrap4.min.css">
@endsection

@section('page-title')
    Settings
@endsection

@section('page-heading')
    <span class="badge badge-primary">Settings</span> -
    <small>Make your settings</small>
@endsection

@section('main-content')
    @if(Session::has('message'))
        <div class="alert {{ Session::get('alert_type') }} alert-dismissible fade show" data-auto-dismiss>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ Session::get('message') }}.
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Manage your settings</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="@if($setting) {{ $setting->id }} @endif">
                <div class="form-group row">
                    <label for="site_title" class="col-md-4 col-form-label text-md-right">{{ __('Site Title') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="site_title" name="site_title" value="@if($setting) {{ $setting->site_title }} @endif">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tagline" class="col-md-4 col-form-label text-md-right">{{ __('Tagline') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="tagline" name="tagline" value="@if($setting) {{ $setting->tagline }} @endif">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail Address') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Site Logo') }}</label>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                            <div class="col-md-6">
                                <img src="@if($setting) {{ Storage::url($setting->logo) }} @endif" alt="" width="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="favicon" class="col-md-4 col-form-label text-md-right">{{ __('Site Favicon') }}</label>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="favicon" name="favicon">
                            </div>
                            <div class="col-md-6">
                                <img src="@if($setting) {{ Storage::url($setting->favicon) }} @endif" alt="" width="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="information" class="col-md-4 col-form-label text-md-right">{{ __('Site Information') }}</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="information" id="information" cols="30" rows="5">
                            @if($setting) {{ $setting->site_information }} @endif
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4 offset-md-4">
                        <input type="submit" value="Save" class="btn btn-primary float-right d-inline-block">
                    </div>
                    {{--<div class="col-md-6"></div>--}}
                </div>
            </form>
        </div>
    </div>

@endsection
