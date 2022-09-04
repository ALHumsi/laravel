@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

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
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
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
                          <input type="text" class="form-control" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="content">Description</label><br>
                          <textarea name="content"  cols="89" rows="10"></textarea>
                        </div>
                        <!-- Check Box -->
                        <label>Tags</label>
                            @foreach ($tags as $tag)

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                {{ $tag->tag }}
                                </label>
                            </div>

                            @endforeach
                          <!-- End Check Box -->
                        <div class="form-group">
                          <label for="featured">Photo</label>
                          <input type="file" class="form-control" name="featured">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('posts') }}" class="btn btn-secondary ">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
