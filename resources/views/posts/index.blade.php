@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #C7EED8">All Post</div>

                <div class="card-body">
                    @if ($posts->count()>0)
                    <table class="table">
                        <thead>
                          <tr class="table-success">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($posts as $post)

                            <tbody>
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-thumbnail" width="100px" height="100px">
                                </td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    <div>
                                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-warning">Edit</a>
                                    </div><br>
                                    <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach
                        @else
                        <tr>
                            <th><div class="alert alert-danger" class="text-center">No Posts</div><th>
                        </tr>
                      @endif

                    </table>
                    <a href="{{ route('post.create') }}" class="btn btn-success">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
