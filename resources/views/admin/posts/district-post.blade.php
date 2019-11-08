@extends('layouts.master')

@section('page-title')
    Add Post - Prothom Alo
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
                        <textarea class="form-control" name="description" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Publish">
                    </div>
                    <div class="form-group row">
                        <label for="category">Division</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="">-- Select --</option>
                            {{--@foreach($categories as $category)--}}
                                {{--<option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="category">District</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="">-- Select --</option>
                            {{--@foreach($categories as $category)--}}
                            {{--<option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="category">Upozilla</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="">-- Select --</option>
                            {{--@foreach($categories as $category)--}}
                            {{--<option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Featured Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection

@section('script')

@endsection