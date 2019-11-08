@extends('layouts.master')

@php
    $setting = \App\Setting::orderBy('id', 'DESC')->first();
@endphp
@section('page-title')
    Add Post - @if($setting) {{ $setting->site_title }} @endif
@endsection

@section('page-heading')
    <span class="badge badge-primary">Post</span> -
    <small>Add new post</small>
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
    <div class="card card-body">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="row" class="bg-white">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="title">Add New Post</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title here" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="15"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Publish">
                    </div>

                    <div class="form-check-inline row py-2">
                        <label class="form-check-label" for="is_featured">
                            Featured this post? <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" value="1">
                        </label>
                    </div>

                    <div class="form-group row">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control category" required>
                            <option value="0">-- Select --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="divisions">Division</label>
                        <select class="form-control" name="divisions" id="divisions">
                            {{--<option value="" disable="true" selected="true">-- Select Division --</option>--}}
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="districts">District</label>
                        <select class="form-control" name="districts" id="districts">
                            {{--<option value="" disable="true" selected="true">-- Select District --</option>--}}
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="upazilas">Upazila</label>
                        <select class="form-control" name="upazilas" id="upazilas">
                            {{--<option value="" disable="true" selected="true">-- Select Upazila --</option>--}}
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="image">Featured Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>

            </div>
        </form>

    </div>
@endsection

@section('script')
    <script>


        $('.category').on('change', function (e) {
            console.log(e);
            var country_id = e.target.value;
            $.get('/lv-admin/posts/json-divisions/'+ country_id, function (data) {
                console.log(data);
                $('#divisions').empty();
                $('#divisions').append('<option value="0" disable="true" selected="true">-- Select Division --</option>');

                $('#districts').empty();
                $('#districts').append('<option value="0" disable="true" selected="true">-- Select District --</option>');

                $('#upazilas').empty();
                $('#upazilas').append('<option value="0" disable="true" selected="true">-- Select Upazila --</option>');

                $.each(data, function (index, divisionsObj) {
                    $('#divisions').append('<option value="'+ divisionsObj.id +'">'+ divisionsObj.bn_name +'</option>');
                })
            })
        })

        $('#divisions').on('change', function (e) {
            console.log(e);
            var division_id = e.target.value;
            $.get('/lv-admin/posts/json-districts/'+ division_id, function (data) {
                console.log(data);
                $('#districts').empty();
                $('#districts').append('<option value="0" disable="true" selected="true">-- Select District --</option>');

                $('#upazilas').empty();
                $('#upazilas').append('<option value="0" disable="true" selected="true">-- Select Upazila --</option>');

                $.each(data, function (index, districtsObj) {
                    $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.bn_name +'</option>');
                })
            })
        })

        $('#districts').on('change', function (e) {
            console.log(e);
            var district_id = e.target.value;
            $.get('/lv-admin/posts/json-upazilas/'+ district_id, function (data) {
                console.log(data);
                $('#upazilas').empty();
                $('#upazilas').append('<option value="0" disable="true" selected="true">-- Select Upazila --</option>');
                $.each(data, function (index, upazilasObj) {
                    $('#upazilas').append('<option value="'+ upazilasObj.id +'">'+ upazilasObj.bn_name +'</option>');
                })
            })
        })
    </script>
@endsection