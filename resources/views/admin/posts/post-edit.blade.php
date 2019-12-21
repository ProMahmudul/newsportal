@extends('layouts.master')

@php
    $setting = \App\Setting::orderBy('id', 'DESC')->first();
@endphp
@section('page-title')
    Edit Post - @if($setting) {{ $setting->site_title }} @endif
@endsection

@section('page-heading')
    <span class="badge badge-primary">Post</span> -
    <small>Edit post</small>
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
        <form action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="row" class="bg-white">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="title">Add New Post</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title here"
                               value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description"
                                  rows="15">{!! $post->description !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Publish">
                    </div>

                    <div class="form-check-inline row py-2">
                        <label class="form-check-label" for="is_featured">
                            Featured this post? <input type="checkbox" class="form-check-input" id="is_featured"
                                                       name="is_featured"
                                                       value="1" {{ ($post->is_featured == 1) ? 'checked' : '' }}>
                        </label>
                    </div>

                    <div class="form-group row">
                        <label for="status">Publication Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="1" {{ ($post->status == 1) ? 'selected ="selected"' : '' }}>Active</option>
                            <option value="0" {{ ($post->status == 0) ? 'selected ="selected"' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control category" required>
                            <option value="">-- Select --</option>
                            @if($post->local_post)
                                @if($post->id == $post->local_post->post_id)
                                    @php
                                        $category = \App\Category::where('id', $post->category_id)->first();
                                    @endphp

                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? 'selected ="selected"' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            @else
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? 'selected ="selected"' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            @endif

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

                    <div class="form-group">
                        <label for="image">Featured Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <img src="{{ Storage::url($post->image) }}" alt="Post image" width="150">
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
            $.get('/lv-admin/posts/json-divisions/' + country_id, function (data) {
                console.log(data);
                $('#divisions').empty();
                $('#divisions').append('<option value="0" disable="true" selected="true">-- Select Division --</option>');

                $('#districts').empty();
                $('#districts').append('<option value="0" disable="true" selected="true">-- Select District --</option>');

                $('#upazilas').empty();
                $('#upazilas').append('<option value="0" disable="true" selected="true">-- Select Upazila --</option>');

                $.each(data, function (index, divisionsObj) {
                    var elements = '<option value="' + divisionsObj.id + '">';
                    elements += divisionsObj.bn_name;
                    elements += '</option>';
                    // $('#divisions').append('<option value="'+ divisionsObj.id +'">'+ divisionsObj.bn_name +'</option>');
                    $('#divisions').append(elements);
                })
            })
        })

        $('#divisions').on('change', function (e) {
            console.log(e);
            var division_id = e.target.value;
            $.get('/lv-admin/posts/json-districts/' + division_id, function (data) {
                console.log(data);
                $('#districts').empty();
                $('#districts').append('<option value="0" disable="true" selected="true">-- Select District --</option>');

                $('#upazilas').empty();
                $('#upazilas').append('<option value="0" disable="true" selected="true">-- Select Upazila --</option>');

                $.each(data, function (index, districtsObj) {
                    $('#districts').append('<option value="' + districtsObj.id + '">' + districtsObj.bn_name + '</option>');
                })
            })
        })

        $('#districts').on('change', function (e) {
            console.log(e);
            var district_id = e.target.value;
            $.get('/lv-admin/posts/json-upazilas/' + district_id, function (data) {
                console.log(data);
                $('#upazilas').empty();
                $('#upazilas').append('<option value="0" disable="true" selected="true">-- Select Upazila --</option>');
                $.each(data, function (index, upazilasObj) {
                    $('#upazilas').append('<option value="' + upazilasObj.id + '">' + upazilasObj.bn_name + '</option>');
                })
            })
        })
    </script>
@endsection