@extends('layouts.master')

@section('page-title')
    Edit Post - Prothom Alo
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
        <form action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="row" class="bg-white">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="title">Add New Post</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title here" value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="10">{!! $post->description !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Publish">
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
                        <select name="category" id="category" class="form-control" required>
                            <option value="">-- Select --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? 'selected ="selected"' : '' }}>{{ $category->name }}</option>
                            @endforeach
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

@endsection