@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">


                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)

                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                      </div>
                                </li>
                            </ul>

                        @endforeach
                    @endif
                    <form action="{{ route('post.update', ['id' => $posts->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select type="text" class="form-control" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>

                        </div>
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                        </div>
                        <div class="form-group">
                          <label for="content">Description</label><br>
                          <textarea name="content"  cols="89" rows="10"> {{ $posts->content }} </textarea>
                        </div>
                        <div class="form-group">
                          <label for="featured">Photo</label>
                          <input type="file" class="form-control" name="featured">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('posts') }}" class="btn btn-secondary ">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
